<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\system_settings;
use App\Models\User;
use App\Mail\forgotPassword;
use App\Mail\successResetPasswordEmail;

class admin extends Controller
{
    public function forgotPassword(Request $req)
    {
        $setting = system_settings::find(1);

        if($req->method() == "GET"){
            return view('livewire.admin.forgot-password', ['setting' =>$setting]);
        }

        $userDetails = User::where('email', $req->email_id)
        ->where('status', 0)
        ->where('isDeleted', 0)
        ->first();
        
        
        // dd($userDetails);
        if($userDetails != null) {
            $resetToken = [
                'reset_token' => encrypt(rand(100000,1000000)),
                ];
    
                DB::table('users')
                ->where('email', $req->email_id)
                ->where('isDeleted', 0)
                ->where('status', 0)
                ->update($resetToken);

                $details=[
                    'userDetails' => $userDetails,
                    'setting' => $setting,
                    'resetToken' => $resetToken
                ];

            Mail::to($req->email_id)->send(new forgotPassword($details));
            return redirect()->back()->with(['success'=>"A Password Reset Link has been sent to your email successfully!"]);
        } else {
            // session()->flash('message', 'Post successfully updated.');

            // return redirect()->to('/restPassword');
            return redirect()->back()->with(['fail'=>"Opps.. Entered email is not registered!!"]);
        
        }
       
    }
    // *(*(((((((((((((((((()))))))))))))))))))


    public function resetPassword(Request $req){
        $setting = system_settings::find(1);

        if($req->method() == "GET"){
        $key = $req->key;
        $data = DB::table('users')
        ->select('reset_token','email')
        ->where('reset_token', $key)
        ->where('isDeleted', 0)
        ->where('status', 0)
        ->first();
        if($data == ''){
            return " 505 | Opps.. Token Expired!";
        }
        return view('livewire.admin.reset-password',['data'=>$data, 'setting'=>$setting]);
        }

        if($req->method() == "POST"){
            $sKey = $req->input('password_reset_token');

        $req->validate([
            'password' => [
            'required',
            'string',
            'min:8',
            'regex:/[a-z]/',
            'regex:/[A-Z]/',
            'regex:/[0-9]/',
            'regex:/[@$!%*#?&]/',
        ],
            'password_confirm' => 'required_with:password|same:password|min:8'
            ]);

            $data1 = DB::table('users')
            ->select('name')
            ->where('isDeleted', 0)
            ->where('status', 0)
            ->where('reset_token', $sKey)
            ->first();
            $data = DB::table('users')
            ->where('reset_token', $sKey)
            ->where('isDeleted', 0)
            ->where('status', 0)
            ->update([
                'password'=>Hash::make($req->password),
                'reset_token'=>''
            ]);
            $details=[
                'data1' => $data1,
                'setting' => $setting,
            ];
            Mail::to($req->email)->send(new successResetPasswordEmail($details));
            return redirect()->route('login');        }
        }
}
