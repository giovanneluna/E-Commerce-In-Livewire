<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class GamesCreateComponent extends Component
{

    public Game $game;

    public function mount()
    {
        $this->game = new Game();
    }

    protected function rules()
    {
        return [
            'game.name' => 'required',
            'game.platform' => 'required',
            'game.typeDisk' => 'required',
            'game.launched' => 'required',
            'game.price' => 'required',
            'game.inStock' => 'required',
            'game.description' => 'nullable',
        ];
    }

    protected function validationAttributes()

    {
        return [
            'game.name' => 'Nome',
            'game.platform' => 'Plataforma',
            'game.typeDisk' => 'Tipo de Midia',
            'game.launched' => 'Data de Lançamento',
            'game.price' => 'Preço',
            'game.inStock' => 'Quantidade em Estoque',
            'game.description' => 'Descrição'
        ];
    }


    public function register()
    {
        $this->validate();
        $this->game->save();
        return redirect('/games');
    }

    public function render()
    {
        return view('livewire.gamescreate')->extends('layouts.app');
    }
}