<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\admin\admin;
use App\Http\Livewire\Admin\Login;
use App\Http\Livewire\Admin\ResetPassword;
use App\Http\Livewire\Admin\Home;
use App\Http\Livewire\Admin\Course;
use App\Http\Livewire\Admin\City;
// use App\Http\Livewire\CityTable;
use App\Http\Livewire\Admin\College\NewCollege;
use App\Http\Livewire\Admin\College\CollegeListshow;
use App\Http\Livewire\Admin\College\CollegeProfile;
use App\Http\Livewire\Admin\Employee\AddEmployee;
use App\Http\Livewire\Admin\Employee\EmployeeListShow;

use App\Http\Livewire\Admin\ProfileSelf;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', Login::class);
    Route::get('/login', Login::class)->name('login');
    Route::match(['get', 'post'], "/forgotPassword", [admin::class, 'forgotPassword'])->name('forgotPassword');
    Route::match(['get', 'post'], "/resetPassword/{key}", [admin::class, 'resetPassword'])->name('resetPassword');
    // Route::get('/forgotPassword', ResetPassword::class)->name('forgotPassword');
    Route::get('/home', Home::class)->middleware('auth:web')->name('home');

    Route::get('/course', Course::class)->middleware('auth:web')->name('course');
    Route::get('/city', City::class)->middleware('auth:web')->name('city');

    Route::get('/newCollege', NewCollege::class)->middleware('auth:web')->name('newCollege');
    Route::get('/CollegeList', CollegeListshow::class)->middleware('auth:web')->name('CollegeList');

    Route::get('/collegeProfile/{id}', CollegeProfile::class)->middleware('auth:web')->name('collegeProfile');


    Route::get('/addEmployee', AddEmployee::class)->middleware('auth:web')->name('addEmployee');
    Route::get('/employeeList', EmployeeListShow::class)->middleware('auth:web')->name('employeeList');

    Route::get('/profile', ProfileSelf::class)->middleware('auth:web')->name('profile');

    Route::get('/logout',function(Request $request){

       Auth::guard('web')->logout();
       return redirect('/admin');
       })->name('logout');
});
