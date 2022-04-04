@extends('LabCoding.Admin.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Soal</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-soal') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            @foreach ($categories as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->language }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">exercise</label>
                        <input type="text" name="exercise" rows="3" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">answer</label>
                        <input type="text" name="answer" rows="3" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
