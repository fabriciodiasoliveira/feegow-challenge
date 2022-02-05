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
        return Fornecedor::query()->select('*')->get();
    }
    public function remove($id){
        Fornecedor::destroy($id);
    }
    public function store(array $options = [])
    {
        return Fornecedor::query()->insertGetId($options);
    }
    public function getFornecedor($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Fornecedor::query()->where('id', '=', $id)->update($options);
    }
}