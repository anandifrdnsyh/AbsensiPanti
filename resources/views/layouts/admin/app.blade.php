@extends('layouts.master')

@section('users')
    @include('layouts.admin.navbar')

    @include('layouts.admin.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>
@endsection
