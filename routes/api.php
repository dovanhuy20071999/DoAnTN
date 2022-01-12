<?php

use App\Http\Controllers\Api\BankController;
use App\Http\Controllers\Api\CriterionController;
use App\Http\Controllers\Api\DeadlineController;
use App\Http\Controllers\Api\EssayController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\TopicController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/deadline', DeadlineController::class);
Route::resource('/order', OrderController::class);
Route::resource('/user', UserController::class);
Route::resource('/level', LevelController::class);
Route::resource('/type', TypeController::class);
Route::resource('/topic', TopicController::class);


//Essay
Route::resource('/essay', EssayController::class);
Route::get('/essay-of-user/{id}', [EssayController::class, 'getEssayByUserId']);
Route::get('/my-essay/{user_id}', [OrderController::class, 'getMyEssay']);
//get essay for teacher to mark
Route::get('/ungrade-essay/{type_id}', [EssayController::class, 'getEssayToMark']);

//image
Route::post('/image', [ImageController::class, 'store']);

//test
Route::get('/test-by-topic/{id}', [TestController::class, 'getTestByTopic']);
Route::resource('/test', TestController::class);

//bank
Route::get('/bank-card', [BankController::class, 'getAll']);
Route::get('/bank-card-by-user-id/{id}', [BankController::class, 'getBankByUserId']);
Route::post('/add-cart',[BankController::class, 'addCart']);

//teacher
Route::resource('/teacher', TeacherController::class);

//criterion
Route::get('/get-criterion-ielt', [CriterionController::class, 'getCriterionForIelt']);
Route::get('/get-criterion-normal', [CriterionController::class, 'getCriterionForNormal']);

//order
Route::get('/get-order', [OrderController::class, 'getOrder']);