<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function enrollStudent() {
        return view('admin.enroll_student');
    }

    public function allStudents() {
        return view('admin.all_students');
    }
}
