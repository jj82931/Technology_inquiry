<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viewstudent', function () {
    return view('viewstudent');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/graph', function () {
    return view('graph');
});

Route::get('/Student Class', function () {
    return view('s_class');
});


Route::get('/save_user', [HomeController::class, 'save_user']);

Route::POST('/stu_add', [HomeController::class, 'stu_add']);

Route::get('/data_view', [HomeController::class, 'data_view']);

Route::POST('/edit_data_stu', [HomeController::class, 'edit_data_stu']);

Route::get('/delt_data', [HomeController::class, 'delt_data']);

Route::get('/stu_counting', [HomeController::class, 'stu_counting']);




Route::get('/graph_tech', [HomeController::class, 'graph_tech']);
Route::get('/line_graph', [HomeController::class, 'line_graph']);




// Studentdetails
