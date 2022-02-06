<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Professional;
use App\Http\Services\UploadService;

class PatientController extends Controller {

    private $model;

    function __construct() {
        $this->model = new Patient();
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
    public function index() {
        $patients = $this->model->getAllPatients();
        return view('patient.index', compact('patients'));
    }

    public function store(Request $request) {
        $this->model;
    }

    public function show($id) {
        $patient = $this->model->getPatient($id);
        return view('patient.show', compact('patient'));
    }
}
