@extends('layouts.app')

@section('content')

    <div class="container pt-10 pb-16">
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="w-100">
            <div class="card card-body w-100 mt-3" style="background-color: aliceblue">
                <div class="mx-auto text-center mt-6 mb-4 ">
                    <h4 class="font-bold text-3xl text-dark mt-6">Berita Acara</h4>
                </div>
                <form action="{{ route('materi.store', $kelas_id) }}" method="POST">
                    @csrf
                    <div class="w-100 px-4 mb-8">
                        <label for="materi" class="text-base font-bold">Berita acara merupakan materi yang akan diajarkan kepada mahasiswa</label>
                        <input type="text" id="materi" name="materi"
                            class="form-control" />
                        <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">
                        <input type="hidden" id="kelas_id" name="kelas_id" value="{{ $kelas_id }}">
                        <input type="hidden" id="kelas_id" name="pertemuan_id" value="{{ $pertemuan_id }}">
                    </div>
                    <button class="btn btn-primary mx-4 mt-3" type="submit ">
                        Submit
                    </button>
                </form>
            </div>
            <div class="card card-body w-100 mt-3" style="background-color: aliceblue">
                <h5>Berita Acara Sebelumnya</h5>
                <p>{{ $materi == null ? 'Belum ada berita acara ' : $materi->materi }}</p>
            </div>
        </div>
    </div>
@endsection
