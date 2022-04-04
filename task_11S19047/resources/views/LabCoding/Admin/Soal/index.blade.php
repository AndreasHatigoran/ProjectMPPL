@extends('LabCoding.Admin.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Soal</h4>
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
    </div>
@endsection
