<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Officeboy extends User
{
    use HasFactory,HasApiTokens,Notifiable;

    protected $guarded = ['id'];



    public function getStatus(){
        return $this->belongsTo(UserStatus::class, 'status_id');
    }

}
