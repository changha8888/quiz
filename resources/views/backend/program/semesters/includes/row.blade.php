<x-livewire-tables::bs4.table.cell>
   {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    @include('backend.program.semesters.includes.actions', ['model' => $row])
</x-livewire-tables::bs4.table.cell>
