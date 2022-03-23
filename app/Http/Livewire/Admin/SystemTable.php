<?php

namespace App\Http\Livewire\Admin;

use App\Models\system_settings;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use Mediconesystems\LivewireDatatables\Column;


class SystemTable extends LivewireDatatable
{
    public $model = system_settings::class;

    // public function builder()
    // {
    //     system_settings::query();
    // }

    public function columns()
    {
        return [

            Column::name('system_name')
                ->editable()
                ->label('College Name'),


            Column::name('email')
            ->editable()
            ->label('Email Id'),

            Column::name('mobile')
            ->editable()
            ->label('Mobile No.'),

            Column::name('address')
            ->editable()
            ->label('Address'),

        ];
    }
}