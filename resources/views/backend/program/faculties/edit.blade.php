@inject('model', '\App\Models\Faculty')

@extends('backend.layouts.app')

@section('title', __('Sửa khoa đào tạo'))

@section('content')
    <x-forms.patch :action="route('admin.program.faculty.update', $faculty)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Sửa khoa đào tạo')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.program.faculty.index')" :text="__('Hủy bỏ')" />
            </x-slot>

            <x-slot name="body">
                <div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Tên khoa')</label>

                        <div class="col-md-10">
                            <input type="text"  name="name" class="form-control" placeholder="{{ __('Tên khoa') }}" value="{{ old('name') ?? $faculty->name }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->
                     <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Mã khoa')</label>

                        <div class="col-md-10">
                            <input type="text"  name="code" class="form-control" value="{{ old('code') ?? $faculty->code }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Trạng thái')</label>

                        <div class="col-md-10">
                            <select name="status" class="form-control" required>
                                <option value="0">@lang('0')</option>
                                <option value="1">@lang('1')</option>
                            </select>
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
