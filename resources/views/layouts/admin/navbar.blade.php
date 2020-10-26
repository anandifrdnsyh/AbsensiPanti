@extends('components.navbar')

@push('info')
    <p>
        {{ str_limit(App\Models\User::where('id', Auth::id())->first()->nama, 32, '...') }}
        <small>Admin</small>
    </p>
@endpush
