<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = ['course_name', 'teacher_name', 'type', 'fees', 'featured_image', 'status'];
}
