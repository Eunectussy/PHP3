<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; //import
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\ProductController;

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

// group
// http://127.0.0.1:8000/user/list-users

Route::group(['prefix' => 'users', 'as' => 'users.'], function(){
    Route::get('list-users', [UserController::class, 'listUsers'])->name('listusers');
    Route::get('add-users', [UserController::class, 'addUsers'])->name('addusers');

    Route::post('add-users', [UserController::class, 'addPostUsers'])->name('addpostusers');

    
    Route::get('delete-user/{idUser}', [UserController::class, 'deleteUser'])->name('deleteuser');
    Route::get('update-user/{idUser}', [UserController::class, 'getUser'])->name('getuser');
    Route::post('update-users', [UserController::class, 'updatePostUser'])->name('updatepostuser');
});

Route::group(['prefix' => 'products', 'as' => 'products.'], function(){
    Route::get('list-products', [ProductController::class, 'listProducts'])->name('listproduct');
    Route::get('add-products', [ProductController::class, 'addProducts'])->name('addproducts');
    Route::get('delete-products/{idPro}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
    Route::get('update-products/{idPro}', [ProductController::class, 'updateProduct'])->name('updateproduct');
    Route::post('add-products', [ProductController::class, 'addPostProducts'])->name('addpostproducts');
    Route::post('update-products', [ProductController::class, 'updatePostProduct'])->name('updatepostproduct'); 
    Route::get('search-products', [ProductController::class, 'searchProduct'])->name('searchproducts');

});