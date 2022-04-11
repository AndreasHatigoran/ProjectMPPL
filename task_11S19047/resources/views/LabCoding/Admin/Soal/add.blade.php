@extends('LabCoding.Admin.index')

@section('content')
    {{-- <div class="card">
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
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <form action="{{ url('insert-soal') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <h5><b>Tambah Soal</b></h5>
                        </div>
                        <div class="card-body add-post">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label class="d-block"><b>Bahasa Pemrograman<font color="ff0000">(*required)
                                            </font></b></label>

                                    <select class="form-select" name="category_id" aria-label="Default select example">
                                        @foreach ($categories as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->language }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label class="d-block"><b>Latihan<font color="ff0000">(*required)
                                            </font>
                                        </b></label>
                                    <input type="text" name="exercise" rows="3" class="form-control">
                                </div>

                                {{-- <form class="dropzone digits" id="singleFileUpload"
                                    action="http://admin.pixelstrap.com/upload.php">
                                    <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                        <h6 class="mb-0">Drop files here or click to upload.</h6>
                                    </div>
                                </form> --}}
                                <div class="form-group">
                                    <label><b>Kode <font color="ff0000">(*required)</font></b></label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="d-block"><b>Kunci Jawaban <font color="ff0000">(*required)</font>
                                        </b></label>
                                    <input type="text" name="answer" rows="3" class="form-control">
                                </div>
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <input class="btn btn-light" type="reset" value="Cancel">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
