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
            'computer.price' => 'required',
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