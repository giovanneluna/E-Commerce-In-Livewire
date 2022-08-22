<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComputerCreateComponent extends Component
{
    public function render()
    {
        return view('livewire.computercreate')->extends('layouts.app');
    }
}