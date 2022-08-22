<?php

namespace App\Http\Livewire;

use App\Models\Computer;
use Livewire\Component;

class ComputersCreateComponent extends Component
{

    public Computer $computer;


    public $name = '';
    public $videocard = '';
    public $processor = '';
    public $memory = '';
    public $storage = '';
    public $price = '';



    public function mount()
    {
        $this->computer = new Computer();
    }

    public function register()
    {
        $data = $this->validate([
            'name' => 'required',
            'processor' => 'required',
            'videocard' => 'required',
            'memory' => 'required',
            'storage' => 'required',
            'price' => 'required',
        ]);

        $computer = Computer::create([
            'name' => $data['name'],
            'processor' => $data['processor'],
            'videocard' => $data['videocard'],
            'memory' => $data['memory'],
            'storage' => $data['storage'],
            'price' => $data['price'],
        ]);

        return redirect('/computador');
    }


    public function render()
    {
        return view('livewire.computercreate')->extends('layouts.app');
    }
}
