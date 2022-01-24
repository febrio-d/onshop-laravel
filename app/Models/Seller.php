<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = ['password'];
}
