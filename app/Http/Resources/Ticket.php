<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Ticket extends JsonResource
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
            "title" => $this->title,
            "summery" => $this->summery,
            'build' => $this->build,
            'steps' => $this->steps,
            'expected' => $this->expected,
            'actual' => $this->actual,
            'deprartment' => $this->deprartment,
            'support' => $this->support,
            'img' => $this->img
        ];
    }
}
