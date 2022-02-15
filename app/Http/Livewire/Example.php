<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Example extends Component
{
    public $levels = [
        ['id' => 1, 'name' => 'basement'],
    ];

    public $message;

    protected function rules()
    {
        return [
            'levels.*' => function ($attribute, $value, $fail) {
                if (!is_numeric($value['id'])) {
                    $fail('invalid');
                }
            },
        ];
    }

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function checkForErrors($name)
    {
        //dd($this->getErrorBag()->all());
        $errors = $this->getErrorBag();
        if ($errors->has($name)) {
            $this->message = collect($errors->get($name))->first();
        }
    }

    public function checkForErrorsUsingLaravel($name)
    {
        $validator = Validator::make(['levels' => $this->levels], $this->rules());
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has($name)) {
                $this->message = collect($errors->get($name))->first();
            }
        }
    }

    public function render()
    {
        return view('livewire.example');
    }
}
