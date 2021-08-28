<?php

use Illuminate\Support\Facades\Route;
use Rifat\SimpleFaq\Http\Controllers\Admin\FaqController;
use Rifat\SimpleFaq\Http\Controllers\View\ViewController;

Route::group([
    'prefix' => 'faq',
    'middleware' => 'web',
], function () {
    Route::get('/', [ViewController::class, 'index']);
    Route::get('/home', [FaqController::class, 'index']);
    Route::get('/home/manage', [FaqController::class, 'manage']);
});


Route::post('/add_faq', [FaqController::class, 'faq_add']);
Route::post('/update_faq', [FaqController::class, 'faq_update']);
Route::get('/edit_faq/{id}', [FaqController::class, 'faq_edit']);
Route::get('/delete_faq/{id}', [FaqController::class, 'faq_delete']);

Route::get('/unpublished_faq/{id}', [FaqController::class, 'unpublished_faq']);

Route::get('/published_faq/{id}', [FaqController::class, 'published_faq']);