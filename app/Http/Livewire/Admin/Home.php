<?php

namespace App\Http\Livewire\Admin;

use App\Models\college_details;
use App\Models\college_cities;
use App\Models\courses;
use App\Models\User;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $college = college_details::where('isDeleted', 0)
        ->count();
        $coursess = courses::where('isDeleted', 0)
        ->count();
        $city = college_cities::where('isDeleted', 0)
        ->count();

        $user = User::where('isDeleted', 0)->where('userType', '!=', '1')
        ->count();

        return view('livewire.admin.home',['college'=>$college, 'coursess' =>$coursess, 'city'=>$city, 'user'=>$user])
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
    }
}
