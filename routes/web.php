<?php

use App\Models\Pelanggan;
use App\Models\Tarif;
use App\Http\Controllers\AuthController;
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
//     return view('index');
// });

Route::get('/', function () {
    return view('index', [
        'tarifs' => Tarif::all(),
        'pelanggans' => Pelanggan::all()
    ]);
})->middleware(['auth']);

Route::get('/dashboard', function () {

    return view('dashboard', [
        'tarifs' => Tarif::all(),
        'pelanggans' => Pelanggan::all()
    ]);
})->middleware(['auth']);

Route::get('/login', function () {  return 'Halaman Login'; })->name('login');

Route::get('/user/{nama}', function ($name) {
    return view('user', ['name' => $name]);
});

Route::get('/register', function () { 
    return view('register'); 
})->name('register');

Route::POST('/action-register', 
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [AuthController::class, 'loginView'])->name("login");

Route::POST('/action-login', 
    [AuthController::class, 'actionLogin']
);

Route::get('/logout', [AuthController::class, 'logout']);