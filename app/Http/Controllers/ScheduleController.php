<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Professional;
use App\Http\Services\UploadService;

class ScheduleController extends Controller {

    private $model_schedule;
    private $model_professional;

    function __construct() {
        $this->model_schedule = new Schedule();
        $this->model_professional = new Professional();
    }
    
    public function setData($request){
        $data = [
            'consultation' => $request['consultation'],
            'professional_id' => $request['professional_id'],
            'patient_id' => $request['patient_id'],
        ];
        return $data;
    }
    public function form($id){
        $professional = $this->model_professional->getProfessional($id);
        return view('schedule.form', compact('professional'));
    }
    public function index() {
        $schedules = $this->model_schedule->getAllSchedules();
        return view('schedule.index', compact('schedules'));
    }

    public function store(Request $request) {
        $this->model_schedule;
    }

    public function show($id) {
        $schedule = $this->model_schedule->getSchedule($id);
        return view('schedule.show', compact('schedule'));
    }
}
