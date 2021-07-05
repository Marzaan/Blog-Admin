<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Login-Register
Route::post('/register',[RegisterController::class, 'storeUser']);
Route::post('/login',[LoginController::class, 'loginAuthentication']);
Route::get('/logout',[LoginController::class, 'logout']);

// Posts
Route::get('/posts',[PostsController::class, 'allPost']);
Route::get('/profile/{username}',[PostsController::class, 'myPost']);
Route::post('/addPost',[PostsController::class, 'storePost']);
Route::post('/updatePost/{id}',[PostsController::class, 'updatePost']);
Route::get('/deletePost/{id}',[PostsController::class, 'deletePost']);
Route::get('/postInfo/{pid}',[PostsController::class, 'postInfo']);
Route::get('/userPosts/{name}',[PostsController::class, 'userPosts']);

// Comments
Route::post('/addComment/{pid}/{name}',[CommentsController::class, 'storeComment']);
Route::get('/comments/{pid}',[CommentsController::class, 'viewComment']);

// Users
Route::get('/users',[UsersController::class, 'allUser']);
Route::get('/search/{query}',[UsersController::class, 'searchUser']);

// Default for Laravel auth
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
