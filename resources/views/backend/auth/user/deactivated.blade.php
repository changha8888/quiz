@extends('backend.layouts.app')

@section('title', __('Tài khoản bị vô hiệu hóa'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Tài khoản bị vô hiệu hóa')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.users-table status="deactivated" />
        </x-slot>
    </x-backend.card>
@endsection
