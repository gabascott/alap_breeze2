<?php

use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;
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
    return view('pages/kezdolap');
});
Route::get('/uj_ingatlan', function () {
    return view('pages/ujingatlan');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/api/ingatlanok', [IngatlanokController::class, 'osszesIngatlan']);
Route::get('/api/ingatlan_kategoriaval', [IngatlanokController::class, 'ingatlanKategoriaval']);
Route::get('/api/ingatlan_keres/{id}', [IngatlanokController::class, 'keresIngatlan']);
Route::post('/api/uj_ingatlan', [IngatlanokController::class, 'ujIngatlan']);
Route::delete('/api/ingatlan_torol/{id}', [IngatlanokController::class, 'torolIngatlan']);

Route::get('/api/kategoriak', [KategoriakController::class, 'osszesKategoria']);
Route::get('/api/kategoria_keres/{id}', [KategoriakController::class, 'keresKategoria']);
Route::delete('/api/kategoria_torol/{id}', [KategoriakController::class, 'torolKategoria']);

require __DIR__.'/auth.php';