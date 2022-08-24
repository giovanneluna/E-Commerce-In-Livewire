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
            'game.price' => 'required|numeric',
            'game.inStock' => 'required|numeric',
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

    protected $messages = [
        'game.name.required' => 'O nome do jogo não foi preenchido',
        'game.platform.required' => 'É necessario informar o tipo de Plataforma',
        'game.typeDisk.required' => 'É necessario informar o tipo de midia',
        'game.launched.required' => 'É necessario informar a Data de Lançamento',
        'game.price.required' => 'É necessario informar o Preço do jogo',
        'game.inStock.required' => 'É necessario informar a quantidade em estoque ',

    ];

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