<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department; 
use App\Models\Reply;
use App\Models\User;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'summary',
        'build_platform',
        'steps_reproduce',
        'expected_result',
        'actual_result',
        'support_documentation',
        'department_id',
        'new_or_repeated',
        'severity',
        'status',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department'); // Define the belongsTo relationship with Department
    }

    public function replies()
    {
        return $this->hasMany(Reply::class); // Define the hasMany relationship with Reply
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
    }
}
