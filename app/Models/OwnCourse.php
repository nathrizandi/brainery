<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnCourse extends Model
{
    use HasFactory;
    protected $table = "own_courses";
    protected $guarded = [];
}
