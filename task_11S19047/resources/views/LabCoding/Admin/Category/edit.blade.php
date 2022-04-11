@extends('LabCoding.Admin.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Bahasa Pemrograman</label>
                        <input type="text" value="{{ $category->language }}" class="form-control" name="language">
                    </div>
                    <label for="">Gambar</label>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/' . $category->image) }}" class="w-25"
                            alt="category-image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
