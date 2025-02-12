<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AHPController;
use App\Http\Controllers\CBAController;
use App\Http\Controllers\MFSMController;

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/cba', function () {
    return view('cba.index');
});
Route::get('/step1', function () {
    return view('cba.step1');
})->name('cba1'); 
Route::get('/step2', function () {
    return view('cba.step2');
})->name('cba2'); 
Route::get('/step3', function () {
    return view('cba.step3');
})->name('cba3'); 
Route::get('/step4', function () {
    return view('cba.step4');
})->name('cba4'); 
Route::get('/step5', function () {
    return view('cba.step5');
})->name('cba5');


// Route untuk langkah 6
Route::get('/step6', function () {
    return view('cba.step6');
})->name('ahp.step6');

// Route untuk perhitungan dan hasil
Route::post('/ahp/calculate', [AHPController::class, 'calculate'])->name('ahp.calculate');

Route::get('/mfsm', function () {
    return view('mfsm.mfsm1');
});
Route::get('/mfsm2', function () {
    return view('mfsm.mfsm2');
})->name('mfsm2'); 
Route::get('/mfsm3', function () {
    return view('mfsm.mfsm3');
})->name('mfsm3'); 

Route::get('/mfsm4', [MFSMController::class, 'index'])->name('mfsm.mfsm4');
Route::post('/mfsm4', [MFSMController::class, 'process'])->name('mfsm.process');

Route::get('/langkah1', function () {
    return view('deba.langkah1');
})->name('langkah1'); 
Route::get('/langkah2', function () {
    return view('deba.langkah2');
})->name('langkah2'); 
Route::get('/langkah3', function () {
    return view('deba.langkah3');
})->name('langkah3'); 
Route::get('/langkah4', function () {
    return view('deba.langkah4');
})->name('langkah4'); 

Route::get('/hasil-perhitungan', [CBAController::class, 'tampilkanHasil'])->name('deba.hasil-perhitungan');





