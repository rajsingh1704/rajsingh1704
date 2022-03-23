<?php

namespace App\Http\Livewire\Admin\College;
use App\Models\college_details;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class CollegeList extends LivewireDatatable
{
    public $model = college_details::class;
    public $exportable = true;

   

    public function builder()
    {
        return college_details::query()
        ->where("isDeleted", 0);
    }

   

    public function columns()
    {
        return [

            NumberColumn::name('id')

                ->label('ID')

                ->sortBy('id'),

  

            Column::name('college_name')
                // ->editable()
                // ->filterable()
                ->searchable()
                ->label('College Name'),

            Column::name('established')
            // ->editable()
            ->searchable()
            ->label('Established'),

            Column::name('approved_by')
            // ->editable()
            ->searchable()
            ->label('Approved By'),

            Column::callback(['logo'], function ($logo) {
                $url= asset('storage/'.$logo);
                return $age ="
                <img src='$url' >";
                
            })
            ->label('Logo'),
  

            DateColumn::name('created_at')

                ->label('Creation Date'),

            Column::callback(['id'], function ($id) {
            
                return "<a href='collegeProfile/$id' class='btn btn-info'>View</a>";
            })
            ->label('Profile'),
            
            Column::callback(['id', 'college_name'], function ($id, $college_name) {
               
                return $age ="
                <button wire:click='deleteData($id)'><i class='fas fa-trash-alt' style='font-size:20px;color:black'></i></i></button>";
            })
            ->label('Action'),

        ];
    }


    public function deleteData($id){
        college_details::query()
           ->where('id', $id)
           ->update([
               'isDeleted'=>1
           ]);
        //    $this->render();
   }
}