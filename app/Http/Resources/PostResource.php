<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {   $square = 5 * 5;
        return [ // custom data yang nanti akan muncul di api, isi data bebas ga perlu sesuai db
            'id' => $this->id,
            'title' => $this->title,
            // 'square'=> $square
            'news_content' => $this->news_content
        ];
    }
}
