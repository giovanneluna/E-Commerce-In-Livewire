<?php

namespace App\Http\Livewire;

use App\Models\Computer;
use Livewire\Component;

class ComputersEditComponent extends Component
{

    public Computer $computer;

    protected function rules()
    {
        return [
            'computer.name' => 'required',
            'computer.videocard' => 'required',
            'computer.processor' => 'required',
            'computer.memory' => 'required',
            'computer.storage' => 'required',
            'computer.price' => 'required|numeric',
        ];
    }

    protected function validationAttributes()

    {
        return [
            'computer.name' => 'Nome',
            'computer.videocard' => 'Placa de Video',
            'computer.processor' => 'Processador',
            'computer.memory' => 'Memoria Ram',
            'computer.storage' => 'Armazenamento',
            'computer.price' => 'Preço',
        ];
    }

    protected $messages = [
        'computer.name.required' => 'Insira o Nome do Jogo.',
        'computer.videocard.required' => 'Insira o Modelo da Placa de Video.',
        'computer.processor.required' => 'Insira o Nome do Processor.',
        'computer.memory.required' => 'Insira o Modelo da Memoria Ram.',
        'computer.storage.required' => 'Insira o Tipo e Modelo de Armazenamento.',
        'computer.price.required' => 'Insira o Preço Total do Produto.',
        'computer.price .numeric' => 'Não é possivel inserir letras'
    ];


    public function update()
    {
        $this->validate();
        $this->computer->save();
        return redirect('/computador');
    }

    public function render()
    {
        return view('livewire.computeredit')->extends('layouts.app');
    }
}