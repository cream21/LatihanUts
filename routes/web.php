<?php
use App\Http\Controllers\perpusController;
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
    return view('welcome');
});
Route::view('template', 'template/master-perpus');

Route::get('data-perpus',[perpusController::class, 'index']);
Route::get('add-perpus',[perpusController::class, 'create']);
Route::post('save-perpus',[perpusController::class, 'ambilData'])->name('perpus.save-perpus');
Route::delete('delete-perpus/{id}',[perpusController::class, 'destroy'])->name('delete.perpus');
//edit data
Route::get('edit-perpus/{id}/edit', [perpusController::class, 'edit'])->name('edit.perpus');
//proses update
Route::put('edit-perpus/{id}', [perpusController::class, 'update'])->name('update.perpus');
