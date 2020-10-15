<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Authendication extends Authenticatable
{
    use HasFactory;

    protected $guard = 'super_admin';
    
    protected $table = 'admin';

    protected $fillable = ['name', 'email', 'mobile', 'password', 'status', 'user_type'];
}
