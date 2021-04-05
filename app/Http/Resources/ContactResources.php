<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $contact = [
            'contact_id' => $this->contact_id,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'content' => $this->content,
            'application_at' => $this->application_at
        ];
        return $contact;
    }
}