@extends('layouts.app')

@section('content')
<body style="background-color: #bacfe6">
    <!-- Nama Asdos-->
    <div class="">
        <div class="mb-2 border-rad-0 mx-5 px-0">
            <h5>Hallo,</h5>
            <h3> {{ Auth::user()->nama }} </h3>
        </div>
    </div>

    <!-- Daftar Matkul -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <p style="font-weight: bold;">Daftar Mata Kuliah</p>
                @foreach($kelas as $kelasItem)
                <p><a href="{{ route('matkul.index', $kelasItem->id) }}"> {{ $kelasItem->nama }}</a></p>
                @endforeach
            </div>
        </div>

        <!-- Section -->
        <div class="d-flex flex-column">
            <div class="card card-body mt-3">
                <p style="font-weight: bold;">Section 1</p>
                <p style="font-size: 15px" class="tugas1"><a href="section">Tugas asdos
                        mengupload file berisi nilai mahasiswa sebelum ETS</a></p>
            </div>
            <div class="card card-body mt-3">
                <p style="font-weight: bold;">Section 2</p>
                <p style="font-size: 15px" class="tugas2"><a href="section">Tugas asdos
                        mengupload file berisi nilai mahasiswa sesudah ETS</a></p>
            </div>
        </div>


    </div>
    </div>
@endsection
