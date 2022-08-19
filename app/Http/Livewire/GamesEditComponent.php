<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class GamesEditComponent extends Component

{
    public Game $game;

    protected function rules()
    {
        return [
            'game.name' => 'required',
            'game.platform' => 'required',
            'game.typeDisk' => 'required',
            'game.launched' => 'required',
            'game.price' => 'required',
            'game.inStock' => 'required',
            'game.description' => 'nullable'
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


    public function update()
    {
        $this->validate();
        $this->game->save();
        return redirect('/');
    }

    public function render()
    {

        return view('livewire.gamesedit')->extends('layouts.app');
    }
}