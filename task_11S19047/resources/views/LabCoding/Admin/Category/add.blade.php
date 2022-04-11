{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-9" style="visibility: hidden">
                    <span>Search: </span><input type="text" placeholder="">
                </div>
                {{-- <div class="col-sm-2">
                    <p align="right"><a href="{{ url('add-soal') }}" button class="btn btn-light btn-sm"
                            type="button">Add Soal</button></a></p>
                </div> --}}
                <div class="col-sm-3">
                    <p align="right"><a href="{{ url('categories') }}" button class="btn btn-light btn-sm"
                            type="button">Lihat Bahasa</button></a></p>
                </div>
            </div>
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Bahasa Pemrograman</label>
                        <input type="text" name="language" rows="3" class="form-control">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
