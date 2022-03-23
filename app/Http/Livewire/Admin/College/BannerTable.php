<?php

namespace App\Http\Livewire\Admin\College;

use App\Models\college_gallery;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class BannerTable extends LivewireDatatable
{
    protected $listeners = ['refreshBannerTable' => '$refresh'];
    public $model = college_gallery::class;
    public function builder()
    {
        $collegeId=$this->params;
        return college_gallery::query()->where('college_id', $collegeId)->where('type', 'profile')->where('isDeleted', 0);
    }

    public function columns()
    {
        return [

            NumberColumn::name('id')

                ->label('ID')

                ->sortBy('id'),

            Column::callback(['image'], function ($image) {
                $url= asset('storage/'.$image);
                return $age ="
                <img src='$url' style='max-width:100px; max-height:80px' >";
                
            })
            ->label('Image'),
  

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
        college_gallery::query()
           ->where('id', $id)
           ->update([
               'isDeleted'=>1
           ]);
        //    $this->render();
   }
}