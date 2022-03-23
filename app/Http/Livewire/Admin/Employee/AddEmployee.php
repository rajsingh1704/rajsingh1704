<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Hash;

class AddEmployee extends Component
{
    use WithFileUploads;
    public $employee_name, $email_id, $mobile_no, $aadhar_no, $profile_image, $address, $password;

    public function employeeInsert(){
        $this->profile_image=$this->profile_image->store('images','public');

        $details = new User;
        $details->name = $this->employee_name;
        $details->email = $this->email_id;
        $details->userType = '2';
        $details->profileImage = $this->profile_image;
        $details->mobileNo = $this->mobile_no;
        $details->address = $this->address;
        $details->aadharNo = $this->aadhar_no;
        $details->password = Hash::make($this->password);
        $details->save();

        if ($details == true) {
        
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Successfully Inserted']);
                return redirect()->to('/admin/addEmployee');
        } else {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'error',  'message' => 'Something is Wrong!']);
        }
    }

    public function render()
    {
        // return view('livewire.admin.employee.add-employee');

        return view('livewire.admin.employee.add-employee',[])
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
    }
}
