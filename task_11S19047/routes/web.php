<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportCommentController;
use App\Http\Controllers\UsersController;
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


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users', 'UserController@index');
/*Route::get('users/profile/{id}', [UsersController::class, 'showprofile']);*/

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('@{username}', [UsersController::class, 'showprofile']);
    Route::put('/user/{username}', [UsersController::class, 'update']);
    Route::resource('forum', ForumController::class);
    Route::get('/comment/{id}/report', [ReportCommentController::class, 'reportComment']);
});

// Route::middleware(['isVerify'])->group(function () {
//     Route::resource('forum', ForumController::class);
// });


Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload')->middleware('auth');

// nested resource
Route::resource('forum.comments', CommentController::class)->shallow()->middleware('auth');
