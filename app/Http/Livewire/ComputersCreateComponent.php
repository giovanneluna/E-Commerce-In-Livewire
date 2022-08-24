<?php

namespace App\Http\Livewire;

use App\Models\Computer;
use Livewire\Component;

class ComputersCreateComponent extends Component
{
    public Computer $computer;

    protected function rules()
    {
        return [
            'computer.name' => 'required',
            'computer.videocard' => 'required',
            'computer.processor' => 'required',
            'computer.memory' => 'required',
            'computer.price' => 'required',
            'computer.storage' => 'required',
        ];
    }

    protected function validationAttributes()

    {
        return [
            'computer.name' => 'Nome do Computador',
            'computer.videocard' => 'Placa de Video',
            'computer.processor' => 'Processador',
            'computer.memory' => 'Memoria',
            'computer.storage' => 'Armazenamento',
            'computer.price' => 'Preço',
        ];
    }

    protected $messages = [
        'game.name' => 'Insira o Nome do Jogo.',
        'game.videocard' => 'Insira o Modelo da Placa de Video.',
        'game.processor' => 'Insira o Nome do Processor.',
        'game.memory' => 'Insira o Modelo da Memoria Ram.',
        'game.storage' => 'Insira o Tipo e Modelo de Armazenamento.',
        'game.price' => 'Insira o Preço Total do Produto.',

    ];


    public function mount()
    {
        $this->computer = new Computer();
    }


    public function register()
    {
        $this->validate();
        $this->computer->save();
        session()->flash('message', 'Post successfully updated.');
        return redirect()->to('/computador');
    }


    public function render()
    {
        return view('livewire.computercreate')->extends('layouts.app');
    }
}