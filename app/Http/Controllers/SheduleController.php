<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Http\Services\UploadService;

class ScheduleController extends Controller {

    private $model;

    function __construct() {
        $this->model = new Schedule();
    }
    
    public function setData($request){
        $data = [
            'consultation' => $request['consultation'],
            'professional_id' => $request['professional_id'],
            'how_known' => $request['how_known'],
        ];
        return $data;
    }
    
    public function index() {
        $schedules = $this->model->getAllSchedules();
        return view('schedule.index', compact('schedules'));
    }

    public function store(Request $request) {
        $this->model->updateSemModel($request['id'], $this->set_data($request));
        return redirect()->route('schedule.index')->with('success', 'Agendamento realizado.');
    }

    public function show($id) {
        $schedule = $this->model->getSchedule($id);
        return view('schedule.show', compact('schedule'));
    }
}
