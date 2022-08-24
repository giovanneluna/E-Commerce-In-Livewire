<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SkymancerComponent extends Component
{
    public function render()
    {
        return view('livewire.skymancer')->extends('layouts.app');
    }
}