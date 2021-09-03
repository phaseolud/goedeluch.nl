<?php

use App\Http\Controllers\RecipeController;
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

Route::get('/', [RecipeController::class, 'index'])->name('home');
Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');
Route::put('recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');

Route::get('recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit')->middleware('can:admin');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show')->middleware('can:approved,recipe');
Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy')->middleware('can:admin');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('can:admin');

require __DIR__.'/auth.php';
