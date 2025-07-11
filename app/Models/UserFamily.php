<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserFamily extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mate_name',
        'mate_phone',
        'wedding_date',
        'wedding_certificate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userFamilyDetails()
    {
        return $this->hasMany(UserFamilyDetail::class, 'user_family_id');
    }
}
