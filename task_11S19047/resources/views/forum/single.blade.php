{{-- @extends('layouts.app') --}}

@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $forum->title }}</h2>
            </div>
            <div class="card-body">
                {{-- <a href="/{{ '@' . $forum->user->username}}">
                    <x-avatar :object="$forum->user" size="32"/>
                    <a href="/">{{ $forum->user->username }}</a>
                </a> --}}
                <span>Oleh: {{ $forum->user->fullname }}</span>
                <x-avatar :object="$forum->user" size="32" />
                {!! $forum->subject !!}
                @if (Auth::check())
                    @if (Auth::user()->id == $forum->user_id)
                        <a href="/forum/{{ $forum->id }}/edit" class="btn btn-primary ml-1">Edit</a>
                        <form action="/forum/{{ $forum->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-1 mt-2">Hapus</button>
                        </form>
                    @endif
                @endif
            </div>
            <div class="card-body">
                @if (Auth::check())
                    <h4>Komentar</h4>
                    <form action="/forum/{{ $forum->id }}/comments" method="POST">
                        @csrf

                        <x-ckeditor field="subject" label="Subject" />

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @endif
            </div>
            <div class="card-body">
                <h4>Daftar Komentar</h4>
                @forelse ($forum->comments as $comment)
                    <div class="d-flex justify-content-end">
                        @if ($comment->is_solved == true)
                            <i id="mark-{{ $comment->id }}" class="fa-solid fa-check fa-xl"></i>
                        @endif
                        <i id="mark-{{ $comment->id }}" class=""></i>
                    </div>
                    {{-- <span class="d-block">by: {{ $comment->user->username }}</span> --}}
                    <x-avatar :object="$comment->user" size="32" />
                    <span>{{ $comment->user->username }}</span>
                    {!! $comment->subject !!}
                    @if (Auth::check())
                        @if (Auth::user()->id == $comment->user_id)
                            <a href="/comments/{{ $comment->id }}/edit" class="btn btn-info mb-1">Edit</a>
                            <form action="/comments/{{ $comment->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ml-1 mt-2">Hapus</button>
                            </form>
                        @else
                            @if (count(Auth::user()->commentReports->where('comment_id', $comment->id)) != 1)
                                @if (Auth::user()->role == 'dorm' || Auth::user()->role == 'dosen')
                                    <a href="/comment/{{ $comment->id }}/report" class="btn btn-danger btn-sm">Lapor
                                        Pelanggaran</a>
                                @endif
                            @endif
                            @if (Auth::user()->id == $comment->forum->user_id)
                                <button class="btn btn-warning btn-sm" onclick="mark({{ $comment->id }}, this)"
                                    id="solved-btn-{{ $comment->id }}">
                                    @if ($comment->is_solved == true)
                                        unmark
                                    @else
                                        mark
                                    @endif
                                </button>
                            @endif
                        @endif
                    @endif
                    <hr>
                @empty
                    <p>Belom ada komentar</p>
                @endforelse

                <script>
                    function mark(id, el) {
                        el = document.getElementById('solved-btn-' + id)
                        sign = document.getElementById('mark-' + id)
                        fetch('/mark/' + id)
                            .then(response => response.json())
                            .then(data => {
                                if (data.status == 'mark') {
                                    el.innerText = 'unmark'
                                    sign.classList.add("fa-solid");
                                    sign.classList.add("fa-check");
                                    sign.classList.add("fa-xl");
                                } else {
                                    el.innerText = 'mark'
                                    sign.classList.remove("fa-solid");
                                    sign.classList.remove("fa-check");
                                }
                            })
                    }
                </script>
            </div>
        </div>
    </div>

@endsection
