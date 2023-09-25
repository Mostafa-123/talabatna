<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'hr_code'=>$this->hr_code,
            'name'=>$this->name,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'password'=>$this->password,
            'floor_number'=>$this->floor_number,
            'image'=>url('images/profiles/'.$this->image),
            'title_en_name'=>$this->getTitle->en_name,
            'title_ar_name'=>$this->getTitle->ar_name,
            'department_en_name'=>$this->getDepartment(),
            'department_ar_name'=>$this->getDepartmentArName(),
            'status_en_name'=>$this->getStatus->en_name,
            'status_ar_name'=>$this->getStatus->ar_name,

        ];
    }
}
