@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  Hi {{ Auth::User()->fullname }} {{ __('You are logged in!') }}
                  <img width = "200px" src="{{ asset('image/buktiss/'.Auth::User()->screenshoot )}}" alt="Pic">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
