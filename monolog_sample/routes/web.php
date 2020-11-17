<?php

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

Route::get('/', function () {

    logger()->info('fugafuga'); // ヘルパー関数を使用した方法
    \Log::warning('hogehoge'); // ファサードを使用した方法

    return view('welcome');
});
