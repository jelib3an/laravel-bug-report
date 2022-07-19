<?php

namespace App\Http\Livewire;

use App\Models\Foo;
use Livewire\Component;

class Example extends Component
{
    public $foo;

    public function mount($persist = false)
    {
        $this->foo = new Foo(['name' => 'foo']);
        if ($persist) {
            $this->foo->save();
        }
    }

    public function render()
    {
        return view('livewire.example');
    }
}
