<?php

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



