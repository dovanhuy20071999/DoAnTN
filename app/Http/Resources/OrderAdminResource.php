<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderAdminResource extends JsonResource
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
            'user_name' => $this->name,
            'status' => $this->status,
            'type_name' => $this->name_type,
            'question_of_test' => $this->question,
            'teacher_name' => $this->teacher_name,
            'content' => $this->content,
            'score' => $this->gradle,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
