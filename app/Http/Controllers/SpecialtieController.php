<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialtie;
use App\Http\Services\UploadService;

class SpecialtieController extends Controller {

    private $model;
    private $service_upload;

    function __construct() {
        $this->model = new Specialtie();
        $this->service_upload = new UploadService();
    }

    public function set_data(Request $request) {
        $data = [
            'name' => $request['name'],
        ];
        return $data;
    }

    public function index() {
        $specialties = $this->model->getAllSpecialties();
        return view('specialtie.index', compact('specialties'));
    }

    public function create() {
        return view('specialtie.create');
    }

    public function store(Request $request) {
        $this->model->updateSemModel($request['id'], $this->set_data($request));
        return redirect()->route('specialtie.index')->with('success', 'Uma especialidade inserida.');
    }

    public function show($id) {
        $specialtie = $this->model->getSpecialtie($id);
        return view('specialtie.show', compact('specialtie'));
    }

    public function edit($id) {
        $specialtie = $this->model->getSpecialtie($id);
        return view('specialtie.edit', compact('specialtie'));
    }

    public function update(Request $request, $id) {
        $this->model->updateSemModel($id, $this->set_data($request));
        return redirect()->route('specialtie.index')->with('success', 'Especialidade alterada');
    }

    public function destroy($id) {
        $specialtie = $this->model->getSpecialtie($id);
        try {
            $this->model->remove($id);
        } catch (\Exception $e) {
            return redirect()->route('specialtie.index')->with('error', $specialtie->nome . ' não pode ser excluída. Verifique se há profissionais cadastrados para esta especialidade.');
        }
        return redirect()->route('specialtie.index')->with('success', 'Especialidade excluída');
    }
}
