<?php

namespace App\Http\Livewire\Admin\College;

use App\Models\college_course_fee_structure;
use App\Models\courses;


use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class CourseFeeTable extends LivewireDatatable
{
    protected $listeners = ['refreshCourseFeeTable' => '$refresh'];
    public $model = college_gallery::class;
    public function builder()
    {
        $collegeId=$this->params;
        return college_course_fee_structure::query()
        ->Join('courses', 'courses.id', 'college_course_fee_structures.course')
        // return DB::table('college_course_fee_structures')
        ->where('college_course_fee_structures.college_id', $collegeId)
        ->where('college_course_fee_structures.isDeleted', 0);
    }
 
    public function columns()
    {
        return [

            NumberColumn::name('id')

                ->label('ID')

                ->sortBy('id'),

            Column::name('courses.course')
            // ->editable()
            ->searchable()
            ->label('Course'),

            Column::name('duration')
            // ->editable()
            ->searchable()
            ->label('Duration'),

            Column::name('total_fees')
            // ->editable()
            ->searchable()
            ->label('Total Fee'),  

            DateColumn::name('created_at')

                ->label('Creation Date'),

            
            Column::callback(['id'], function ($id) {
               
                return $age ="
                <button wire:click='deleteData2($id)'><i class='fas fa-trash-alt' style='font-size:20px;color:black'></i></i></button>";
            })
            ->label('Action'),

        ];
    }

    public function deleteData2($id){
        college_course_fee_structure::query()
           ->where('id', $id)
           ->update([
               'isDeleted'=>1
           ]);
        //    $this->render();
   }
}