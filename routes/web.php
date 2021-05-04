<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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
//     return view('welcome');
// });

Route::get('/', MahasiswaController::class . '@index');

Route::get('back',MahasiswaController::class . '@back');

Route::get('create',MahasiswaController::class . '@create');

Route::post('insert', MahasiswaController::class . '@insert');

Route::get('delete/{id}',MahasiswaController::class . '@delete');

Route::get('edit/{id}',MahasiswaController::class . '@edit');

Route::post('update/{id}', MahasiswaController::class . '@update');

Route::get('read/{id}',MahasiswaController::class . '@show');