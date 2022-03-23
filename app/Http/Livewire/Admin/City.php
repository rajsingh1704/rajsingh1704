<?php

namespace App\Http\Livewire\Admin;
use App\Models\college_cities;

use Livewire\Component;





class City extends Component
{
    public $model = college_cities::class;

    public $city_name, $cityID;


    protected $listeners = ['editableModalOpen' => 'editableModalOpen'];


    public function resetInputFields(){
        $this->cityID=null;
        $this->city_name=null;
    }

    public function editableModalOpen($id){
        $data = college_cities::where('id', $id)->where('isDeleted', 0)
        ->first();
        $this->dispatchBrowserEvent('showCourse-form');
        $this->city_name=$data->city;
        $this->cityID=$id;
    }

    public function modalOpen(){
        $this->resetInputFields();
        $this->dispatchBrowserEvent('showCourse-form');
    }

    public function cityInsert()
    {
        if($this->cityID == null){
            $cities = new college_cities;
            $cities->city = $this->city_name;
            $cities->save();

            $message='Successfully Inserted';
        } else {

            $cities= college_cities::query()
            ->where('id', $this->cityID)
            ->update([
                'city'=>$this->city_name
            ]);
            $message='Successfully Updated';
        }

        

        if ($cities == true) {
        
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => $message]);
                $this->resetInputFields();
                $this->dispatchBrowserEvent('coseModal-form');
                $this->emit('refreshCityTable');


        } else {
            $this->dispatchBrowserEvent('alert', 
                ['type' => 'error',  'message' => 'Something is Wrong!']);
        }
    } 

    public function render()
    {
        // $table=$this->columns();
        return view('livewire.admin.city')
        ->extends('livewire.admin.layouts.adminApp')
        ->section('content');
        // return view('livewire.admin.city');
    }

    
}
