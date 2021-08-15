@extends('backend.layouts.app')

@section('title', __('Quản lý nhóm quyền'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Quản lý nhóm quyền')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.auth.role.create')"
                :text="__('Tạo mới')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.roles-table />
        </x-slot>
    </x-backend.card>
@endsection
