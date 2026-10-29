<?php

use App\Livewire\Auth\Login;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoIndex;
use App\Livewire\UsuarioCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', ProdutoIndex::class)->name('produtos.index');
Route::get('/produtos/create', ProdutoCreate::class)->name('produtos.create');

Route::get('/login', Login::class)->name('login');

Route::get('/usuario/create', UsuarioCreate::class)->name('usuario.create');

