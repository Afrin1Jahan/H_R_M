<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Homecontroller as FrontendHomeController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\NoticeController as FrontendNoticeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DesignationController;
use App\Http\Controllers\Backend\LeaveController;
use App\Http\Controllers\Backend\LeaveTypeController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\AttendenceController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Frontend\setupshowController as FrontendsetupshowController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CompanysetupController;
use App\Http\Controllers\Backend\CalanderController;
use App\Http\Controllers\Backend\Homecontroller;
use App\Http\Controllers\Backend\PayrollController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SalarystractureController;
use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [FrontendHomeController::class, 'home'])->name('home');
Route::get('/serviceview', [FrontendHomeController::class, 'service'])->name('service.view');
Route::post('/search/notice', [NoticeController::class, 'search'])->name('search.notice');
Route::get('/Notice/show/', [FrontendNoticeController::class, 'noticeshow'])->name('notice.show');
// Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');

// Route::post('/registration',[CustomerController::class, 'store'])->name('customer.store');
// Route::get('/login',[CustomerController::class, 'login'])->name('customer.login');
// Route::post('/login',[CustomerController::class,'doLogin'])->name('customer.do.login');



//all admin panel routs

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [UserController::class, 'loginFrom'])->name('admin.login');
    Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');
    Route::group(['middleware' => 'auth'], function () {








        // Route::group(['middleware'=> 'CheckAdmin'],function(){
        Route::get('/', [Homecontroller::class, 'Home'])->name('dashboard');

        // Route::group(['middleware' => 'CheckAdmin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.name');
        Route::get('/Department', [DepartmentController::class, 'department']);
        Route::get('/department/list', [DepartmentController::class, 'list'])->name('department.list');
        Route::get('/department/view/{id}', [DepartmentController::class, 'view'])->name('department.view');
        Route::get('/department/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');
        Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
        Route::put('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
        Route::get('/department/creatform', [DepartmentController::class, 'creatform'])->name('department.form');
        Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store');
        Route::get('/report', [ReportController::class, 'reportview'])->name('department.report');

        Route::get('/designation', [DesignationController::class, 'designation'])->name('des');
        Route::get('/designation/list', [DesignationController::class, 'form'])->name('designation.form');

        Route::get('/designation/edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');

        Route::put('/designation/update/{id}', [DesignationController::class, 'updated'])->name('designation.update');

        Route::get('/designation/delete/{id}', [DesignationController::class, 'delete'])->name('designation.delete');

        // Route::get('/designation/creatform', [DesignationController::class, 'creatform'])->name('designation.form');
        Route::post('/designation/store', [DesignationController::class, 'store'])->name('designation.store');

        Route::get('/designation/report', [DesignationController::class, 'reportview'])->name('designation.report');

        Route::get('/Employee', [EmployeeController::class, 'employee'])->name('employee.name');
        Route::get('/Employee/form', [EmployeeController::class, 'form'])->name('employee.form');
        Route::get('/Employee/edit/{id}', [EmployeeController::class, 'edit'])->name('Employee.edit');
        Route::get('/Employee/leave/balance/{id}', [EmployeeController::class, 'balance'])->name('Employee.leave.balance');

        Route::post('/Employee/store', [EmployeeController::class, 'store'])->name('employee.store');

        Route::get('/Employee/delete/{id}', [EmployeeController::class, 'delete'])->name('Employee.delete');

        Route::get('/Employee/report', [EmployeeController::class, 'report'])->name('Employee.report');


        Route::get('/payroll', [PayrollController::class, 'list'])->name('payroll.list');
        Route::get('/payroll/list/{employee_id}', [PayrollController::class, 'form'])->name('payroll.form');

        Route::post('/payroll/store', [PayrollController::class, 'store'])->name('payroll.store');

        Route::get('/payroll/report', [PayrollController::class, 'report'])->name('payroll.report');

        Route::get('/SalaryStracture', [SalarystractureController::class, 'list'])->name('salary.list');
        Route::get('/salarystracture/form', [SalarystractureController::class, 'form'])->name('salary.form');
        Route::post('/salarystracture/store', [SalarystractureController::class, 'store'])->name('salary.store');
        Route::get('/salarystracture/edit/{id}', [SalarystractureController::class, 'edit'])->name('salary.edit');
        Route::put('salarystracture/update/{id}', [SalarystractureController::class, 'update'])->name('salary.update');
        Route::get('/salarystracture/report', [SalarystractureController::class, 'report'])->name('salary.report');

        Route::get('/leavetype/list', [LeaveTypeController::class, 'list'])->name('leavetype.list');
        Route::get('/leavetype/form', [LeaveTypeController::class, 'form'])->name('leavetype.form');
        Route::get('/leavetype/edit/{id}', [LeaveTypeController::class, 'edit'])->name('leavetype.edit');
        Route::get('/leavetype/delete/{id}', [LeaveTypeController::class, 'delete'])->name('leavetype.delete');
        Route::post('/leavetype/store', [LeaveTypeController::class, 'store'])->name('leavetype.store');
        Route::get('/Notice/list', [NoticeController::class, 'list'])->name('notice.list');
        Route::get('/Notice/form', [NoticeController::class, 'form'])->name('notice.form');
        Route::post('/Notice/store', [NoticeController::class, 'store'])->name('notice.store');


        // });



        // Route::group(['middleware' => 'IsEmployee'], function () {




        Route::get('/attendence/list', [AttendenceController::class, 'list'])->name('attendence.list');
        Route::get('/attendence/delete/{id}', [AttendenceController::class, 'delete'])->name('attendence.delete');
        Route::get('/attendence/)edit/{id}', [AttendenceController::class, 'edit'])->name('attendence.edit');
        Route::put('/attendence/update/{id}', [AttendenceController::class, 'update'])->name('attendence.update');
        Route::get('/attendence/checkin', [AttendenceController::class, 'checkin'])->name('attendence.checkin');
        Route::get('/attendence/checkout', [AttendenceController::class, 'checkout'])->name('attendence.checkout');
        Route::post('/attendence/store', [AttendenceController::class, 'store'])->name('attendence.store');
        Route::get('/attendance/report', [AttendenceController::class, 'report'])->name('attendance.report');


        Route::get('/leave/manage', [LeaveController::class, 'manage'])->name('leave.manage');
        Route::get('/leave/list', [LeaveController::class, 'list'])->name('leave.list');
        Route::get('/leave/form', [LeaveController::class, 'form'])->name('leave.form');
        Route::post('/leave/store', [LeaveController::class, 'store'])->name('leave.store');
        Route::get('/leave/approve/{id}', [LeaveController::class, 'approve'])->name('leave.approved');
        Route::get('/leave/reject/{id}', [LeaveController::class, 'reject'])->name('leave.reject');
        // });

        Route::get('/Report', [ReportController::class, 'list'])->name('user.report');
        // Route::get('/role', [RoleController::class, 'role'])->name('role.role');

        Route::get('/Company/setup', [CompanysetupController::class, 'list'])->name('company.list');
        Route::get('/Company/list', [CompanysetupController::class, 'form'])->name('company.form');
        Route::post('/Company/store', [CompanysetupController::class, 'store'])->name('company.store');
        Route::get('companysetup/show/', [FrontendsetupshowController::class, 'setupshow'])->name('setup.show');
        Route::get('companysetup/delete/{id}', [FrontendsetupshowController::class, 'delete'])->name('company.delete');

        Route::get('/company/contact', [ContactController::class, 'view'])->name('company.view');
        Route::get('/Holiday/calander', [CalanderController::class, 'calander']);

        Route::get('/profile', [UserController::class, 'profile'])->name('profile.view');
        Route::get('/profile/edit/', [UserController::class, 'profileedit'])->name('profile.edit');
        Route::put('/profile/update', [UserController::class, 'profileupdate'])->name('profile.update');
        Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');
        Route::get('/users', [UserController::class, 'list'])->name('users.list');
        Route::get('/users/create', [UserController::class, 'createFrom'])->name('users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    });
}); 
// });