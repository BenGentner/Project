
<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\PageController;
use App\Models\nav;
use GuzzleHttp\Middleware;
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
    return view('master');
});

Auth::routes();

Route::get("/nav", [NavController::class, 'show'])->name("nav");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/poll', [\App\Http\Controllers\PollController::class, 'show']);
Route::get('/main/poll/{poll:url}', [\App\Http\Controllers\PollController::class, 'index']);

Route::get('/main/{page:url}', [PageController::class, 'show'])->name('page');

//route
// get url
// lädt die entsprechende seite

