<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Balita extends Component
{
    public function index()
    {
        return view('livewire.balita')
                ->layout('layouts.cobaadminapp');
    }
}
