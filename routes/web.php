<?php

use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index']);

Route::post('/addtocard',[HomeController::class,'addtocard'])->name("addtocard");
Route::get('/foodcard', [HomeController::class,'foodcard'])

    ->name('food.card');
Route::get('/remove/{id}',[HomeController::class,'removefromcard'])->name("removefromcard");
Route::post('/confirm_order',[HomeController::class,'cardconfirm'])->name("card.confirm");
Route::get('/delivered/{id}',[adminController::class,'delivered'])->middleware('auth','admin')
->name("delivered");
Route::get('/cancel/{id}',[adminController::class,'cancel'])->middleware('auth','admin')
->name("cancel");

Route::post('/booktable',[HomeController::class,'booktable'])->name("booktable");

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::get('/dashboard', [HomeController::class, 'home'])
    ->middleware(['auth', 'user'])
    ->name('dashboard');

//
Route::get('/dashboard', [HomeController::class,'home'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');

Route::get('/addfood',[admincontroller::class,'addfood'])->middleware('auth','admin')
->name('addfood');

Route::post('/addfood',[admincontroller::class,'postaddfood'])->middleware('auth','admin')
->name('postaddfood');

Route::get('/showfood',[admincontroller::class,'showfood'])->middleware('auth','admin')
->name('showfood');

Route::get('/vieworders',[admincontroller::class,'vieworders'])->middleware('auth','admin')
->name('vieworders');



Route::get('/deletefood/{id}',[admincontroller::class,'deletefood'])->middleware('auth','admin')
->name('deletefood');

Route::get('/updatefood/{id}',[admincontroller::class,'updatefood'])->middleware('auth','admin')
->name('updatefood');

Route::get('/viewbookedtable',[admincontroller::class,'viewbookedtable'])->middleware('auth','admin')
->name('viewbookedtable');

