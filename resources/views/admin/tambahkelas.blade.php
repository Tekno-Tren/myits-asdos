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
                                    <th>Kelas</th>
                                    <th>Nama Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->nama_dosen }}</td>
                                        <td>
                                            <div class="d-flex flex-justify-content-between">
                                                <div class="mx-1">
                                                    <form action="{{ route('admin.tambahkelas.destroy', $row->id) }}"
                                                        method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        {{-- <input type="hidden" name="kelas_id" value="{{$row->id}}"> --}}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                                <button class="edit_kelas btn btn-secondary" data-id="{{ $row->id }}"
                                                    data-kelas="{{ $row->nama }}", data-dosen="{{ $row->nama_dosen }}"
                                                    data-semester="{{ $row->semester }}"
                                                    data-tahun="{{ $row->tahun }}">Edit</button>
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
                                    <input type="hidden" id="id_kelas_edit" name="id_kelas" value="">
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
                                        <input name="tahun" type="text" class="form-control" id="tahun-akademik"
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

                <div class="modal fade" id="edit_kelas" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kelas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('tambahkelas.store') }}" method="POST">
                                    @csrf
                                    @method('post')
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Kelas:</label>
                                        <input name="nama" type="text" class="form-control" id="nama_kelas_edit"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Nama Dosen:</label>
                                        <input name="nama_dosen" type="text" class="form-control"
                                            id="nama_dosen_edit" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Semester :</label>
                                        <select name="semester" id="semester_edit" class="form-select"
                                            aria-label="Default select example" required>
                                            <option selected>Pilih Semester</option>
                                            <option value="ganjil">Ganjil</option>
                                            <option value="genap">Genap</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Tahun Ajaran :</label>
                                        <input name="tahun" type="text" class="form-control"
                                            id="tahun_akademik_edit" required>
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
@endsection

@section('scripts')
    <script>
        let table = new DataTable('#tambahKelas');


        let editKelas = document.querySelectorAll('.edit_kelas');
        editKelas.forEach((btn) => {
            btn.addEventListener('click', (e) => {
                let id_kelas = e.target.getAttribute('data-id');
                let kelas = e.target.getAttribute('data-kelas');
                let dosen = e.target.getAttribute('data-dosen');
                let semester = e.target.getAttribute('data-semester');
                let tahun = e.target.getAttribute('data-tahun');
                let modal = new bootstrap.Modal(document.getElementById('edit_kelas'));
                let input = document.querySelector('#id_kelas_edit');
                let inputKelas = document.querySelector('#nama_kelas_edit');
                let inputDosen = document.querySelector('#nama_dosen_edit');
                let inputSemester = document.querySelector('#semester_edit');
                let inputTahun = document.querySelector('#tahun_akademik_edit');
                console.log(id_kelas + ' ' + input);
                input.setAttribute('value', id_kelas);
                inputKelas.setAttribute('value', kelas);
                inputDosen.setAttribute('value', dosen);
                inputSemester.setAttribute('value', semester);
                inputTahun.setAttribute('value', tahun);

                for (let i = 0; i < inputSemester.options.length; i++) {
                    if (inputSemester.options[i].value == semester) {
                        inputSemester.options[i].selected = true;
                        break;
                    }
                }
                modal.show();
            });
        });
    </script>
@endsection
