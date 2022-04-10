@extends('LabCoding.Admin.index')

@section('content')
    {{-- <div class="card">
        <div class="card-header">
            <h4>Lab Code</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Language</th>
                        <th>Exercise</th>
                        <th>Image</th>
                        <th>Answer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($soal as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->language }}</td>
                            <td>{{ $item->exercise }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/soal/' . $item->image) }}" class="w-25"
                                    alt="Image here">
                            </td>
                            <td>{{ $item->answer }}</td>
                            <td>
                                <a href="{{ url('edit-soal/' . $item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-soal/' . $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
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
                            <p align="right"><a href="{{ url('add-soal') }}" button class="btn btn-light btn-sm"
                                    type="button">Add Soal</button></a></p>
                        </div>
                        <div class="col-sm-3">
                            <p align="right"><a href="{{ url('add-categories') }}" button class="btn btn-light btn-sm"
                                    type="button">Add Category</button></a></p>
                        </div>
                    </div>
                    <table class="display" id="basic-key-table">
                        <div class="form-group">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Bahasa Pemrograman</th>
                                        <th scope="col">Exercise</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Answer Key</th>
                                        <th scope="col">Aksi 1</th>
                                        <th scope="col">Aksi 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($soal as $item)
                                        <tr>
                                            <td>{{ $item->category->language }}</td>
                                            <td>{{ $item->exercise }}</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/soal/' . $item->image) }}"
                                                    class="w-25" alt="Image here">
                                            </td>
                                            <td>{{ $item->answer }}</td>
                                            <td align="center">
                                                <a href="{{ url('edit-soal/' . $item->id) }}"><button
                                                        class="btn btn-outline-light btn-sm txt-dark"
                                                        type="button">Edit</button></a>
                                            </td>
                                            <td align="center"><a href="{{ url('delete-soal/' . $item->id) }}"><button
                                                        class="btn btn-outline-danger btn-sm"
                                                        type="button">Delete</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
