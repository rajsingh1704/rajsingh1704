<?php

namespace App\Http\Livewire\Admin\College;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\courses;
use App\Models\college_cities;
use App\Models\college_details;
use App\Models\college_course_fee_structure;
use App\Models\college_gallery;
class NewCollege extends Component
{
    use WithFileUploads;

    public $college_name, $established, $approved_by, $city, $pincode, $address, $college_about;
    public $updateMode = false;
    public $course, $duration, $fee;
    public $logo, $profile_image;
    public $gallery = [];
    public $inputs = [0];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);

        $this->dispatchBrowserEvent('summernoteData');
    }

    public function remove($i)
    {
        // dd($i);
        unset($this->inputs[$i]);
        // unset($this->course[$i]);
        $this->dispatchBrowserEvent('summernoteData');

        // $this->collegeInsert();
    }

    // private function resetInputFields(){
    //     $this->account = '';
    //     $this->username = '';
    // }

    public function collegeInsert()
    {
        // dd($req);
        $gelleryData=[];
        $this->logo=$this->logo->store('images','public');

        $this->profile_image=$this->profile_image->store('images','public');
        $dArr=['type'=>'profile', 'image'=>$this->profile_image];
            array_push($gelleryData, $dArr);

        // foreach ($this->profile_image as $key => $image) {
        //     $this->profile_image[$key] = $image->store('images','public');
        //     $dArr=['type'=>'profile', 'image'=>$this->profile_image[$key]];
        //     array_push($gelleryData, $dArr);
        // }

        foreach ($this->gallery as $key => $image) {
            $this->gallery[$key] = $image->store('images','public');

            $dArr=['type'=>'gallery', 'image'=>$this->gallery[$key]];
            array_push($gelleryData, $dArr);
        }

        $details = new college_details;
        $details->college_name = $this->college_name;
        $details->address = $this->address;
        $details->city = $this->city;
        $details->pincode = $this->pincode;
        $details->established = $this->established;
        $details->approved_by = $this->approved_by;
        $details->about = $this->college_about;
        $details->logo = $this->logo;
        $details->save();

        $lastInsertedId= $details->id;
        // dd($lastInsertedId);

        // dd(count($this->course));
        foreach ($this->inputs as $key => $value) {
            // college_course_fee_structures::create(['account' => $this->account[$key], 'username' => $this->username[$key]]);
            // dd($value);
            $courseDetails = new college_course_fee_structure;
            $courseDetails->college_id=$lastInsertedId;
            $courseDetails->course=$this->course[$value];
            $courseDetails->duration=$this->duration[$value];
            $courseDetails->total_fees=$this->fee[$value];
            $courseDetails->save();
            
        }

        foreach ($gelleryData as $key => $gal) {
            $galleryDetails = new college_gallery;
            $galleryDetails->college_id=$lastInsertedId;
            $galleryDetails->type=$gal['type'];
            $galleryDetails->image=$gal['image'];
            $galleryDetails->save();

        }

        $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Successfully Inserted']);

        return redirect()->to('/admin/newCollege');
  
        // $this->inputs = [1];
   
        // $this->resetInputFields();
   
        // session()->flash('message', 'Account Added Successfully.');
    }

    public function render()
    {

        $courseList = courses::where('status', 0)
        ->get();
        $cityList = college_cities::where('status', 0)
        ->get();
        // return view('livewire.admin.college.new-college');
        return view('livewire.admin.college.new-college',['courseList'=>$courseList, 'cityList'=>$cityList])
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
    }
}
