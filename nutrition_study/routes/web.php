<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChoiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PortfolioController;
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


//guestユーザー用
//ポートフォリオサイト
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
//確認ページ
Route::post('/portfolio/confirm', [PortfolioController::class,'confirm'])->name('portfolio.confirm');
//送信完了ページ
Route::post('/portfolio', [PortfolioController::class,'store'])->name('portfolio.store');

//クイズタイム
Route::get("quiztime/show_answer/{quiz}", [GuestController::class, "show_answer"])->name("guest.show_answer");
Route::get('quiztime', [GuestController::class, 'index'])->name('guest.index');
Route::get('quiztime/show/{quiz}/{correct_flag}', [GuestController::class, 'show'])->name('guest.show');


// ↓ログインユーザー用root
Route::middleware('auth')->group(function () {
  Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//クイズタイム
Route::middleware('auth')->group(function () {
  Route::resource('quiztime/quiz', QuizController::class);
});
require __DIR__ . '/auth.php';
  // ↑ログインユーザー用root
  // ↑これを書いたのと同じ↓
  // Route::get('post', [PostController::class, 'index'])->name('post.index');
  // Route::get('post/create', [PostController::class, 'create'])->name('post.create');
  // Route::post('post', [PostController::class, 'store'])->name('post.store');
  // Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');
  // Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
  // Route::patch('post/{post}', [PostController::class, 'update'])->name('post.update');
  // Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
  // ↑これを書いたのと同じ↑