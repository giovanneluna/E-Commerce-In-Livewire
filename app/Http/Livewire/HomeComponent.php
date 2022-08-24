<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function export()
    {
        return response()->download(storage_path('app/public/images/mibr.jpg'));
    }

    public function render()
    {
        return view('livewire.home')->extends('layouts.app');
    }
}