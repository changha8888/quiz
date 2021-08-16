<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Semester;

class SemesterTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('STT'), 'id')
            ->sortable(),
            Column::make('Name')
            ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Semester::query()
        ->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    public function rowView(): string
    {
        
        return 'backend.semesters.includes.row';
    }
}
