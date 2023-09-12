<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  
Route::get('user/create', [ HomeController::class, 'create' ]);
Route::post('user/create', [ HomeController::class, 'store' ]);