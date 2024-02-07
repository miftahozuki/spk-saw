@extends('frontend.layouts.template')
@section('content')
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Daftar Pegawai</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <a href="{{ url('cetak-pegawai') }}"><button type="button" class="btn btn-secondary me-2"><i class="bi bi-printer-fill me-2 fs-6"></i>Cetak</button></a>
                            <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal"
                                data-bs-target="#depadd"><i class="icofont-plus-circle me-2 fs-6"></i>Tambah</button>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row clearfix g-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0 " style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="bg-primary text-white">No</th>
                                        <th class="bg-primary text-white text-center w-100">Nama Pegawai</th>
                                        <th class="bg-primary text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($datapegawai as $row)
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{ $no++ }}</span>
                                            </td>
                                            <td>
                                                <span class="fw-bold ms-1">{{ $row->nama }}</span>
                                            </td>
                                            <td>
                                                <form action="{{ route('data-pegawai.destroy', $row->id) }}" method="POST">
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#depedit{{ $row->id }}"><i
                                                                class="icofont-edit text-success"></i></button>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-secondary deleterow"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i
                                                                class="icofont-ui-delete text-danger"></i></button>
                                                </form>
                        </div>
                        </td>
                        </tr>
                        </tbody>

                        <!-- Edit Pegawai-->
                        <div class="modal fade" id="depedit{{ $row->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title  fw-bold" id="depaddLabel"> Ubah Nama </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <form id="pegawai" method="POST" action="{{ route('data-pegawai.update', $row->id) }}">
                                                {!! csrf_field() !!}
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                <label for="nama" class="form-label">Nama Pegawai </label>
                                                <input type="text" class="form-control"
                                                    value="{{ isset($datapegawai) ? $row->nama : '' }}" id="nama"
                                                    name="nama">
                                        </div>
                                        <div class="deadline-form">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger text-white"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
    </div>

    <!-- Add Pegawai-->
    <div class="modal fade" id="depadd" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="depaddLabel"> Tambah Pegawai </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <form id="pegawai" method="POST" action="{{ route('data-pegawai.store') }}">
                            {!! csrf_field() !!}
                            <label for="nama" class="form-label">Nama Pegawai </label>
                            <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="deadline-form">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
