<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;




Route::get('/',[HomepageController::class,'index'])->name('index');
Route::get('anasayfa',[HomepageController::class,'category'])->defaults('category_id', 2);
Route::get('/hizmetlerimiz',[HomepageController::class,'hizmetlerimiz'])->name('hizmetlerimiz');
Route::get('/hakkimizda',[HomepageController::class,'hakkimizda'])->name('hakkimizda');
Route::get('/iletisim',[HomepageController::class,'contact'])->name('iletisim');



Route::get('{title}/{id}.html',[HomepageController::class,'post'])->name('post');



require __DIR__.'/auth.php';
require __DIR__.'/solaris.php';
