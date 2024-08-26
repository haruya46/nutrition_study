<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChoiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
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
Route::controller(ContactController::class)->group(function(){
  Route::get('portfolio.index', 'create')->name('portfolio.create');
  Route::post('contact/store', 'store')->name('contact.store');
});

//クイズタイム
Route::get("quiz/show_answer/{quiz}", [GuestController::class, "show_answer"])->name("guest.show_answer");
Route::get('quiz', [GuestController::class, 'index'])->name('guest.index');
Route::get('quiz/show/{quiz}/{correct_flag}', [GuestController::class, 'show'])->name('guest.show');


// ↓ログインユーザー用root
Route::middleware('auth')->group(function () {
  Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//クイズタイム
Route::middleware('auth')->group(function () {
  Route::resource('admin/quiz', QuizController::class);
  //管理者用画面
  Route::get('admin/create', [PortfolioController::class, 'create'])->name('portfolio.create');
  Route::post('admin', [PortfolioController::class, 'portfoliostore'])->name('portfolio.portfoliostore');
  Route::get('admin', [PortfolioController::class, 'admin'])->name('portfolio.admin');
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