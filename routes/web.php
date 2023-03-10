<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('event-test', function () {
    event(new App\Events\GlobalEvent('From Routing'));
    return "Event has been sent!";
});

Route::group([
    // 'prefix' => 'v1',
    'as' => 'admin.',
    // 'namespace' => 'App\V1\Admin',
    'middleware' => 'auth',
], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('dashboard');
    Route::post('/mark-as-read', [HomeController::class, 'markNotification'])->name('markNotification');
});

Route::get('payments/create', [PaymentController::class, 'index'])->middleware('auth')->name('payments.create');
Route::post('payments', [PaymentController::class, 'store'])->middleware('auth')->name('payments');

require __DIR__ . '/auth.php';
