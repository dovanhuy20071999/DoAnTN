<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'user_id' => $this->user_id,
            'status' => $this->status,
            'type_name' => $this->name,
            'question_of_test' => $this->question,
            'teacher_name' => $this->teacher_name,
            'content' => $this->content,
            'score' => $this->gradle,
            'updated_at' => $this->updated_at,
        ];
    }
}
