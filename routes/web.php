<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\DashboardFinanceController;



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
//     return view('home', [
//         "title" => "Home",
//         "summary" => "I have the ability to work with HTML, CSS, PHP, UI/UX and Data Analysis by attending various online trainings and courses. Can work well under pressure and make the best out of any situation. Passionate individual with great interpersonal and communication skills. Can work with team and individual",
//     ]);
// });

// Route::get('/table', function () {
//     return view('table', [

//     ]);
// });


// Route::get('/finance',[FinanceController::class, 'index']);

// Route::resource('/finance',[FinanceController::class]);

Route::get('/',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dasboard', function(){
    return View('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/table', DashboardFinanceController::class)
->middleware('auth');


Route::get('/dasboard/pie', [EchartController::class. 'index']);