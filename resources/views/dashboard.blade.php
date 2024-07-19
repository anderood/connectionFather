@extends('master')

@section('content')
    @include('components.header.navbar')
    <div class="container">
        @include('components.main.list-jobs')
    </div>
@endsection
