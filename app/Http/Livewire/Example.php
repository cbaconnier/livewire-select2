<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $ready = false;

    public $choice1 = 0;
    public $choice2 = 0;
    public $choice3 = 0;
    public $options = ['Hello', 'world'];

    public function render()
    {
        return view('livewire.example');
    }
}
