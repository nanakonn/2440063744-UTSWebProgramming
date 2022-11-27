<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/Home', [BooksController::class, 'index']);

Route::get('/Detail/{id}', [BooksController::class, 'details']);

Route::get('/Publisher', [PublishersController::class, 'index']);

Route::get('/Categories/{id}', [CategoriesController::class, 'categories']);

Route::get('/Contact', function () {
    return view('Contact');
});
