@if ($user->isVerified())
    {{-- <span class="badge badge-success" data-toggle="tooltip" title="{{ timezone()->convertToLocal($user->email_verified_at) }}">@lang('Yes')</span> --}}
    <label class="c-switch c-switch-label c-switch-pill c-switch-danger">
<input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
</label>
@else
    {{-- <span class="badge badge-danger">@lang('No')</span> --}}
    <label class="c-switch c-switch-label c-switch-pill c-switch-danger">
    <input class="c-switch-input" type="checkbox" ><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
@endif
