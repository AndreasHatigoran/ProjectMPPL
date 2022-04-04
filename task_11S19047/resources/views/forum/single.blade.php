@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$forum->title}}</h2>
            </div>
            <div class="card-body">
                <a href="/{{ '@' . $forum->user->username}}">
                    <x-avatar :object="$forum->user" size="32"/>
                    <a href="/">{{ $forum->user->username }}</a>
                </a>
                {!!$forum->subject!!}
                <p>by: {{$forum->user->fullname}}</p>
                @if (Auth::check())
                    @if (Auth::user()->id == $forum->user_id)
                        <a href="/forum/{{$forum->id}}/edit" class="btn btn-primary ml-1">Edit</a>
                    @endif
                @endif
            </div>
            <div class="card-body">
                <h4>Komentar</h4>
                <form action="/forum/{{$forum->id}}/comments" method="POST">
                    @csrf
                    
                    <x-ckeditor field="subject" label="Subject"/>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-body">
                <h4>Daftar Komentar</h4>
                @foreach ($forum->comments as $comment)
                    {!!$comment->subject!!}
                    <span class="d-block">by: {{$comment->user->username}}</span>
                    @if (Auth::check())
                        @if (Auth::user()->id == $comment->user_id)
                            <a href="/comments/{{$comment->id}}/edit" class="btn btn-info mb-1">Edit</a>
                        @endif
                        <a href="/lapor" class="btn btn-danger btn-sm">Lapor Pelanggaran</a>
                    @endif
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

@endsection