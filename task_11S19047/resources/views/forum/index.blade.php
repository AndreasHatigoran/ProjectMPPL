@extends('layouts.app')

@section('content')
    <div class="container">
       <h1>Halaman Forum</h1>
        @foreach ($forums as $forum)
            <div class="card mb-1">
                <div class="card-body">
                    <h3><a href="/forum/{{$forum->slug}}">{{$forum->title}}</a></h3>
                    {!! \Illuminate\Support\Str::limit(strip_tags($forum->subject), 100) !!}
                    @if (strlen(strip_tags($forum->subject)) > 100)
                         <a href="/forum/{{$forum->slug}}" class="">Lihat selengkapnya</a>
                    @endif
                    <br>
                    <small>{{ $forum->created_at->format('M j, Y')  }}</small>
                    - <span>dibuat oleh: <b>{{$forum->user->username}}</b></span>
                </div>
            </div>
        @endforeach 
        <div>
            {{$forums->links()}}
        </div>
    </div>    

@endsection