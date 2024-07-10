<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class); // Define the hasMany relationship with Ticket
    }
}
