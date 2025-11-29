<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ContentController::class, 'index']);
Route::post('/confirm', [ContentController::class, 'store']);
Route::post('/thanks', [ContentController::class, 'thanks']);
Route::post('/admin', [ContentController::class, 'admin']);
Route::post('/search', [ContentController::class, 'search']);
Route::post('/reset', [ContentController::class, 'reset']);
Route::post('/delete', [ContentController::class, 'destroy']);
Route::post('/register', [ContentController::class, 'register']);
Route::post('/login', [ContentController::class, 'login']);
Route::post('/logout', [ContentController::class, 'logout']);
Route::post('/export', [ContentController::class, 'export']);
