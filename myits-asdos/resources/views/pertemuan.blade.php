@extends('layouts.app')

@section('content')


    <div class="container mt-4">
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form method="POST" action="{{ route('pertemuan.store',$kelas_id) }}">
            @csrf
            @method('POST')

                <div class="registrasi-container d-flex flex-column align-items-center px-3 pt-5 pb-5 ">
                    <div class="form-container ">
                        <h1 class="fw-normal">Tambah Pertemuan</h1>
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="tanggal" class="card-text">Tanggal :</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                value="{{ old('tanggal') }}">
                        </div>
                        <div class="mb-3">
                            <label for="jam" class="card-text">Jam :</label>
                            <input type="time" name="jam" id="jam" class="form-control"
                                value="{{ old('jam') }}">
                        </div>
                        <div class="mb-3">
                            <label for="tempat" class="card-text">Tempat :</label>
                            <input type="text" name="tempat" id="tempat" class="form-control"
                                value="{{ old('tempat') }}">
                        </div>
                        <input type="hidden" id="kelas_id" name="kelas_id" value="{{ $kelas_id }}">
                        <div class="d-grid">
                            <button type="submit" name="tambah" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>

{{--
<div class="container">
    <div class="card card-body">
        <h3>Ini pertemuan</h3>
    </div>
</div> --}}
@endsection

