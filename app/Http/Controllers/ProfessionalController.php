<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\Http\Services\UploadService;

class ProfessionalController extends Controller {

    private $model;

    function __construct() {
        $this->model = new Professional();
    }
    
    public function index($specialtie_id) {
        $professionals = $this->model->getAllProfessionals($specialtie_id);
        return view('professional.index', compact('professionals'));
    }
}
