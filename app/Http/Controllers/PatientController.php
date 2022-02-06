<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Services\UploadService;

class PatientController extends Controller {

    private $model_patient;

    function __construct() {
        $this->model_patient = new Patient();
    }
    
    public function setData($request){
        $data = [
            'name' => $request['name'],
            'cpf' => $request['cpf'],
            'birth' => $request['birth'],
            'how_known' => $request['how_known'],
        ];
        return $data;
    }
    public function form($id){
        return view('patient.form', compact('id'));
    }

    public function index() {
        $patients = $this->model_patient->getAllPatients();
        return view('patient.index', compact('patients'));
    }

    public function store(Request $request) {
        $this->model_patient->store($this->setData($request));
    }

    public function show($id) {
        $patient = $this->model_patient->getPatient($id);
        return view('patient.show', compact('patient'));
    }
}
