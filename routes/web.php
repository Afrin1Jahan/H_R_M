<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanysetupController;
use App\Http\Controllers\CalanderController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\SalarystractureController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ami ja likhbo ekhane sob lower case e hobe.

Route::get('/',[HomeController::class,'Home']);
Route::get('/Employee',[EmployeeController::class,'employee']);
Route::get('/Employee/form',[EmployeeController::class,'form']);
Route::post('/Employee/store',[EmployeeController::class,'store'])->name('store.list');



//Route::get('/Department',[DepartmentController::class,'department']);
Route::get('/department/list',[DepartmentController::class,'list'])->name('department.list');
Route::get('/department/creatform',[DepartmentController::class,'creatform'])->name('department.form');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');





Route::get('/Designation',[DesignationController::class,'designation']);
Route::get('/Designation/list',[DesignationController::class,'list'])->name('designation.list');



Route::get('/payroll',[PayrollController::class,'payroll']);
Route::get('/payroll/list',[PayrollController::class,'list']);
Route::post('/payroll/store',[PayrollController::class,'store'])->name('payroll.store');





Route::get('/SalaryStracture',[SalarystractureController::class,'stracture']);
Route::get('/salarystracture/form',[SalarystractureController::class,'form']);
Route::post('/salarystracture/store',[SalarystractureController::class,'store'])->name('salary.store');















Route::get('/Leave',[LeaveController::class,'leave']);
Route::get('/Leave/Type',[LeaveTypeController::class,'leavetype']);
Route::get('/Notice',[NoticeController::class,'notice']);
Route::get('/Attendence',[AttendenceController::class,'attendence']);
Route::get('/Reportt',[ReportController::class,'report']);
Route::get('/Admin',[AdminController::class,'admin']);
Route::get('/Company/setup',[CompanysetupController::class,'setup']);
Route::get('/Holiday/calander',[CalanderController::class,'calander']);