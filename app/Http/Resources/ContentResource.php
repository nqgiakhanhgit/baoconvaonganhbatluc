<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $name = $this->imageLogo;
        $pathFull = '/uploads/'.$name;
        return [
            'name'=> $this->titleName_ENG,
            'content'=> $this->contentOverall_ENG,
            'image'=> 'http://localhost:8000' . '/storage' . $pathFull
        ];
    }
}