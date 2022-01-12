<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'teacher_name' => $this->teacher_name,
            'email' => $this->email,
            'address' => $this->address,
            'gender' => $this->gender,
            'phone_number' => $this->phone_number,
            'rating_score' => $this->rating_score,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
