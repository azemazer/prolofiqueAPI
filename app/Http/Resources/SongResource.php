<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'song_title' => $this->title,
            'song_price' => "€".$this->price,
            'song_description' => $this->description,
            'song_length' => $this->length,
            'song_date' => $this->date,
            'song_url' => $this->url,
        ];
    }
}
