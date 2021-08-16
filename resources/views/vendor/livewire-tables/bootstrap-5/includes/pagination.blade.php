@if ($showPagination)
    @if ($paginationEnabled && $rows->lastPage() > 1)
        <div class="row">
            <div class="col-12 col-md-6">
                {{ $rows->links() }}
            </div>

            <div class="col-12 col-md-6 text-center text-md-end text-muted">
                <span>@lang('Hiển thị')</span>
                <strong>{{ $rows->count() ? $rows->firstItem() : 0 }}</strong>
                <span>@lang('từ')</span>
                <strong>{{ $rows->count() ? $rows->lastItem() : 0 }}</strong>
                <span>@lang('tới')</span>
                <strong>{{ $rows->total() }}</strong>
                <span>@lang('kết quả')</span>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-12 text-muted">
                @lang('Hiển thị')
                <strong>{{ $rows->count() }}</strong>
                @lang('kết quả')
            </div>
        </div>
    @endif
@endif
