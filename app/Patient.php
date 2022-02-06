<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    //
    protected $table = "patient";
    protected $fillable = ['name', 'cpf', 'birth', 'how_known',];
    public function getAllPatients()
    {
        return Patient::query("*")->get();
    }
    public function remove($id){
        Patient::destroy($id);
    }
    public function store(array $options = [])
    {
        return Patient::query()->insertGetId($options);
    }
    public function getPatient($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Patient::query()->where('id', '=', $id)->update($options);
    }
}