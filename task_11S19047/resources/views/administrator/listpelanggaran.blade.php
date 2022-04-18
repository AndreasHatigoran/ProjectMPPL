{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <!-- Page Sidebar Ends-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h1>List Pelanggaran </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Daftar Mahasiswa yang Melakukan Pelanggaran</h6>
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Jumlah Laporan</th>
                                    <th scope="col">Bukti Pelanggaran</th>
                                    <th colspan="2" style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Samuel Ferdi Rajagukguk</td>
                                        <td>11S21008</td>
                                        <td>10</td>
                                        <td>{{ $report->forumcomment->subject }}</td>
                                        <td><button class="btn btn-light btn-xs" type="button">Terima</button></td>
                                        <td><button class="btn btn-danger btn-xs" type="button">Tolak</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-sm-12">
                <ul>
                    <center>
                        <li>
                            <button class="btn btn-outline-success btn-sm" type="button">
                                << </button></a>
                                    <button class="btn btn-outline-success btn-sm" type="button"> 1 </button></a>
                                    <button class="btn btn-outline-success btn-sm" type="button"> 2 </button></a>
                                    <button class="btn btn-outline-success btn-sm" type="button"> 3 </button></a>
                                    <button class="btn btn-outline-success btn-sm" type="button"> 4 </button></a>
                                    <button class="btn btn-outline-success btn-sm" type="button"> 5 </button></a>
                                    <button class="btn btn-outline-success btn-sm" type="button"> >> </button></a>
                        </li>
                </ul>
                </center>
            </div>
        </div> --}}
    </div>
    <!-- Container-fluid Ends-->
@endsection
