@extends('LabCoding.lab.index')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Categories</h2>
                    <div class="row">
                        @foreach ($category as $cate)
                            <div class="col-md-3 mb-3">
                                <a href="{{ url('view-language/' . $cate->language) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/category/' . $cate->image) }}"
                                            alt="Category Image">
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
