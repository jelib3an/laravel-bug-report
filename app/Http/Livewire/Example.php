<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    use ExampleTrait;

    public $property;

    public function updated()
    {
        ray($this->property)->green();
    }

    public function render()
    {
        return view('livewire.example');
    }
}
