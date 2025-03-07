<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Embloyee extends User
{
    use HasFactory,HasApiTokens,Notifiable;

    protected $table='employees';
    protected $guarded = ['id'];

    public function getTitle(){
        return $this->belongsTo(TitleModel::class , 'titlemodel_id');
    }

    public function getStatus(){
        return $this->belongsTo(UserStatus::class, 'status_id');
    }

    public function getDepartment(){
        return $this->getTitle->getDepartment->en_name;
    }
    public function getDepartmentArName(){
        return $this->getTitle->getDepartment->ar_name;
    }
}
