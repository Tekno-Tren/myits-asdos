@extends('layouts.app')

@section('content')
    <!--Upload Nilai-->
    <section id="formupload" class="" min-height:100vh;">
        @if (session('success'))
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
        <div class="container" style="align-items: center">
            <div class="card" style="background-color: aliceblue;">
                <div class="card-body">
                    <div class="mx-auto text-center mt-6 mb-4">
                        <h2 class="">BUKTI KEHADIRAN</h2>
                        <h4 class="">Upload Foto</h4>
                    </div>
                    <form action="{{ route('bukti.store', $kelas_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="">
                            <h5>Silahkan upload foto bukti di kelas dengan ketentuan sebagai berikut:</h5>
                            <h5>Foto selfie diambil oleh asdos dari arah belakang sehingga mahasiswa dan materi terlihat
                                </h1>
                                <h6 class="mb-5">Format : Nama_Kelas_Buktikehadiran</h6>
                                <span
                                    class="block font-bold mb-2 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Upload
                                    Foto
                                </span>
                        </div>
                        <div class="d-flex mb-3">
                            <input type="file" id="section1" name="upload_berkas" class="form-control" value="section1">
                            <input type="hidden" id="user_id" class="form-control" name="user_id"
                                value="{{ $user_id }}">
                            <input type="hidden" id="kelas_id" class="form-control" name="kelas_id"
                                value="{{ $kelas_id }}">
                            <input type="hidden" id="pertemuan_id" class="form-control" name="pertemuan_id" value="{{ $pertemuan_id }}">
                            <button class="btn btn-primary mx-2" type="submit">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
