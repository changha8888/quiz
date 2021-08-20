<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Faculty;

class FacultyTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('STT'), 'id')
            ->sortable(),
            Column::make('Mã khoa', 'code')
            ->sortable(),
            Column::make('Name')
            ->sortable(),
            Column::make('Trạng thái', 'status')
            ->sortable()
        ];
    }

    public function query(): Builder
    {
        return Faculty::query()
        ->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    public function rowView(): string
    {
        
        return 'backend.program.faculties.includes.row';
    }
}
