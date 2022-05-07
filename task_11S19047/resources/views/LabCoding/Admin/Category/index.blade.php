{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Lab Code</h4>
            <hr>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6" style="visibility: hidden">
                    <span>Search: </span><input type="text" placeholder="">
                </div>
                <div class="col-sm-3">
                    <p align="right"><a href="{{ url('add-soal') }}" button class="btn btn-light btn-sm"
                            type="button">Tambah Soal</button></a></p>
                </div>
                <div class="col-sm-3">
                    <p align="right"><a href="{{ url('add-categories') }}" button class="btn btn-light btn-sm"
                            type="button">Tambah Bahasa</button></a></p>
                </div>
            </div>
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Bahasa Pemrograman</th>
                        <th>Gambar</th>
                        <th scope="col">Aksi 1</th>
                        <th scope="col">Aksi 2</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->language }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/' . $item->image) }}" class="w-25"
                                    alt="Image here">
                            </td>
                            <td>
                                <a href="{{ url('edit-category/' . $item->id) }}" class="btn btn-primary">Ubah</a>
                            </td>
                            <td>
                                <a href="{{ url('delete-category/' . $item->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $category->links('vendor.pagination.costume') }}
    </div>
@endsection
