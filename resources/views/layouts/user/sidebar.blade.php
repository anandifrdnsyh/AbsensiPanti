@extends('components.sidebar')

@section('sidebar')
    {{-- Dashboard --}}
    <li class="header">ADMIN NAVIGATION</li>
    <li class="{{ Request::is('user/Dashboard') ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    {{-- Absen --}}
    <li class="{{ Request::is('user/absen') ? 'active' : '' }}">
        <a href="{{ route('user.absen') }}">
            <i class="fa fa-address-card"></i>
            <span>Absen</span>
        </a>
    </li>

      <li class="{{ Request::is('user/laporan') ? 'active' : '' }}">
        <a href="{{ route('user.laporan') }}">
            <i class="fa fa-file"></i>
            <span>Laporan Absen</span>
        </a>
    </li>

    {{-- <ul class="treeview-menu">
        <li class="{{ Request::is('admin/users/admin') || Request::is('admin/users/admin/*') ? 'active' : ''}}">
            <a href="{{ route('admin.usersAdmin') }}"><i class="fa fa-circle-o"></i> Admin</a>
        </li>
        <li class="{{ Request::is('admin/users/user') || Request::is('admin/users/user/*') ? 'active' : ''}}">
            <a href="{{ route('admin.userUser') }}"><i class="fa fa-circle-o"></i> User</a>
        </li>
    </ul>
</li> --}}
@endsection
