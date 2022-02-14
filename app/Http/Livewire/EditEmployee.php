<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class EditEmployee extends Component
{
    use ExampleTrait;

    public Employee $employee;

    public function rules()
    {
        return [
            'employee.name' => 'required',
        ];
    }

    public function mount()
    {
        $this->employee = new Employee();
    }

    public function updated()
    {
        ray($this->employee->name)->green();
    }

    public function render()
    {
        return view('livewire.employee');
    }
}
