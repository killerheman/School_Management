<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;


Route::get('/', function () {
    return view('welcome');
});

Route::group(
    ['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'],
    function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/class', [AdminController::class, 'class'])->name('class');
        Route::get('/addclass', [AdminController::class, 'addClass'])->name('addclass');
        Route::get('/section', [AdminController::class, 'section'])->name('section');
        Route::get('/addsection', [AdminController::class, 'addSection'])->name('addsection');
        Route::get('/session', [AdminController::class, 'session'])->name('session');
        Route::get('/addsession', [AdminController::class, 'addSession'])->name('addsession');
        Route::get('/month', [AdminController::class, 'month'])->name('month');
        Route::get('/addmonth', [AdminController::class, 'addMonth'])->name('addmonth');
        Route::get('/feetype', [AdminController::class, 'feeType'])->name('feetype');
        Route::get('/addfeetype', [AdminController::class, 'addFeeType'])->name('addfeetype');
        Route::get('/transportlocation', [AdminController::class, 'transportLocation'])->name('transportlocation');
        Route::get('/addtransportlocation', [AdminController::class, 'addTransportLocation'])->name('addtransportlocation');


        //Fees Management Routes
        Route::get('/feemaster', [FeeController::class, 'feeMaster'])->name('feemaster');
        Route::get('/studentfee', [FeeController::class, 'studentFee'])->name('studentfee');
        Route::get('/transportfeemaster', [FeeController::class, 'transportFeeMaster'])->name('transportfeemaster');
        Route::get('/transportfee', [FeeController::class, 'transportFee'])->name('transportfee');

        //Student Routes
        Route::get('/enrollstudent', [StudentController::class, 'enrollStudent'])->name('enrollstudent');
        Route::get('/allstudents', [StudentController::class, 'allStudents'])->name('allstudents');


        //Staff Routes
        Route::get('/enrollteacher', [StaffController::class, 'enrollTeacher'])->name('enrollteacher');
        Route::get('/allteachers', [StaffController::class, 'allTeachers'])->name('allteachers');

    });
