<?php

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('home', [
        'books' => Book::inRandomOrder()->take(8)->get(),
        'route' => 'Home'
    ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [BookController::class, 'product'])->name('product');
Route::get('/product/{products}', [App\Http\Controllers\BookController::class, 'single'])->name('single-product');

Route::get('/livesearch', [App\Http\Controllers\BookController::class, 'livesearch'])->name('livesearch');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/books', function (Book $books) {
    return view('dashboard.book', [
        'books' => $books->all()
    ]);
})->name('dashboard-book')->middleware('auth');

Route::resource('/dashboard/book', BookController::class)->middleware('auth');