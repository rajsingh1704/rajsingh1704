<?php 

namespace App\Http\Livewire\Admin;
use App\Models\courses;

use Livewire\Component;

class Course extends Component
{

    protected $listeners = ['editableModalOpen' => 'editableModalOpen'];

    public $course_name, $courseID;
    
    public function resetInputFields(){
        $this->courseID=null;
        $this->course_name=null;
    }

    public function editableModalOpen($id){
        $data = courses::where('id', $id)->where('isDeleted', 0)
        ->first();
        $this->dispatchBrowserEvent('showCourse-form');
        $this->course_name=$data->course;
        $this->courseID=$id;
    }

    public function modalOpen(){
        $this->resetInputFields();
        $this->dispatchBrowserEvent('showCourse-form');
    }


    public function courseInsert()
    {
        if($this->courseID == null){
            $courses = new courses;
            $courses->course = $this->course_name;
            $courses->save();

            $message='Successfully Inserted';
        } else {

            $courses= courses::query()
            ->where('id', $this->courseID)
            ->update([
                'course'=>$this->course_name
            ]);
            $message='Successfully Updated';
        }

        if ($courses == true) {
        
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => $message]);
                $this->dispatchBrowserEvent('coseModal-form');
                $this->resetInputFields();

                $this->emit('refreshCourseTable');
                // $this->columns();
            // session()->flash('message', 'Post successfully updated.');
        } else {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'error',  'message' => 'Something is Wrong!']);
        }
    }


    public function render()
    {
        // $cou = courses::where('status', 0)
        // ->get();
        // // dd($cou);
        return view('livewire.admin.course')
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
    }
}
