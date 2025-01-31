<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_code', 'course_name'];

    // ความสัมพันธ์กับ Student
    public function students()
    {
        return $this->belongsToMany(Student::class, 'registers');
    }

    // ความสัมพันธ์กับ Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
