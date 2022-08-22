<?php

namespace App\Http\Livewire;

use App\Models\Computer;
use Livewire\Component;

class ComputersIndexComponent extends Component
{

    public $computers;

    public function mount()
    {
        $this->computers = Computer::all();
    }

    public function render()
    {
        return view('livewire.computerindex')->extends('layouts.app');
    }

    public function delete(Computer $computer)
    {
        $computer->delete();
    }
}