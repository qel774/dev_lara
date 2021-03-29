<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;

use App\Http\Controllers\ParsonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmpController;


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

// テスト用ルーティング
Route::get('/test', function () {
    return 'テスト';
});


// テストページ表示
Route::get('/person',[ParsonController::class, 'index']);

// テストページ表示
Route::get('/post',[PostController::class, 'index']);

Route::get('/emp',[EmpController::class, 'index']);
Route::post('/emp/delete/{id?}', [EmpController::class, 'destroy']);


