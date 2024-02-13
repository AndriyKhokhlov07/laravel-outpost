<?php

use App\Http\Controllers\Web\Layouts\HeaderFooterController;
use App\Http\Controllers\Web\MainController;
use App\Http\Controllers\Web\ColivingController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\HotDealsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('header-footer', [HeaderFooterController::class, 'getHeaderFooterView'])->name('get_header-footer');

Route::get('coliving', [ColivingController::class, 'getColivingView'])->name('get_coliving');

Route::get('blog', [BlogController::class, 'getBlogView'])->name('get_blog');

Route::get('hot-deals', [HotDealsController::class, 'getHotDealsView'])->name('get_hot-deals');

Route::get('main', [MainController::class, 'getMainView'])->name('get_main');
