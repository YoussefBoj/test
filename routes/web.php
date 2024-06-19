<?php
use App\Http\Controllers\employeController;
use App\Models\employe;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [EmployeController::class, 'index'])->name('employe.index');
Route::get('/create', [EmployeController::class, 'create'])->name('employe.create');
Route::post('/store', [EmployeController::class, 'store'])->name('employe.store');


Route::resource('employes', employeController::class);


