{{-- @extends('layouts.app') --}}

@extends('users.indexMain') //kevinUpdate

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3><b>Lab Code</b></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-7" style="visibility: hidden">
                        <span>Search: </span><input type="text" placeholder="">
                    </div>
                    <div class="col-sm-2">
                        <p align="right"><a href="/forum" button class="btn btn-light btn-sm"
                                type="button">Forum</button></a></p>
                    </div>
                    <div class="col-sm-2">
                        <p align="right"><a href="/forum/create" button class="btn btn-light btn-sm"
                                type="button">New Forum+</button></a></p>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
</div>
    {{-- <div class="container">
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
    </div> --}}

@endsection
