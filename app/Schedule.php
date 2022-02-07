<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Schedule extends Model
{
    //
    protected $table = "schedule";
    protected $fillable = ['consultation', 'professional_id', 'patient_id',];
    public function getAllSchedules()
    {
        return Schedule::query()->select('*')->get();
    }
    public function remove($id){
        Schedule::destroy($id);
    }
    public function store(array $options = [])
    {
        return Schedule::query()->insertGetId($options);
    }
    public function getSchedule($id)
    {
        return Schedule::query()->select('*', DB::raw('DATE_FORMAT(consultation, "%d/%m/%Y às %H:%i") as formated_time'))->where('id','=',$id)->first();
    }
    public function updateSemModel($id, Array $options)
    {
        Schedule::query()->where('id', '=', $id)->update($options);
    }
}