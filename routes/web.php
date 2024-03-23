<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('mytemplate.home');
// });
Route::get('mytemplate',[EmployeeController::class,'index']);
Route::get('edit/{id}',[EmployeeController::class,'edit']);

Route::post('store',[EmployeeController::class,'store'])->name('store');
// Route::get('/info',function(){
//     return view('mytemplate.info');
// });