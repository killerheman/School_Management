<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function enrollTeacher() {
        return view('admin.enroll_teacher');
    }

    public function allTeachers() {
        return view('admin.all_teachers');
    }
}
