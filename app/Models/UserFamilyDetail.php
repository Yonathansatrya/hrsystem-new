<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFamilyDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_family_id',
        'child_name',
        'child_gender',
    ];

    public function userFamily()
    {
        return $this->belongsTo(UserFamily::class, 'user_family_id');
    }
}
