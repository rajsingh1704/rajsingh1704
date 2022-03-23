<?php

namespace App\Http\Livewire\Admin\College;

use Livewire\Component;

class CollegeListshow extends Component
{
    public function render()
    {
        // return view('livewire.admin.college.college-listshow');

        return view('livewire.admin.college.college-listshow')
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
    }
}
