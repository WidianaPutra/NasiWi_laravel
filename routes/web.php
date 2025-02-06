<?php

use Illuminate\Support\Facades\Route;

// controller
// view
use App\Http\Controllers\View\LoginPageController;
use App\Http\Controllers\View\RegisterController;
use App\Http\Controllers\View\DashboardController;
// api
use App\Http\Controllers\UserController;

use App\Http\Controllers\OrderController;

// view
// Route::get('/', function () {
//   redirect('dashboard');
// });
Route::get('/', [DashboardController::class, 'index']);
Route::get('/signin', [LoginPageController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

// api

Route::prefix('/api')->group(function () {
  Route::apiResource('/user', UserController::class);
  Route::post('/user/signin', [UserController::class, 'signin']);
  // Route::post('/signin', [UserController::class, 'signin']);

  Route::apiResource('/orders', OrderController::class);
});











// dev
use App\Models\ClasesModel;
use App\Models\UsersModel;
use App\Models\CookieModel;

// Route::get('/dev', function () {
//   // $data = ['class_name' => strtolower('X Kuliner 3')];
//   // if (ClasesModel::where('class_name', '=', $data['class_name'])) {
//   //   return;
//   // }
//   // ClasesModel::create($data);
// });

Route::get('/dev/a/a/a', function () {
  CookieModel::removeUserCookie();
  return view('dev');
});