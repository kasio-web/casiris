<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('post/create', [PostController::class, 'create']);
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');// 記事作成へのルート設定



Route::post('post', [PostController::class, 'store'])->name('post.store');
require __DIR__ . '/auth.php';
// QUADここから
Route::get('post/show/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit'); //編集ページ用
Route::patch('post/{post}', [PostController::class, 'update'])->name('post.update'); //更新用
Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy'); //更新用

//ページ表示ここから
//ログインなど
//Route::get('/', function () { return view('welcome'); });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//固定ページ
Route::get('/test',[TestController::class, 'test'])->name('top');
Route::get('/',[TestController::class, 'top']);
// Route::get('/concept', function () { return view('concept.index'); })->name('concept');
Route::get('/system-menu',[TestController::class, 'concept'])->name('system-menu');
Route::get('/news',[TestController::class, 'menu'])->name('news');
Route::get('/access',[TestController::class, 'access'])->name('access');
Route::get('/concept',[TestController::class, 'concept'])->name('concept');
//投稿一覧
Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store'])->name('post.store');
// Route::get('post/create',[PostController::class, 'create'])->name('post.index');
// Route::get('/test',[TestController::class, 'test']);