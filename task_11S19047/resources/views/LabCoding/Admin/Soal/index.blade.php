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
                                    type="button">Tambah Soal</button></a></p>
                        </div>
                        <div class="col-sm-3">
                            <p align="right"><a href="{{ url('add-categories') }}" button class="btn btn-light btn-sm"
                                    type="button">Tambah Bahasa</button></a></p>
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
                                        <th scope="col">Latihan</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Lunci Jawaban</th>
                                        <th scope="col">Ubah</th>
                                        <th scope="col">Hapus</th>
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
                                                        type="button">Ubah</button></a>
                                            </td>
                                            <td align="center"><a href="{{ url('delete-soal/' . $item->id) }}"><button
                                                        class="btn btn-outline-danger btn-sm"
                                                        type="button">Hapus</button></a>
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
