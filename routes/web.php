<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([] , function (){
    Route::get('/listing/create' , [ListingController::class , 'create'])->name('listing.create');
    Route::post('/listing' , [ListingController::class , 'store'])->name('listing.store');
});