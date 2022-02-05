<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Specialtie extends Model
{
    //
    protected $table = "specialtie";
    protected $fillable = ['name',];
    public function getAllspecialties()
    {
        return Specialtie::query()->select('*')->get();
    }
    public function remove($id){
        Specialtie::destroy($id);
    }
    public function store(array $options = [])
    {
        return Specialtie::query()->insertGetId($options);
    }
    public function getSpecialtie($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Specialtie::query()->where('id', '=', $id)->update($options);
    }
}