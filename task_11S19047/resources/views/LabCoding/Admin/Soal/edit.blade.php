{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update Soal</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-soal/' . $soal->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            @foreach ($categories as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->language }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">Latihan</label>
                        <input type="text" value="{{ $soal->exercise }}" class="form-control" name="exercise">
                    </div>
                    <label for="">Kode</label>
                    @if ($soal->image)
                        <img src="{{ asset('assets/uploads/soal/' . $soal->image) }}" class="w-25"
                            alt="soal-image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Kunci Jawaban</label>
                        <input type="text" value="{{ $soal->answer }}" class="form-control" name="answer">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
