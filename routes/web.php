<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Homecontroller as FrontendHomeController;
use App\Http\Controllers\Frontend\CustomerController;

use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DesignationController;
use App\Http\Controllers\Backend\LeaveController;
use App\Http\Controllers\Backend\LeaveTypeController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\AttendenceController;
use App\Http\Controllers\Backend\ReportController;

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CompanysetupController;
use App\Http\Controllers\Backend\CalanderController;
use App\Http\Controllers\Backend\Homecontroller;
use App\Http\Controllers\Backend\PayrollController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SalarystractureController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;

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


//website panel routs

Route::get('/',[FrontendHomeController::class, 'home'])->name('home');

// Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');

// Route::post('/registration',[CustomerController::class, 'store'])->name('customer.store');
// Route::get('/login',[CustomerController::class, 'login'])->name('customer.login');
// Route::post('/login',[CustomerController::class,'doLogin'])->name('customer.do.login');



//all admin panel routs

Route::group(['prefix'=>'admin'],function(){


Route::get('/login',[UserController::class,'loginFrom'])->name('admin.login');


Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');


Route::group(['middleware' => 'auth'], function () {



    // Route::group(['middleware => '])

    

 Route::get('/profile', [UserController::class, 'profile'])->name('profile.view');
 Route::get('/profile/edit/',[UserController::class,'profileedit'])->name('profile.edit');
 Route::put('/profile/update',[UserController::class,'profileupdate'])->name('profile.update');
Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');
Route::get('/',[Homecontroller::class,'Home'])->name('dashboard');


Route::get('/users',[UserController::class, 'list'])->name('users.list');
Route::get('/users/create',[UserController::class,'createFrom'])->name('users.create');
Route::post('/users/store',[UserController::class,'store'])->name('users.store');

Route::get('/Employee',[EmployeeController::class,'employee'])->name('employee.name');
Route::get('/Employee/form',[EmployeeController::class,'form'])->name('employee.form');
Route::post('/Employee/store',[EmployeeController::class,'store'])->name('employee.store');

Route::get('/Department',[DepartmentController::class,'department']);
Route::get('/department/list',[DepartmentController::class,'list'])->name('department.list');


Route::get('/department/delete/{id}',[DepartmentController::class, 'delete'])->name('department.delete');

Route::get('/department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');

Route::put('/department/update/{id}',[DepartmentController::class,'update'])->name('department.update');


Route::get('/department/creatform',[DepartmentController::class,'creatform'])->name('department.form');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');


Route::get('/designation',[DesignationController::class,'designation'])->name('des');
Route::get('/designation/list',[DesignationController::class,'list'])->name('designation.list');
Route::get('/designation/creatform',[DesignationController::class,'creatform'])->name('designation.form');
Route::post('/designation/store',[DesignationController::class,'store'])->name('designation.store');


Route::get('/attendence/list',[AttendenceController::class,'list'])->name('attendence.list');
Route::get('/attendence/creatform',[AttendenceController::class,'form'])->name('attendence.form');
Route::post('/attendence/store',[AttendenceController::class,'store'])->name('attendence.store');







Route::get('/payroll',[PayrollController::class,'payroll']);
Route::get('/payroll/list',[PayrollController::class,'list']);
Route::post('/payroll/store',[PayrollController::class,'store'])->name('payroll.store');


Route::get('/SalaryStracture',[SalarystractureController::class,'list'])->name('salary.list');
Route::get('/salarystracture/form',[SalarystractureController::class,'form'])->name('salary.form');
Route::post('/salarystracture/store',[SalarystractureController::class,'store'])->name('salary.store');


Route::get('/Leave/list',[LeaveController::class,'list'])->name('leave.list');
Route::get('/Leave/Type',[LeaveTypeController::class,'leavetype']);


Route::get('/Notice',[NoticeController::class,'notice']);

Route::get('/Reportt',[ReportController::class,'report']);

Route::get('/role',[RoleController::class,'role'])->name('role.role');
Route::get('/Company/setup',[CompanysetupController::class,'setup']);
Route::get('/Holiday/calander',[CalanderController::class,'calander']);
});
});