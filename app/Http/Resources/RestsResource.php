<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestsResource extends JsonResource
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
             'id' => (string) $this->id,
             'attributes' => [
                 'startTime'   => $this->start_time,
                 'endTime'     => $this->end_date
             ],
             'relationships' => [
                 'id' => $this->user->id
            ]
        ];
    }
}
