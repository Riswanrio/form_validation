<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'gender'=>$this->gender,
            'phone'=>$this->phone,
            'bday'=>$this->bday,
            'email'=>$this->email,
            'password'=>$this->password,
            
        ];
    }
}
