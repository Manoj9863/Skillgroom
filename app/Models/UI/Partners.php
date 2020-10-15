<?php

namespace App\Models\UI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;

    protected $table = 'partners';

    protected $fillable = ['name', 'email', 'mobile', 'state', 'city', 'tution', 'subjects', 'standard', 'education', 'no_of_students', 'website'];
}
