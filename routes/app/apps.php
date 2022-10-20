<?php
use Illuminate\Support\Facades\Route;

/*
    *---------------------------------------------------------------------*
    *                                                                     *
    *                            Blog Controller                          *
    *                                                                     *
    *---------------------------------------------------------------------*
*/

Route::get('/blog', function () { return view('pages.blog.index'); })->name('blog');
Route::get('/blog/post', function () { return view('pages.blog.show'); })->name('blog.post');


/*
    *---------------------------------------------------------------------*
    *                                                                     *
    *                          Tasks Controller                           *
    *                                                                     *
    *---------------------------------------------------------------------*
*/

use App\Http\Controllers\Activity\ActivityController;
Route::middleware('auth')->controller(ActivityController::class)->group(function () {
    Route::get('/app/task', 'index')->name('app.activity');
    Route::get('/app/task/show/{id}', 'show');//get data for edit

    Route::post('/app/task/create', 'store')->name('app.task.store');
    Route::patch('/app/task/update/{id}', 'update');
    Route::post('/app/task/edit/{id}', 'edit');//get data for edit
    Route::delete('/app/task/destroy/{id}', 'destroy');
});

Route::get('/app/task/pdf', function () {
    return view('pages.task.PDF.index');
})->name('app.task.pdf');

/*
    *---------------------------------------------------------------------*
    *                                                                     *
    *                          Finance Controller                         *
    *                                                                     *
    *---------------------------------------------------------------------*
*/

Route::get('app/finance', function () {
    return view('pages.finance.index');
})->name('app.finance')->middleware('auth');

/*
    *---------------------------------------------------------------------*
    *                                                                     *
    *                          Projects Controller                         *
    *                                                                     *
    *---------------------------------------------------------------------*
*/

Route::get('/app/projects', function () {
    return view('pages.project.index');
})->name('app.project.index');
