<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class GamesIndexComponent extends Component
{
    public $games;

    public function mount()
    {
        $this->games = Game::all();
    }

    public function render()
    {
        return view('livewire.gamesindex')->extends('layouts.app');
    }

    public function delete(Game $game)
    {
        $game->delete();
    }
}