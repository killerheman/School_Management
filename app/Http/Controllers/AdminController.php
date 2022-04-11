<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function class() {
        return view('admin.class');
    }

    public function addClass() {
        return view('admin.class');
    }

    public function section() {
        return view('admin.section');
    }

    public function addSection() {
        return view('admin.addsection');
    }

    public function session() {
        return view('admin.session');
    }

    public function addSession() {
        return view('admin.session');
    }

    public function month() {
        return view('admin.month');
    }

    public function addMonth() {
        return view('admin.month');
    }

    public function feeType() {
        return view('admin.fee_type');
    }

    public function addFeeType() {
        return view('admin.fee_type');
    }

    public function transportLocation() {
        return view('admin.transport_location');
    }

    public function addTransportLocation() {
        return view('admin.transport_location');
    }

}
