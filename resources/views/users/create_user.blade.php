@extends('master')

@section('content')
    @include('components.header.navbar')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="form-container col-md-8 col-lg-6">
                @include('components.users.create_user')
            </div>
        </div>
    </div>
@endsection
