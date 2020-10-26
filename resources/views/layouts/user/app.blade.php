@extends('layouts.master')

@section('users')
    @include('layouts.user.navbar')

    @include('layouts.user.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>
@endsection
