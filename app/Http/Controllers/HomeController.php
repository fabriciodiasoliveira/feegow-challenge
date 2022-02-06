<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\Specialtie;
class HomeController extends Controller {

    private $model_specialtie;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->model_specialtie = new Specialtie();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $specialties = $this->model_specialtie->getAllspecialties();
        return view('welcome', compact('specialties'));
    }

}
