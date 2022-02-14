<?php

namespace Tests\Feature;

use App\Http\Livewire\Example;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        Livewire::test(Example::class)
            ->set('property', 'value1')
            ->assertSet('property', 'value1')
            ->set('property', 'value2')
            ->assertSet('property', 'value2');
    }
}
