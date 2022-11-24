<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
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
//UserRoutes
Route::get('/',[userController::class,"login"]);

Route::get("/login",[userController::class,"login"])->name("login");
Route::post("/postlogin",[userController::class,"postlogin"]);

Route::get("/register",[userController::class,"register"]);
Route::post("/postregister",[userController::class,"postregister"]);

Route::get("/logout",[userController::class,"logout"]);

Route::get("/layout",[userController::class,"layout"]);
//ProductRoutes
Route::get("/product/index",[productController::class,"index"]);
Route::get("/product/add",[productController::class,"add"]);
Route::get("/product/store",[productController::class,"store"]);
