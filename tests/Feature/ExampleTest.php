<?php

namespace Tests\Feature;

use App\Http\Livewire\Example;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function livewire_validates_entire_array_if_element_changes()
    {
        Livewire::test(Example::class)
            ->set('levels.0.id', 'not-numeric')
            ->call('checkForErrors', 'levels.0')
            ->assertSet('message', 'invalid');
    }
}
