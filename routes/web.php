<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [CourseController::class, 'viewAll'])->name('view.home');
Route::get('/showD/{id}', [CourseController::class, 'showDetails'])->name('show.details');

Route::get('/writers', function() {
    return view('writers');
})->name('view.writers');

Route::get('/about', function() {
    return view('about');
})->name('view.about');

Route::get('/category/ds', [CourseController::class, 'viewDS'])->name('view.cate.ds');
Route::get('/category/ds/{id}', [CourseController::class, 'showDS'])->name('show.cate.ds');

Route::get('/category/ns', [CourseController::class, 'viewNS'])->name('view.cate.ns');
Route::get('/category/ns/{id}', [CourseController::class, 'showNS'])->name('show.cate.ns');

Route::get('/populars/popular', [CourseController::class, 'viewP'])->name('view.popular.course');
Route::get('/populars/popular/{id}', [CourseController::class, 'showP'])->name('show.popular.course');