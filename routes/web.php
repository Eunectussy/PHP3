<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; //import
use App\Http\Controllers\SinhVienController;

//GET POST => Method HTTP

//http://127.0.0.1:8000/ => Base url

Route::get('/', function () {
    echo 'Trang chủ';
});

Route::get('/danh-sach-san-pham', function () {
    echo '123';
});

Route::get('/list-user', [UserController::class, 'showUser']);

//Slug
//http://127.0.0.1:8000/1/2/3/lig
Route::get('/get-user/{id}/{name?}', [UserController::class, 'getUser']);

//Params
//http://127.0.0.1:8000/list-user?id=1&name=skibidi
Route::get('/update-user', [UserController::class, 'updateUser']);

//lab 1
Route::get('/thongtinsv', [SinhVienController::class, 'viewSinhVien']);

