<?php

namespace App\Http\Livewire\Admin\College;

use Livewire\Component;
use App\Models\college_details;
use App\Models\college_gallery;




class CollegeProfile extends Component
{

    


    // public function mount($collegeDataId){
    //     $this->collegeDataId=$collegeDataId;
    // }

    

    public function render()
    {
        $id = request('id');
        // $this->idd=$id;
    
        $collegeData = college_details::query()->where('id', $id)
        ->first();
        $collegeGal = college_gallery::query()
        ->where('college_id', $id)
        ->where('type', 'profile')
        ->where('status', 0)
        ->where('isDeleted', 0)
        ->get();
        // $this->collegeDataId=$this->idd;
        // dd($courseList);

        
        // return view('livewire.admin.college.college-profile');
        return view('livewire.admin.college.college-profile',['collegeData'=>$collegeData, 'courseGal'=>$collegeGal])
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');  
    }
}
