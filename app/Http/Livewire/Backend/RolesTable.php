<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Auth\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class RolesTable.
 */
class RolesTable extends DataTableComponent
{
    /**
     * @return Builder
     */
    public function query(): Builder
    {
        $data =  Role::with('permissions:id,name,description')
            ->withCount('users')
            ->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
            return $data;
    }

    public function columns(): array
    {
        return [
            Column::make(__('Loại tài khoản'), 'type')
                ->sortable(),
            Column::make(__('Tên'), 'name')
                ->sortable(),
            Column::make(__('Số người dùng'), 'users_count')
                ->sortable(),
            Column::make(__('Hành động')),
        ];
    }

    public function rowView(): string
    {
        
        return 'backend.auth.role.includes.row';
    }
}
