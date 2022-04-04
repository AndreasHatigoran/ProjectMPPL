@extends('LabCoding.lab.index')

@section('start')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/lab') }}">Lab Coding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('category') }}">Start Here</a>
                    </li>
            </div>
        </div>
    </nav>
    <div class="card">
        <div class="card-body">
            <img src="{{ asset('assets/labcoding.png') }}" width="100%" alt="Image here">
        </div>
    </div>
    </body>
@endsection
