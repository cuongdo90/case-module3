<?php

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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/login', [LoginController::class, 'showFormLogin'])->name('login');
=======
Route::get('/', function () {
    return view('backend.admin.dashboard');
});
>>>>>>> 8ce61751d6769a4a30b6606778120f21c49ba000
