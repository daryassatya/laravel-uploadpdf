@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {!! session()->get('success') !!}
    </div>
@endif

@if (session()->has('info'))
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {!! session()->get('info') !!}
    </div>
@endif

@if (session()->has('warning'))
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {!! session()->get('warning') !!}
    </div>
@endif

@if (session()->has('failed'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {!! session()->get('failed') !!}
    </div>
@endif
{{-- @push('scripts')
<script>
    // --- NOTIFICATION
    $(document).ready(function () {

        @if (session()->has('failed'))
        swal({
            type: "warning",
            title: "Failed !",
            text: "{!! session()->get('failed') !!}",
            timer: 3000,
            allowOutsideClick: true

        });
        @endif

        @if (session()->has('success'))
        swal({
            type: "success",
            title: "success !",
            text: "{!! session()->get('success') !!}",
            timer: 3000,
            allowOutsideClick: true
        });
        @endif

    })
</script>
@endpush --}}
