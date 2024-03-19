<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class admins extends Authenticatable
{
    use HasFactory;
     protected $fillable=['ar_first_name',
     'en_first_name',
     'en_last_name',
     'ar_last_name',
     'email',
     'phone','image','gender','status','type',
     'password'];
     protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
