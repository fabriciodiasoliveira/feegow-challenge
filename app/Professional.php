<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Professional extends Model
{
    //
    protected $table = "professional";
    protected $fillable = ['name', 'crm', 'specialtie_id',];
    public function getAllProfessionals($specialtie_id)
    {
        return Professional::query()->select('*')
                ->where('specialtie_id','=',$specialtie_id)->get();
    }
    public function remove($id){
        Professional::destroy($id);
    }
    public function store(array $options = [])
    {
        return Professional::query()->insertGetId($options);
    }
    public function getProfessional($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Professional::query()->where('id', '=', $id)->update($options);
    }
}