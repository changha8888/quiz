@extends('backend.layouts.app')

@section('title', __('Tài khoản đã xóa'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Tài khoản đã xóa')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.users-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection
