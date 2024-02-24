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
                Edit Kelas Asisten Dosen
            </button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Kelas Asisten Dosen Mata Kuliah SKPB</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('admin.kelasedit.update', $kelas->id) }}" method="POST">
                        @csrf
                        @method('post')
                        <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
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
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Kelas:</label>
                                <input name="nama" type="text" class="form-control" id="recipient-name"
                                    value="{{ $kelas->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Nama Dosen:</label>
                                <input name="nama_dosen" type="text" class="form-control" id="recipient-name"
                                    value="{{ $kelas->nama_dosen }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Semester :</label>
                                <select name="semester" class="form-select"
                                    value="{{ $kelas->semester }}" required>
                                    <option selected>Pilih Semester</option>
                                    <option value="ganjil" {{ $kelas->semester == 'ganjil' ? 'selected' : '' }}>Ganjil
                                    </option>
                                    <option value="genap" {{ $kelas->semester == 'genap' ? 'selected' : '' }}>Genap
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Tahun Ajaran :</label>
                                <input name="tahun" type="text" class="form-control" id="recipient-name"
                                    value="{{ $kelas->tahun }}" required>
                            </div>

                            <div class="">
                                <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary mx-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
