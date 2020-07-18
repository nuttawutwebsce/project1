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
    return view('welcome');
});

Route::get('/user/{name}', function ($name) {  //รับค่าจาก url {name}
        return "สัวสดี $name";
});

Route::get("/บวกเลข/{num1}+{num2}", function ($num1,$num2) {
    return $num1 + $num2;
});

Route::get('/showdetail/{name}/{age}/{hi}', function ($name,$age,$hi) {
    return "สวัสดี, $name $age $hi " ;
});

