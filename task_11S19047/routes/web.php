<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LabCategoryController;
use App\Http\Controllers\ReportCommentController;
use App\Http\Controllers\ForumCommentController;


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
    Route::get('/mark/{id}', [ForumCommentController::class, 'markcomment']);
});

Route::resource('forum', ForumController::class)->only(['index', 'show']);

// Route::middleware(['isVerify'])->group(function () {
//     Route::resource('forum', ForumController::class);
// });


Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload')->middleware('auth');

// nested resource
Route::resource('forum.comments', CommentController::class)->shallow()->middleware('auth');

//Lab Coding
Route::get('/dashboard', [FrontendController::class, 'index']);

Route::get('categories', [CategoryController::class, 'index']);
Route::get('add-categories', [CategoryController::class, 'add']);
Route::post('insert-category', [CategoryController::class, 'insert']);
Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);


Route::get('soal', [SoalController::class, 'index']);
Route::get('add-soal', [SoalController::class, 'add']);
Route::post('insert-soal', [SoalController::class, 'insert']);
Route::get('edit-soal/{id}', [SoalController::class, 'edit']);
Route::put('update-soal/{id}', [SoalController::class, 'update']);
Route::get('delete-soal/{id}', [SoalController::class, 'destroy']);

Route::get('/lab', [LabController::class, 'index']);
Route::get('category', [LabCategoryController::class, 'index']);
Route::get('view-language/{language}', [LabCategoryController::class, 'daftarsoal']);
Route::get('view-exercise/{id}', [LabCategoryController::class, 'lab']);


Route::get('/admin/listpelanggaran', [AdminController::class, 'listpelanggaran']);
