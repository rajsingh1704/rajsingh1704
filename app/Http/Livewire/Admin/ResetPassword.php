<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Mail;
use App\Models\system_settings;
use App\Models\User;
use App\Mail\forgotPassword;

use Livewire\Component;

class ResetPassword extends Component
{
    public $email_id;
    public function render()
    {
        $setting = system_settings::find(1);
        return view('livewire.admin.reset-password',['setting' =>$setting]);
    }

    public function forgotPassword()
    {
        $userDetails = User::where('email', $this->email_id)
        ->where('status', 0)
        ->where('isDeleted', 0)
        ->first();
        $setting = system_settings::find(1);
        $details=[
            'userDetails' => $userDetails,
            'setting' => $setting
        ];
        // dd($details);
        if($userDetails =true){
            Mail::to($this->email_id)->send(new forgotPassword($details));
        } else {
            session()->flash('message', 'Post successfully updated.');

            return redirect()->to('/restPassword');
            // return redirect()->back()->with(['fail'=>"Opps.. Entered email is not registered!!"]);
        
        }
       
    }
}
