@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-secondary mx-8 mb-3 mt-3" data-bs-toggle="modal"
                data-bs-target="#tambah_kelas">
                + Kelas
            </button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Kelas Asisten Dosen</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="tambahKelas" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th style="width: 88%">Kelas</th>
                                    {{-- <th>Nama Dosen</th> --}}
                                    {{-- <th>Nama Asisten Dosen</th> --}}
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($kelas as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->nama }}</td>
                                        {{-- <td>{{ $row->nama_dosen }}</td> --}}
                                        {{-- <td>{{ $row->user->nama }}</td> --}}
                                        <td>
                                            <div class="d-flex flex-justify-content-between">
                                                <div class="mx-1">
                                                    <form action="{{route('admin.tambahkelas.destroy', $row->id)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        {{-- <input type="hidden" name="kelas_id" value="{{$row->id}}"> --}}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="modal fade" id="tambah_kelas" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kelas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('tambahkelas.store') }}" method="POST">
                                    @csrf
                                    @method('post')
                                    {{-- <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Asdos:</label>
                                        <select name="user_id" class="form-select" aria-label="Default select example"
                                            required>
                                            <option selected>Pilih Nama Asdos</option>

                                            @foreach ($asdos as $row)
                                                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Kelas:</label>
                                        <input name="nama" type="text" class="form-control" id="recipient-name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Nama Dosen:</label>
                                        <input name="nama_dosen" type="text" class="form-control" id="recipient-name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Semester :</label>
                                        <select name="semester" class="form-select" aria-label="Default select example"
                                            required>
                                            <option selected>Pilih Semester</option>
                                            <option value="ganjil">Ganjil</option>
                                            <option value="genap">Genap</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Tahun Ajaran :</label>
                                        <input name="tahun" type="text" class="form-control" id="recipient-name"
                                            required>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- next pop up delete --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
    <script>
        let table = new DataTable('#tambahKelas');
    </script>
@endsection
