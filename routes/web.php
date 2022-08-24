<?php

use App\Http\Livewire\ComputersCreateComponent;
use App\Http\Livewire\ComputersEditComponent;
use App\Http\Livewire\ComputersIndexComponent;
use App\Http\Livewire\GamesCreateComponent;
use App\Http\Livewire\GamesEditComponent;
use App\Http\Livewire\GamesIndexComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SkymancerComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class);
Route::get('/games/criar', GamesCreateComponent::class);
Route::get('games/edit/{game}', GamesEditComponent::class);
Route::get('games', GamesIndexComponent::class);
Route::get('/computador', ComputersIndexComponent::class);
Route::get('/computador/criar', ComputersCreateComponent::class);
Route::get('/computador/edit/{computer}', ComputersEditComponent::class);
Route::get('/computador/produto/skymancer', SkymancerComponent::class);