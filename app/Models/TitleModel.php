<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleModel extends Model
{
    use HasFactory;

    public function getDepartment()
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
