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

    function __construct() {
        $this->model_schedule = new Schedule();
        $this->model_professional = new Professional();
        $this->model_patient = new Patient();
    }

    public function setDataSchedule($request, $id) {
        $data = [
            'consultation' => $request['consultation'],
            'professional_id' => $request['professional_id'],
            'patient_id' => $id,
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
        dd($request);
        $id = $this->model_patient->store($this->setDataPatient($request));
        $this->model_schedule->store($this->setDataSchedule($request), $id);
        dd($this->setDataPatient($request), $this->setDataSchedule($request));
    }

    public function show($id) {
        $schedule = $this->model_schedule->getSchedule($id);
        return view('schedule.show', compact('schedule'));
    }

}
