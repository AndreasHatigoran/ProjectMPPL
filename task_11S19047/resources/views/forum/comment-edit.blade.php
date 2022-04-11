{{-- @extends('layouts.app') --}}

@extends('users.indexMain') //kevinUpdate

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h1>Edit Komentar</h1></div>

                    <div class="card-body">
                        <form action="/comments/{{$comment->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-ckeditor field="subject" label="Subject" value="{{$comment->subject}}"/>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
