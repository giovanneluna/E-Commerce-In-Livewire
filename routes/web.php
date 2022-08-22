<?php

use App\Http\Livewire\ComputersCreateComponent;
use App\Http\Livewire\ComputersEditComponent;
use App\Http\Livewire\ComputersIndexComponent;
use App\Http\Livewire\GamesCreateComponent;
use App\Http\Livewire\GamesEditComponent;
use App\Http\Livewire\GamesIndexComponent;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class);

Route::get('/register', \App\Http\Livewire\Auth\Register::class);
Route::get('/games/criar', GamesCreateComponent::class);
Route::get('games/edit/{id}', GamesEditComponent::class);
Route::get('games', GamesIndexComponent::class);
Route::get('/computador', ComputersIndexComponent::class);
Route::get('/computador/criar', ComputersCreateComponent::class);
Route::get('/computador/edit/{id}', ComputersEditComponent::class);