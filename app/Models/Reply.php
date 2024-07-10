<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class); // Define the belongsTo relationship with Ticket
    }
}
