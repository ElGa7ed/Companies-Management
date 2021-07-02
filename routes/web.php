<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\Dashboard\CompanyController;
use App\Models\Employee;

define('PAGINATION_COUNT',10);

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// employees routes

Route::group([ 'middleware' => 'auth'], function () {

        ######################### Begin employees Route     ########################
        Route::group(['prefix' => 'employees'], function () {
        Route::get('/',[EmployeeController::class, 'index']) -> name('dashboard.employees');
        Route::get('create',[EmployeeController::class, 'create']) -> name('dashboard.employees.create');
        Route::post('store',[EmployeeController::class, 'store']) -> name('dashboard.employees.store');
        Route::get('edit/{id}',[EmployeeController::class, 'edit']) -> name('dashboard.employees.edit');
        Route::post('update/{id}',[EmployeeController::class, 'update']) -> name('dashboard.employees.update');
        Route::get('delete/{id}',[EmployeeController::class, 'destroy']) -> name('dashboard.employees.delete');


        });
        ######################### End employees Route      ########################


        ######################### Begin companies Route     ########################
        Route::group(['prefix' => 'companies'], function () {
            Route::get('/',[CompanyController::class, 'index']) -> name('dashboard.companies');
            Route::get('create',[CompanyController::class, 'create']) -> name('dashboard.companies.create');
            Route::post('store',[CompanyController::class, 'store']) -> name('dashboard.companies.store');
            Route::get('edit/{id}',[CompanyController::class, 'edit']) -> name('dashboard.companies.edit');
            Route::post('update/{id}',[CompanyController::class, 'update']) -> name('dashboard.companies.update');
            Route::get('delete/{id}',[CompanyController::class, 'destroy']) -> name('dashboard.companies.delete');
            
            
        });
        ######################### End companies Route      ########################

});