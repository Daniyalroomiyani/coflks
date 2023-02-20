@if(session('success'))
{{--    <div class="alert alert-info text-center">--}}
{{--        <p>{{ session('success') }}</p>--}}
{{--    </div>--}}
<div class="alert alert-success alert-dismissible fade in text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">×</span>
    </button>
    <p>{{ session('success') }}</p>
</div>
@endif

@if(session('success_order'))
{{--    <div class="alert alert-info text-center">--}}
{{--        <p>{{ session('success') }}</p>--}}
{{--    </div>--}}
<div class="alert alert-success alert-dismissible fade in text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">×</span>
    </button>
    <p>{{ session('success_order') }}</p>
</div>
@endif

@if(session('error'))
    {{--    <div class="alert alert-info text-center">--}}
    {{--        <p>{{ session('success') }}</p>--}}
    {{--    </div>--}}
    <div class="alert alert-warning alert-dismissible fade in text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span>
        </button>
        <p>{{ session('error') }}</p>
    </div>
@endif
