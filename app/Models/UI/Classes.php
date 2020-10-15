<?php

namespace App\Models\UI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = ['first_name', 'last_name', 'email', 'contact', 'country', 'state', 'city'];
}
