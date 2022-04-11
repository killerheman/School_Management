<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function feeMaster() {
        return view('admin.fee_master');
    }

    public function studentFee() {
        return view('admin.student_fee');
    }

    public function transportFeeMaster() {
        return view('admin.transport_fee_master');
    }

    public function transportFee() {
        return view('admin.transport_fee');
    }
}
