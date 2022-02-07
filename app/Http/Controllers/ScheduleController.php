<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Professional;
use App\Patient;
use App\Http\Services\UploadService;

class ScheduleController extends Controller {

    private $model_schedule;
    private $model_professional;
    private $model_patient;
    private $id;
    private $result_test = "Falso";

    function __construct() {
        $this->model_schedule = new Schedule();
        $this->model_professional = new Professional();
        $this->model_patient = new Patient();
    }

    public function setDataSchedule($request) {
        $data = [
            'consultation' => $request['consultation'],
            'professional_id' => $request['professional_id'],
            'patient_id' => $this->id,
        ];
        return $data;
    }

    public function setDataPatient($request) {
        $data = [
            'name' => $request['name'],
            'cpf' => $request['cpf'],
            'birth' => $request['birth'],
            'how_known' => $request['how_known'],
        ];
        return $data;
    }

    public function form($id) {
        $professional = $this->model_professional->getProfessional($id);
        return view('schedule.form', compact('professional'));
    }
    public function index() {
        $schedules = $this->model_schedule->getAllSchedules();
        return view('schedule.index', compact('schedules'));
    }

    public function store(Request $request) {
        $patient = $this->setDataPatient($request);
        $this->test($patient);
        $result_test = $this->result_test;
        $professional = '';
        $patient_name = '';
        $consultation = '';
        if($result_test == "Falso"){
            $this->id = $this->model_patient->store($patient);
            $schedule = $this->setDataSchedule($request);
            $consultation = $schedule['consultation'];
            $patient_name = $this->model_patient->getPatient($this->id)['name'];
            $professional = $this->model_professional->getProfessional($request['professional_id'])['name'];
            $this->model_schedule->store($schedule);
        }
        return view("schedule.message", compact('professional', 'patient_name', 'consultation', 'result_test'));
    }
    public function test($patient){
        if($patient['name']==''){
            $this->result_test = "Preencha o nome do paciente";
        }elseif ($patient['cpf']=='') {
            $this->result_test = "Preencha o cpf do paciente";
        }elseif ($patient['birth']=='') {
            $this->result_test = "Selecione uma data de nascimento";
        }else if($patient['how_known']=="Selecione uma opção"){
            $this->result_test = "Responda como o paciente conheceu a clínica";
        }else{
            return true;
        }
    }

    public function show($id) {
        $schedule = $this->model_schedule->getSchedule($id);
        return view('schedule.show', compact('schedule'));
    }

}
