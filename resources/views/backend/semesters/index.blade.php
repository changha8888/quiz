@extends('backend.layouts.app')

@section('title', __('Quản lý học kỳ'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Quản lý học kỳ')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.semester.create')"
                :text="__('Tạo mới')"
            />
             <x-utils.link
                    icon="bi bi-download"
                    class="btn btn-info btn-sm"
                    :href="route('admin.semester.download')"
                    :text="__('Exel')"
                />
             <x-utils.link
                    icon="bi bi-download"
                    class="btn btn-info btn-sm"
                    :href="route('admin.semester.download-pdf')"
                    :text="__('PDF')"
                />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.semester-table />
        </x-slot>
    </x-backend.card>
@endsection
