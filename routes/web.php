<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    EstagioController,
};

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::prefix('/estagiario')->name('estagiario.')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('show');

    Route::prefix('/dadosPessoais')->name('dadosPessoais.')->group(function(){
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store/{id}', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
    });

    Route::prefix('/dadosEstagio')->name('dadosEstagio.')->group(function(){
        Route::get('/create', [EstagioController::class, 'create'])->name('create');
        Route::post('/store/{id}', [EstagioController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [EstagioController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [EstagioController::class, 'update'])->name('update');
    });
});



