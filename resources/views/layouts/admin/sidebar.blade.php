@extends('components.sidebar')

@section('sidebar')

<li class="header">ADMIN NAVIGATION</li>
{{-- Side Bar DashBoard --}}
<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
    <a href="{{ route('admin.dashboard') }}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li>

{{-- Side Bar Users --}}
<li class="treeview {{ Request::is('admin/users/*') ? 'active' : ''}}">
    <a href="#">
        <i class="fa fa-users"></i>
        <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('admin/users/admin') || Request::is('admin/users/admin/*') ? 'active' : ''}}">
            <a href="{{ route('admin.usersAdmin') }}"><i class="fa fa-circle-o"></i> Admin</a>
        </li>
        <li class="{{ Request::is('admin/users/user') || Request::is('admin/users/user/*') ? 'active' : ''}}">
            <a href="{{ route('admin.userUser') }}"><i class="fa fa-circle-o"></i> User</a>
        </li>
    </ul>
</li>

{{-- Side Bar Absen --}}
<li class="{{ Request::is('admin/absen') ? 'active' : '' }}">
    <a href="{{ route('admin.absen') }}">
        <i class="fa fa-address-card"></i>
        <span>Absen</span>
    </a>
</li>

<li class="{{ Request::is('admin/laporan') ? 'active' : '' }}">
    <a href="{{ route('admin.laporan') }}">
    <i class="fa fa-file"></i>
        <span>Laporan</span>
    </a>
</li>
@endsection