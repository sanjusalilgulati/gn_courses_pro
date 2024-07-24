<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('certificates', CertificateController::class)->middleware('admin');
    // Route::delete('messages/destroy/{id}', [MessageController::class, 'destroy'])->name('messageDestroy')->middleware('admin');

    // Route::get('messages/total-by-user', 'MessageController@totalMessageByUser');

    // Route::get('messages/user-with-max', 'MessageController@userWithMaxMessages');

    // Route::get('messages/average-length', 'MessageController@averageMessageLength');

    // Route::resource('messages', MessageController::class);

    // Route::post('/messages/send-message', [MessageController::class, 'sendMessage'])->name('send-message');

});


Route::post('/broadcasting/auth', function (){
    return Broadcast::auth(request());
});

require __DIR__.'/auth.php';
