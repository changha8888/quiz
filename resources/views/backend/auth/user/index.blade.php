@extends('backend.layouts.app')

@section('title', __('Quản lý tài khoản'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Quản lý tài khoản')
        </x-slot>

        @if ($logged_in_user->hasAllAccess())
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.auth.user.create')"
                    :text="__('Tạo mới')"
                />
                <x-utils.link
                    icon="bi bi-download"
                    class="btn btn-info btn-sm"
                    :href="route('admin.auth.user.download')"
                    :text="__('Download')"
                />
            </x-slot>
        @endif

        <x-slot name="body">
            <livewire:backend.users-table />
        </x-slot>
    </x-backend.card>
@endsection
