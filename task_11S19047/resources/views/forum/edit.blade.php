{{-- @extends('layouts.app') --}}

@extends('layouts.main')

@section('content')
    <div class="container-fluid">
            <div class="row">
             <div class="card">
                <div class="card-header">
                    <h1>Edit Artikel</h1>
                </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                    <div class="card-body">
                        <form action="/forum/{{ $forum->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-input field="title" label="Judul" type="text" value="{{ $forum->title }}" />
                            <x-ckeditor field="subject" label="Pertanyaan" value="{{ $forum->subject }}" />

                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
