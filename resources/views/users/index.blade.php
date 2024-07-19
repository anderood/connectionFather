@extends('master')

@section('content')
    @include('components.header.navbar')
    <div class="container">
        @include('components.users.list_users')
    </div>
@endsection
