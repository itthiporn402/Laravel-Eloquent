<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_code', 'name', 'email'];

    // ความสัมพันธ์กับ Course
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'registers');
    }
}
