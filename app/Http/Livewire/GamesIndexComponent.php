<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class GamesIndexComponent extends Component
{
    public $games;

    public function mount()
    {
        $this->games = $this->getGames();
    }

    private function getGames()
    {
        return Game::all();
    }


    public function delete(Game $game)
    {
        $game->delete();
        $this->games = $this->getGames();
    }


    public function render()
    {
        return view('livewire.gamesindex')->extends('layouts.app');
    }
}