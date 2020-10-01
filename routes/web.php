<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu\MenuController;


//Route::get('/', function () {
 //   return view('main');
//});*/


Route::get('/user', [MenuController::class, 'index']);