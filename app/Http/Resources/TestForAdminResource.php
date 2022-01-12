<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestForAdminResource extends JsonResource
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
            'topic_name' => $this->name,
            'question' => $this->question,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'image_base64' => $this->base64,
        ];
    }
}
