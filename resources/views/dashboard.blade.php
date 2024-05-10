@extends('layouts.app')

@section('content')
    <!-- Nama Asdos-->
    <div class="mb-2 border-rad-0 mx-3 my-3">
        <h5>Hallo,</h5>
        <h3> {{ Auth::user()->nama }} </h3>
    </div>

    <!-- Daftar Matkul -->
    <div class="container my-3">
        <div class="card">
            <div class="card-body">
                <p style="font-weight: bold;">Daftar Mata Kuliah</p>
                @foreach ($kelas as $kelasItem)
                    <p><a href="{{ route('matkul.index', $kelasItem->id) }}"> {{ $kelasItem->nama }}</a></p>
                @endforeach
            </div>
        </div>

       <div class="mt-3">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
       </div>

        <!-- Section -->
        <div class="d-flex flex-column">
            <div class="card card-body mt-3">
                <p style="font-weight: bold;">Rekap Nilai 1</p>
                <p style="font-size: 15px" class="tugas1">
                    <a href="section1">Tugas asdos
                        mengupload file berisi nilai mahasiswa sebelum ETS
                    </a>
                </p>
            </div>
            <div class="card card-body mt-3">
                <p style="font-weight: bold;">Rekap Nilai 2</p>
                <p style="font-size: 15px" class="tugas2">
                    <a href="section2">
                        Tugas asdos
                        mengupload file berisi nilai mahasiswa sesudah ETS
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
