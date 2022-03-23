<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\system_settings;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Auth;

class ProfileSelf extends Component
{
    public $email, $old_password, $new_password, $confirm_password;

    public function render()
    {
        $id =  Auth::guard('web')->user()->id;
        // dd($id);
        $userData = User::
        where('status', 0)
        ->where('isDeleted', 0)
        ->where('id', $id)
        ->first();
        $setting = system_settings::find(1);


        // return view('livewire.admin.profile-self');
        return view('livewire.admin.profile-self',['profile' => $userData, 'setting' => $setting])
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
    }

    public function updatePassword(){
        $userData = User::
        where('email',  Auth::guard('web')->user()->email)
        ->where('isDeleted', 0)
        ->first();

        if(Hash::check($this->old_password, $userData->password)) {

            if($this->new_password == $this->confirm_password){

                $data = User::
                where('email', Auth::guard('web')->user()->email)
                ->where('isDeleted', 0)
                ->update([
                    'password'=>Hash::make($this->new_password)
                ]);
                if($data == true){
                    $this->dispatchBrowserEvent('alert', 
                    ['type' => 'success',  'message' => 'Successfully Updated']);

                    return redirect()->to('/admin/logout');
                } else {
                    $this->dispatchBrowserEvent('alert', 
                    ['type' => 'error',  'message' => 'Something Wrong']);
                }
                

            } else {

                $this->dispatchBrowserEvent('alert', 
                ['type' => 'error',  'message' => 'Confirm Password Not Match!']);
            }

        } else {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'error',  'message' => 'Old Password Not Match!']);
        }
    }
}
