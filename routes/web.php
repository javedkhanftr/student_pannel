<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\admin\AttendenceController;
use App\Http\Controllers\Admin\ParentsController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ClassController;
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
    Route::group(['prefix'=>'student/'],function(){
        Route::get('all-student',[StudentController::class, 'index']);
        Route::get('admit-form',[StudentController::class, 'create']);
        Route::post('admit-form',[StudentController::class, 'save']);
        Route::get('edit/{id}',[StudentController::class, 'edit']);
        Route::post('edit/{id}',[StudentController::class, 'update']);
        Route::get('delete/{id}',[StudentController::class, 'delete']);
        Route::get('view/{id}',[StudentController::class, 'view']);
    });
    Route::group(['prefix'=>'account/'],function(){
        Route::get('all-expense',[AccountController::class,'index']);
        Route::get('add-expense',[AccountController::class, 'create']);
        Route::post('add-expense',[AccountController::class, 'save']);
        Route::get('edit-expense/{id}',[AccountController::class, 'edit']);
        Route::post('edit-expense/{id}',[AccountController::class, 'update']);
        Route::get('delete/{id}',[AccountController::class, 'delete']);
    });
    Route::group(['prefix'=>'attendence/'],function(){
        Route::get('student-attendence',[AttendenceController::class,'index']);
    });
    Route::group(['prefix' => 'parents'], function () {
        Route::get('all-parents', [ParentsController::class, 'index']);
        Route::get('admit-form', [ParentsController::class, 'create']);
        Route::post('admit-form', [ParentsController::class, 'save']);
        Route::get('edit/{id}', [ParentsController::class, 'edit']);
        Route::post('edit/{id}', [ParentsController::class, 'update']);
        Route::get('delete/{id}', [ParentsController::class, 'delete']);
        Route::get('view/{id}', [ParentsController::class, 'view']);
    });
    Route::group(['prefix' => 'notice'], function () {
        Route::get('all-parents', [NoticeController::class, 'index']);
        Route::get('admit-form', [NoticeController::class, 'create']);
        Route::post('admit-form', [NoticeController::class, 'save']);
        Route::get('edit/{id}', [NoticeController::class, 'edit']);
        Route::post('edit/{id}', [NoticeController::class, 'update']);
        Route::get('delete/{id}', [NoticeController::class, 'delete']);
        Route::get('view/{id}', [NoticeController::class, 'view']);
       
       
    });
    Route::group(['prefix' => 'class'], function () {
        Route::get('all-class', [ClassController::class, 'index']);
        Route::get('admit-form', [ClassController::class, 'create']);
        Route::post('admit-form', [ClassController::class, 'save']);
        Route::get('edit/{id}', [ClassController::class, 'edit']);
        Route::post('edit/{id}', [ClassController::class, 'update']);
        Route::get('delete/{id}', [ClassController::class, 'delete']);
        Route::get('view/{id}', [ClassController::class, 'view']);
       
       
    });
});

Route::fallback(function(){
    return redirect('admin/dashboard');
});