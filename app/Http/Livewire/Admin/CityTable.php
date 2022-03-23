<?php

namespace App\Http\Livewire\Admin;

use App\Models\college_cities;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class CityTable extends LivewireDatatable
{
    public $model = college_cities::class;
    protected $listeners = ['refreshCityTable' => '$refresh'];

    public function builder()
    {
        return college_cities::query()
        ->where("isDeleted", 0);
    }

    public function deleteData($id){
        college_cities::query()
           ->where('id', $id)
           ->update([
               'isDeleted'=>1
           ]);
   }

    public function columns()

    {

        return [

            NumberColumn::name('id')

                ->label('ID')

                ->sortBy('id'),

            Column::name('city')
                // ->editable()
                ->searchable()
                ->label('City'),
  

            DateColumn::name('created_at')

                ->label('Creation Date'),

            Column::callback(['id', 'city'], function ($id, $city) {
            
                return $age ="
                <button wire:click.prevent='editData($id)' ><i class='fas fa-edit' style='font-size:20px;color:green'></i></button>
                &#160;&#160;&#160;&#160;&#160;
                <button wire:click='deleteData($id)'><i class='fas fa-trash-alt' style='font-size:20px;color:red'></i></i></button>";
            })
            ->label('Action')
        ];
    }

    public function editData($id){
        $this->emit('editableModalOpen', $id);
    }
}