<?php

namespace App\Http\Livewire;

trait ExampleTrait
{
    public function updatedExampleTrait()
    {
        ray($this->employee->name)->red();
    }
}
