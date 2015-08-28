@extends('master')

@section('sidebar')
    {{ $user->name }}

    <p>This is appended to the master sidebar.</p>
@endsection