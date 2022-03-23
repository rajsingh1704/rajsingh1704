<?php

namespace App\Http\Livewire;

// use App\CollegeCities;
use App\Models\college_cities;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class ActionsTable extends LivewireDatatable
{
    public $model = college_cities::class;

    public function columns()
    {
        return [

            NumberColumn::name('id')

                ->label('ID')

                ->sortBy('id'),

  

            Column::name('city')

                ->label('City'),
  

            DateColumn::name('created_at')

                ->label('Creation Date')

        ];
    }

    public function builder()

    {

        return $this->model::query();

    }
}