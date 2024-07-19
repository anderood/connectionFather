@extends('master')

@section('content')
    @include('components.header.navbar')
    <div class="container">
        @include('components.jobs.list_job')
    </div>
@endsection
