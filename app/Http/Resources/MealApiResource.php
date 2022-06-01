<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MealApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->deleted_at > 0 ? 'deleted' : 'created',
            'category' => [
                'id' => $this->category->id,
                'title' => $this->category->title,
                'slug' => $this->category->slug
            ],

            'tags' => [
                'id' => $this->tags->id,
                'title' => $this->tags->title,
                'slug' => $this->tags->slug
            ],

            'ingredients' => [
                'id' => $this->ingredients->id,
                'title' => $this->ingredients->title,
                'slug' => $this->ingredients->slug
            ]
            
        ];
    }
}
