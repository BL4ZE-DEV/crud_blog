<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('admin-login', [AdminController::class, 'login']);
Route::post('admin-register', [AdminController::class, 'register']);





Route::prefix('category')->middleware(['auth:sanctum', 'auth:admin'])->group( function(){

    Route::post('create', [CategoryController::class, 'store']);
    Route::get('fetch', [CategoryController::class, 'index']);
    Route::put('update', [CategoryController::class, 'update']);
    Route::delete('delete', [CategoryController::class, 'destroy']);
});



//User:
//Register
//Login
//Refresh
//Logout
//Search/FilterBlog
//SelectBlog


//Admin:
//Login
//Refresh
//Logout
//createBlog
//ReadBlog
//SelectBlog
//UpdateBlog
//DeleteBlog
//PublishBlog
//createCategory
//ReadCategory
//DeleteCategory
//createTag
//ReadTag
//DeleteTag



