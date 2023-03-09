<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\admin\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

    // student 
    Route::group(['prefix'=>'student'],function(){
        Route::get('all-student',[StudentController::class, 'index']);
        Route::get('admit-form',[StudentController::class, 'create']);
        Route::post('admit-form',[StudentController::class, 'save']);
        Route::get('edit/{id}',[StudentController::class, 'edit']);
        Route::post('edit/{id}',[StudentController::class, 'update']);
        Route::get('delete/{id}',[StudentController::class, 'delete']);
        Route::get('view/{id}',[StudentController::class, 'view']);
    });
});

Route::fallback(function(){
    return redirect('admin/dashboard');
});