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
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Managerial Akun Asisten Dosen</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="aktivasi-admin" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>NIK</th>
                                    <th>Departemen</th>
                                    <th>Telp</th>
                                    <th>Rekening</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($asdos as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->username }}</td>
                                        <td>{{ $row->nik }}</td>
                                        <td>{{ $row->departemen }}</td>
                                        <td>{{ $row->telp }}</td>
                                        <td>
                                            <p class="h6 fs-bold">{{ $row->bank }}</p>
                                            <p>{{ $row->norek }}</p>
                                        </td>
                                        <td>
                                            {{ $row->alamat }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="mx-1">
                                                    <button type="button" class="btn btn-danger btn_modal"
                                                        data-id="{{ $row->id }}">
                                                        Hapus
                                                    </button>
                                                </div>
                                                <div class="mx-1">
                                                    <button class="btn btn_edit btn-secondary"
                                                        data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"
                                                        data-username="{{ $row->username }}"
                                                        data-nik="{{ $row->nik }}"
                                                        data-departemen="{{ $row->departemen }}"
                                                        data-telp="{{ $row->telp }}" data-bank="{{ $row->bank }}"
                                                        data-norek="{{ $row->norek }}"
                                                        data-alamat="{{ $row->alamat }}">
                                                        Edit
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="modal_deleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_deleteLabel">Hapus Asdos?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.asdos.delete') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" value="" name="id">
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus Asdos ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_edit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content px-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_deleteLabel">Hapus Asdos?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.asdosedit') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" value="" id="id_edit" name="id">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" id="nama_edit" name="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" id="username_edit" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NIK</label>
                        <input type="number" id="nik_edit" name="nik" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Departemen</label>
                        <input type="text" id="departemen_edit" name="departemen" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telp</label>
                        <input type="number" id="telp_edit" name="telp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bank</label>
                        <input type="text" id="bank_edit" name="bank" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No Rekening</label>
                        <input type="number" id="norek_edit" name="norek" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" id="alamat_edit" name="alamat" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <div>
                            <span>Biarkan kosong jika tidak ingin merubah password</span>
                        </div>
                        <input type="text" id="password_edit" name="password" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let btnModal = document.querySelectorAll('.btn_modal');

        btnModal.forEach(btn => {
            btn.addEventListener('click', function() {
                let id = this.getAttribute('data-id');
                let input = document.querySelector('input[name="id"]');
                console.log(id);

                // Set value of input field in modal
                input.value = id;

                // Show the modal
                $('#modal_delete').modal('show');
            });
        });

        let btnEdit = document.querySelectorAll('.btn_edit');
        let modalEdit = document.querySelector('#modal_edit');

        btnEdit.forEach(btn => {
            btn.addEventListener('click', function() {
                let id = this.getAttribute('data-id');
                let nama = this.getAttribute('data-nama');
                let username = this.getAttribute('data-username');
                let nik = this.getAttribute('data-nik');
                let departemen = this.getAttribute('data-departemen');
                let telp = this.getAttribute('data-telp');
                let bank = this.getAttribute('data-bank');
                let norek = this.getAttribute('data-norek');
                let alamat = this.getAttribute('data-alamat');
                console.log(id);
                let inputId = document.querySelector('#id_edit');
                let inputNama = document.querySelector('#nama_edit');
                let inputUsername = document.querySelector('#username_edit');
                let inputNik = document.querySelector('#nik_edit');
                let inputDepartemen = document.querySelector('#departemen_edit');
                let inputTelp = document.querySelector('#telp_edit');
                let inputBank = document.querySelector('#bank_edit');
                let inputNorek = document.querySelector('#norek_edit');
                let inputAlamat = document.querySelector('#alamat_edit');

                // Set value of input field in modal
                inputId.value = id;
                inputNama.value = nama;
                inputUsername.value = username;
                inputNik.value = nik;
                inputDepartemen.value = departemen;
                inputTelp.value = telp;
                inputBank.value = bank;
                inputNorek.value = norek;
                inputAlamat.value = alamat;

                // Show the modal
                $('#modal_edit').modal('show');
            });
        });
    </script>


    <script>
        let table = new DataTable('#aktivasi-admin');
    </script>
@endsection
