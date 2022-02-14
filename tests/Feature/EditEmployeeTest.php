<?php

namespace Tests\Feature;

use App\Http\Livewire\EditEmployee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditEmployeeTest extends TestCase
{
    /** @test */
    public function can_set_name()
    {
        Livewire::test(EditEmployee::class)
            ->set('employee.name', 'John')
            ->assertSet('employee.name', 'John');
    }
}
