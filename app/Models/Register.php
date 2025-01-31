<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // Relationship กับ Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    // Relationship กับ Course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
