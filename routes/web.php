<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardSuperAdmin;
use App\Http\Controllers\PerusahaanController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard-super-admin')->group(function() {
    Route::get('',[DashboardSuperAdmin::class,'index'])->name ('dashboardSuperAdmin');
    
    Route::controller(PerusahaanController::class)
    ->prefix('/perusahaan')
    ->group(function() {    
        Route::get("/", 'index')->name('dataPerusahaan');
    });
});
