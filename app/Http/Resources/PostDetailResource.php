<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [ // custom data yang nanti akan muncul di api, isi data bebas ga perlu sesuai db
            'id' => $this->id,
            'title' => $this->title,
            // 'square'=> $square
            'news_content' => $this->news_content,
            'created_at' => date_format($this->created_at, 'Y-m-d H:i:s'), //format tahun bulan tanggal jam menit detik
            'author' => $this->author,// menambahkan author
            'writer' => $this->writer

        ];
    }
}
