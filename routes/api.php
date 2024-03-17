<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('article',[ArticleController::class,'getAllArticle']);
Route::get('article/{id}',[ArticleController::class,'show']);
Route::post('article',[ArticleController::class,'postCreateArticle']);
Route::put('article/{id}',[ArticleController::class,'putUpdateArticle']);
Route::delete('article/{id}',[ArticleController::class,'deleteArticle']);
