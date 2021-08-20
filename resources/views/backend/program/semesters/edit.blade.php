@inject('model', '\App\Models\Semester')

@extends('backend.layouts.app')

@section('title', __('Sửa học kỳ'))

@section('content')
    <x-forms.patch :action="route('admin.program.semester.update', $semester)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Sửa học kỳ')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.program.semester.index')" :text="__('Hủy bỏ')" />
            </x-slot>

            <x-slot name="body">
                <div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Tên học kỳ')</label>

                        <div class="col-md-10">
                            <input type="text"  name="name" class="form-control" placeholder="{{ __('Tên học kỳ') }}" value="{{ old('name') ?? $semester->name }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Sửa')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection
