<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login',[userController::class,"login"]);

Route::post("/login",[userController::class,"login_user"])->name("login_user");

Route::get("/register",[userController::class,"register"]);

Route::post("/register",[userController::class,"register_user"])->name("register_user");


Route::get("/home",[productController::class,"home"])->name("home");

Route::get("/showproduct/{id}",[productController::class,"showproduct"])->name("product.show");

Route::get("/cartlist",[cartController::class,"cart_list"]);

Route::post("/add_to_cart/{id}",[cartController::class,"add_to_cart"])->name("add_to_cart");

Route::put("/checkout",[cartController::class,"checkout"])->name("checkout");