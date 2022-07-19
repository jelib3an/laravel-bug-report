<?php

namespace Tests\Feature;

use App\Http\Livewire\Example;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function persisted_model_is_still_set_on_subsequent_requests()
    {
        Livewire::test(Example::class, ['persist' => true])
            ->assertSet('foo.name', 'foo')
            ->call('render')
            ->assertSet('foo.name', 'foo');
    }

    /** @test */
    public function unpersisted_model_is_still_set_on_subsequent_requests()
    {
        Livewire::test(Example::class)
            ->assertSet('foo.name', 'foo')
            ->call('render')
            ->assertSet('foo.name', 'foo');
    }
}
