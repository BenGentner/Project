
<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PollAnswersController;
use App\Models\nav;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/main/startseite');
//    return view('master')->;
});

Auth::routes();

Route::get("/nav", [NavController::class, 'show'])->name("nav");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/poll', [\App\Http\Controllers\PollController::class, 'show']);
Route::get('/main/answer_poll/{poll:url}', [\App\Http\Controllers\PollAnswersController::class, 'index']);
Route::get('/main/answers_poll/{poll:url}', [\App\Http\Controllers\PollController::class, 'index']);

Route::post('/poll/{poll:url}/answer', [PollAnswersController::class, 'store']);

Route::get('/main/{page:url}', [PageController::class, 'show'])->name('page');


// larvel erkennt das die Show methode im PageController ein object page erwartet
// {page:url} ist ein Platzhalter für das Attribut URL einer Page
// => laravel prüft ob für die url eine page existiert und gibt dies dann an den Controller weiter


