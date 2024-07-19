@extends('master')

@section('content')
    @include('components.header.navbar')
    <div class="container">
        @include('components.patient.list_patients')
    </div>
@endsection
