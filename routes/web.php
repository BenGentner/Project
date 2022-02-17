
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
    return view('default_page');
});

Auth::routes();

Route::get("/nav", [NavController::class, 'index'])->name("nav");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/main/{page:url}', [PageController::class, 'show'])->name('page');

//route
// get url
// lädt die entsprechende seite

