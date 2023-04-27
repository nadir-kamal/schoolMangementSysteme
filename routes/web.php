<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\AdminMatiereController;
use App\Http\Controllers\Admin\AdminStudentController;

=======
use App\Http\Controllers\Admin\AdminTaskController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminEmployeeController;
use App\Http\Controllers\Admin\AdminHolidaysController;
use App\Http\Controllers\Admin\AdminDepartmentController;
>>>>>>> b27edfe5c9baa659bd9a7a328d90e1e58d21d4f3

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

Route::get('/', [HomeController::class,'index'])->name("home.index");
Route::get('/about', [HomeController::class,'about'])->name("home.about");
Route::get('/admin',[AdminHomeController::class,'index'])->name("admin.home.index");

Route::middleware('auth')->group(function () {
<<<<<<< HEAD
    Route::resource('/admin/student', AdminStudentController::class)->names([
        'index' => 'admin.student.index',
        'create' => 'admin.student.create',
        'store' => 'admin.student.store',
        'show' => 'admin.student.show',
        'edit' => 'admin.student.edit',
        'update' => 'admin.student.update',
        'destroy' => 'admin.student.destroy',
    ]); 
      Route::resource('/admin/matiere', AdminMatiereController::class)->names([
        'index' => 'admin.matiere.index',
        'create' => 'admin.matiere.create',
        'store' => 'admin.matiere.store',
        'show' => 'admin.matiere.show',
        'edit' => 'admin.matiere.edit',
        'update' => 'admin.matiere.update',
        'destroy' => 'admin.matiere.destroy',
    ]);    
=======
    Route::resource('/admin/employees', AdminEmployeeController::class)->names([
        'index' => 'admin.employees.index',
        'create' => 'admin.employees.create',
        'store' => 'admin.employees.store',
        'show' => 'admin.employees.show',
        'edit' => 'admin.employees.edit',
        'update' => 'admin.employees.update',
        'destroy' => 'admin.employees.destroy',
    ]);   Route::resource('/admin/department', AdminDepartmentController::class)->names([
        'index' => 'admin.department.index',
        'create' => 'admin.department.create',
        'store' => 'admin.department.store',
        'show' => 'admin.department.show',
        'edit' => 'admin.department.edit',
        'update' => 'admin.department.update',
        'destroy' => 'admin.department.destroy',
    ]);  Route::resource('/admin/projects', AdminProjectController::class)->names([
        'index' => 'admin.projects.index',
        'create' => 'admin.projects.create',
        'store' => 'admin.projects.store',
        'show' => 'admin.projects.show',
        'edit' => 'admin.projects.edit',
        'update' => 'admin.projects.update',
        'destroy' => 'admin.projects.destroy',
    ]);Route::resource('/admin/holidays', AdminHolidaysController::class)->names([
        'index' => 'admin.holidays.index',
        'create' => 'admin.holidays.create',
        'store' => 'admin.holidays.store',
        'show' => 'admin.holidays.show',
        'edit' => 'admin.holidays.edit',
        'update' => 'admin.holidays.update',
        'destroy' => 'admin.holidays.destroy',
    ]);     ;Route::resource('/admin/tasks', AdminTaskController::class)->names([
        'index' => 'admin.tasks.index',
        'create' => 'admin.tasks.create',
        'store' => 'admin.tasks.store',
        'show' => 'admin.tasks.show',
        'edit' => 'admin.tasks.edit',
        'update' => 'admin.tasks.update',
        'destroy' => 'admin.tasks.destroy',
    ]);      
>>>>>>> b27edfe5c9baa659bd9a7a328d90e1e58d21d4f3
});
Auth::routes();

