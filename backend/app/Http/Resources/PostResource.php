<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "postContent" => $this->postContent,
            "f_name" => $this->Users->f_name,
            "l_name" => $this->Users->l_name,
            "profile_image" => $this->Users->profile_image,
        ];
    }
}
