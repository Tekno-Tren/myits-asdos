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
                                            <div class="mx-1">
                                                <button type="button" class="btn btn-danger btn_modal"
                                                    data-id="{{ $row->id }}">
                                                    Hapus
                                                </button>
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
    </script>


    <script>
        let table = new DataTable('#aktivasi-admin');
    </script>
@endsection
