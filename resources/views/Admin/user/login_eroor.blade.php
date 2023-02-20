@if(session('success'))
{{--    <div class="alert alert-info text-center">--}}
{{--        <p>{{ session('success') }}</p>--}}
{{--    </div>--}}

<div class="alert alert-danger alert-dismissible fade in" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">×</span>
</button>
    <p>{{ session('success') }}</p>
</div>
@endif
