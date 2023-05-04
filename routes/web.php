<?php

use App\Http\Controllers\EpsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QueryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('clear_cache', function () {
        Artisan::call('config:cache');
        return 'DONE!';
    });

    Route::get('/', [FrontController::class, 'index'])->name('front');
    Route::post('/create-query', [FrontController::class, 'createQuery'])->name('create-query');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('eps', EpsController::class);
    Route::resource('queries', QueryController::class)->except(['create', 'store']);
    Route::post('query-search', [QueryController::class, 'search'])->name('query-search');
    Route::post('exports', [QueryController::class, 'export'])->name('export-query');
});

require __DIR__.'/auth.php';
