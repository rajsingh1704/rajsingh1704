<?php

namespace App\Http\Livewire\Admin;
use App\Models\courses;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class CoursesTable extends LivewireDatatable
{
    protected $listeners = ['refreshCourseTable' => '$refresh'];
    public $model = courses::class;

    public $exportable = true;

  


    public $course_name;
    public function builder()
    {
        return courses::query()
        ->where("isDeleted", 0);
    }
    // $this->deleteData('id');
    public function deleteData($id){
         courses::query()
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

            Column::name('course')
                // ->editable()
                ->searchable()
                ->label('Course'),
  

            DateColumn::name('created_at')

                ->label('Creation Date'),
            
            Column::callback(['id', 'course'], function ($id, $course) {
               
                return $age ="
                <button wire:click.prevent='addNew($id)' ><i class='fas fa-edit' style='font-size:20px;color:green'></i></button>
                &#160;&#160;&#160;&#160;&#160;
                <button wire:click='deleteData($id)'><i class='fas fa-trash-alt' style='font-size:20px;color:red'></i></i></button>";
            })
            ->label('Action'),
            // Column::delete()

            // Column::callback(['id', 'course'], function ($id, $course) {
            //     return view('livewire/admin/include/table-action', ['id' => $id, 'name' => $course]);
            // })->unsortable()

        ];
    }

    public function addNew($id){
        $this->emit('editableModalOpen', $id);
    }
}