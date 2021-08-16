@inject('model', '\App\Models\Semester')

@extends('backend.layouts.app')

@section('title', __('Tạo mới học kỳ'))

@section('content')
    <x-forms.post :action="route('admin.semester.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Tạo mới học kỳ')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.semester.index')" :text="__('Hủy bỏ')" />
            </x-slot>

            <x-slot name="body">
                <div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Name')</label>

                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="{{ __('Tên học kỳ') }}" value="{{ old('name') }}" maxlength="100" required />
                        </div>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Tạo mới')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
