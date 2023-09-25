<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
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
            'en_name'=>$this->en_name,
            'ar_name'=>$this->ar_name,
            'en_details'=>$this->en_details,
            'ar_details'=>$this->ar_details,
            'price'=>$this->price,
            'image'=>url('images/products/'.$this->image),
            'category_en_name'=>$this->getCategory->en_name,
            'category_ar_name'=>$this->getCategory->ar_name,
        ];
    }
}
