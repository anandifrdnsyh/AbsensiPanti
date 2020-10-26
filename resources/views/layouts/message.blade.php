<script src="{{ asset('js/notify.js') }}"></script>

<script>
    @if ( $errors->any() )
    @foreach($errors->all() as $error)
    $.notify("{{ $error }}", "error")
    @endforeach
    @endif

    @if ( Session::has('warning'))
    $.notify("{{ Session::get('warning') }}", "warn")
    @endif

    @if ( Session::has('success'))
    $.notify("{{ Session::get('success') }}", "success")
    @endif

    @if ( Session::has('info'))
    $.notify("{{ Session::pull('info') }}", "info")
    @endif

    @if ( Session::has('error'))
    $.notify("{{ Session::get('error') }}", "error")
    @endif
</script>

