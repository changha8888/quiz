@extends('backend.layouts.app')

@section('title', __('Quản lý khoa đào tạo'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Quản lý khoa đào tạo')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.program.faculty.create')"
                :text="__('Tạo mới')"
            />
             <x-utils.link
                    icon="bi bi-download"
                    class="btn btn-info btn-sm"
                    :href="route('admin.program.faculty.download')"
                    :text="__('Exel')"
                />
             <x-utils.link
                    icon="bi bi-download"
                    class="btn btn-info btn-sm"
                    :href="route('admin.program.faculty.download-pdf')"
                    :text="__('PDF')"
                />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.faculty-table />
        </x-slot>
    </x-backend.card>
@endsection
