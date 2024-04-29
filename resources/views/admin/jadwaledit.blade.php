@extends('layouts.admin')

@section('content')
    <section class="content pt-2">
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
                Plotting Kelas Asdos
            </button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Asisten Dosen Mata Kuliah SKPB</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('admin.jadwaledit.update', $kelas->id) }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Asdos:</label>
                                <select name="user_id" class="form-select" aria-label="Default select example" required>
                                    <option selected>Pilih Nama Asdos</option>

                                    @foreach ($asdos as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $row->id == $kelas->user_id ? 'selected' : '' }}>{{ $row->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="">
                                <a href="{{ route('admin.jadwal') }}" class="btn btn-secondary mx-1">Batal</a>
                                <button type="submit" class="btn btn-primary mx-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
