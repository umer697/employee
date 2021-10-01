<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;




Route::get('/', [MainController::class,'welcome']);

//auth

Route::post('auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('auth/logout',[MainController::class, 'logout'])->name('auth.logout');




Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('auth/register',[MainController::class, 'register'])->name('auth.register');
    Route::get('admin/dashboard',[MainController::class, 'dashboard'])->name('admin.dashboard');
  //designation
    Route::get('desig/{id}/delete',[DesignationController::class, 'destroy']);
    Route::resource('desig',DesignationController::class);
    //Department
    Route::get('depart/{id}/delete',[DepartmentController::class, 'destroy']);
    Route::resource('depart',DepartmentController::class);
    //Employee
    Route::get('emp/{id}/delete',[EmployeeController::class, 'destroy']);
    Route::resource('emp',EmployeeController::class);

});
