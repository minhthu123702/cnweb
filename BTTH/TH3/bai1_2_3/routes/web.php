<?php

use App\Http\Controllers\SalesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SalesController::class, 'index'])->name('index'); 


Route::get('/students', [StudentController::class, 'index'])->name('index'); 
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
//     return view('index'); // Trỏ đến file `index.blade.php`
// });

