<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\ProfileController;

/*
    *---------------------------------------------------------------------*
    *                                                                     *
    *                          Profile Controller                             *
    *                                                                     *
    *---------------------------------------------------------------------*
*/

Route::middleware('auth')->controller(ProfileController::class)->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.deleted');
});

/*
    *---------------------------------------------------------------------*
    *                                                                     *
    *                          Chat Controller                            *
    *                                                                     *
    *---------------------------------------------------------------------*
*/
use App\Http\Controllers\Chat\ChatController;
Route::middleware('auth')->controller(ChatController::class)->group(function (){

    Route::get('/profile/chat', [ChatController::class, 'index'])->name('profile.chat');

});

/*
    *---------------------------------------------------------------------*
    *                                                                     *
    *                         Notify Controller                           *
    *                                                                     *
    *---------------------------------------------------------------------*
*/
use App\Http\Controllers\System\NotifyController;

Route::middleware('auth')->controller(NotifyController::class)->group(function (){
    Route::get('/notify', [NotifyController::class, 'index'])->name('notify');
    Route::post('/notify/update/{id}', [NotifyController::class, 'update']);
    Route::post('/notify/destroy/{id}', [NotifyController::class, 'destroy']);
});
