<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserViolations extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'violation_type',
        'violation_date',
        'description',
        'violation_photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
