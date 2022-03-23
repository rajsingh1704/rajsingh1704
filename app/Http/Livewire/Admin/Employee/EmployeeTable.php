<?php

namespace App\Http\Livewire\Admin\Employee;

use App\Models\User;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class EmployeeTable extends LivewireDatatable
{
    public $model = User::class;
    public $exportable = true;

    public function deleteData($id){
        User::query()
           ->where('id', $id)
           ->update([
               'isDeleted'=>1
           ]);
        //    $this->render();
   }

    public function builder()
    {
        return User::query()
        ->where("isDeleted", 0)
        ->where("userType", '!=', 1);
    }
    

    public function columns()
    {
        return [

            NumberColumn::name('id')

                ->label('ID')

                ->sortBy('id'),

  

            Column::name('name')
                // ->editable()
                // ->filterable()
                ->searchable()
                ->label('Name'),

            Column::callback(['profileImage'], function ($profileImage) {
                $url= asset('storage/'.$profileImage);
                return $age ="
                <img src='$url' >";
                
            })
            ->label('Profile'),

            Column::name('email')
            // ->editable()
            // ->filterable()
            ->searchable()
            ->label('Email Id'),

            Column::name('mobileNo')
            // ->editable()
            // ->filterable()
            ->searchable()
            ->label('Mobile No.'),

            Column::name('aadharNo')
            // ->editable()
            // ->filterable()
            ->searchable()
            ->label('Aadhar No.'),

            Column::name('address	')
            // ->editable()
            ->searchable()
            ->label('Address'),

            
  

            DateColumn::name('created_at')

                ->label('Creation Date'),
            
            Column::callback(['id'], function ($id) {
               
                return $age ="
                <button wire:click='deleteData($id)'><i class='fas fa-trash-alt' style='font-size:20px;color:black'></i></i></button>";
            })
            ->label('Action'),

        ];
    }
}