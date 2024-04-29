<?php

namespace App\Livewire;

use App\Models\Department;
use App\Models\Student;
use Livewire\Attributes\Rule;
use Livewire\Component;

class RegistrationComponent extends Component
{
    #[Rule('required', message: 'Yoo write both names')]
    #[Rule('min:5', message: 'Yoo those names are short!')]
    public $name = '';

    #[Rule('email', message: 'Yoo write proper email')]
    public $email = '';

    #[Rule('required', message: 'Yoo write mobile number')]
    #[Rule('regex:/^(\\+250|0)[0-9]{8,9}$/', message: 'Yoo provide correct phone number!')]
    public $phone = '';

    #[Rule('required', message: 'Yoo write where you live.')]
    public $address = '';

    #[Rule('required', message: 'Yoo select your gender.')]
    public $gender = '';

    #[Rule('required', message: 'Yoo choose the department you want to study in.')]
    public $department_id = '';

    public $showSuccessIndicator = false;

    public function save()
    {
        $this->validate();
        Student::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'gender' => $this->gender,
            'department_id' => $this->department_id,
        ]);

        $this->reset();
        $this->showSuccessIndicator = true;
    }

    public function render()
    {
        $departments = Department::all();

        return view('livewire.registration-component', compact('departments'));
    }
}
