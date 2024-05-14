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
                        <h3 class="card-title">Managerial Akun Admin</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="aktivasi-admin" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($admin as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->username }}</td>
                                        <td >
                                            <div class="d-flex flex-column h-100 align-items-center justify-content-center">
                                                <span class="badge text-bg-{{ $row->departemen == '000' ? 'success' : 'danger' }}">{{ $row->departemen == '000' ? 'Aktif' : 'Non-Aktif' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mx-1">
                                                @if ($row->departemen == '000')
                                                <a href="{{ route('admin.deaktivate', $row->id) }}"
                                                    class="btn btn-secondary mx-1">
                                                    Diaktivasi
                                                </a>
                                                @else
                                                <a href="{{ route('admin.aktivate', $row->id) }}"
                                                    class="btn btn-success mx-1">
                                                    Aktivasi
                                                </a>
                                                @endif

                                                <button type="button" class="btn btn-danger btn_modal" data-id="{{ $row->id }}">
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
          <h1 class="modal-title fs-5" id="modal_deleteLabel">Hapus Admin?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('admin.delete') }}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" value="" name="id">
            <div class="modal-body">
                Apakah anda yakin ingin menghapus admin ini?
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
