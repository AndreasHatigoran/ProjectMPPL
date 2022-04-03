@extends('layouts.app')

@section('content')
    <div class="container">
       <h1>Halaman Forum</h1>
        @foreach ($forums as $forum)
            <div class="card">
                <div class="card-body">
                    <h3><a href="/forum/{{$forum->slug}}">{{$forum->title}}</a></h3>
                    {!!$forum->subject!!}
                    <p>dibuat oleh: {{$forum->user->username}}</p>
                </div>
            </div>
        @endforeach 
    </div>    

@endsection