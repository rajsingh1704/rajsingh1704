<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;

class EmployeeListShow extends Component
{
    public function render()
    {
        // return view('livewire.admin.employee.employee-list-show');
        return view('livewire.admin.employee.employee-list-show',[])
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
    }
}
