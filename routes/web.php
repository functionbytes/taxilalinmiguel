<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\PagesController;


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Application cache cleared';
});

Route::get('/auth-checker', function () {
    if (auth::check()) {
        return true;
    } else {
        return false;
    }
})->name('auth-checker');



Route::group(['middleware' => ['web']], function () {

    Route::get('/', [PagesController::class, 'index'])->name('index');

    Route::get('/conductor', [PagesController::class, 'drivers'])->name('drivers');
    Route::get('/servicios', [PagesController::class, 'services'])->name('services');
    Route::get('/preguntas', [PagesController::class, 'faqs'])->name('faqs');
    Route::get('/informacion', [PagesController::class, 'about'])->name('about');
    Route::get('/contacto', [PagesController::class, 'contact'])->name('contact');

    Route::get('/clear', function () {
        Artisan::call('dump-autoload');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        return '<h1>Cache Borrado</h1>';
    });


});
