@extends('master')
@section('content')
    @include('components.header.navbar')
    <div class="container">
        @include('components.status.list_status')
    </div>
@endsection
