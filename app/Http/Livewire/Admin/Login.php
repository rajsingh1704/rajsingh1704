<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use App\Models\system_settings;

class Login extends Component
{
    public $email;
    public $password;
    public $success;
    public $message;

    public function resetInputFields(){
        $this->email=null;
        $this->password=null;
    }

    public function LoginData()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // session()->flash('message', 'Post successfully updated.');
        // $this->success = true;
        // return redirect()->back();
        // $this->resetInputFields();
        // $this->emit('refreshParent');
        // $this->emit('closeIRAModal');

        

        if (Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password, 'isdeleted' => 0, 'status' => 0]) == true) {
        
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Successfully Login']);
                redirect()->to('/admin/home');
                $this->resetInputFields();
            // session()->flash('message', 'Post successfully updated.');
        } else {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'error',  'message' => 'Something is Wrong!']);
            // session()->flash('message', 'Post successfully Error.');
            // return redirect()->back()->with('message', 'The email or password is incorrect, please try again!');
        }
        // dd($this->email);
    }
    public function render()
    { 

        $setting = system_settings::find(1);
        // dd($setting);
        return view('livewire.admin.login',['setting' => $setting]);
    }
}
