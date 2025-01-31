<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $registers = Register::with(['student', 'course'])->get(); // Join with student and course
        return view('registers.index', compact('registers'));
    }
}
