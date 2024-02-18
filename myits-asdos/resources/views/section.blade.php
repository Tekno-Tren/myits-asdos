@extends('layouts.app')

@section('content')
    <!--Upload Nilai-->
    <section id="formupload" class="d-flex pt-4 justify-content-center" style="background-color: #bacfe6; min-height:100vh;">
        <div class="container mt-4">
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
        <div class="container">
            <div class="card" style="background-color: aliceblue;">
                <div class="card-body">
                    <div class="mx-auto text-center mt-6 mb-4">
                        <h2 class="">SECTION</h2>
                        <h4 class="">Form Upload Nilai</h4>
                    </div>
                    <form action="{{ route('section.store', $kelas_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="">
                            <h5>
                                Silahkan mengisi file nilai yang telah disediakan, lalu upload dalam form berikut ->
                                <a href="https://docs.google.com/document/d/15CG7knLbH1EGd4B4z8Y34ngB_lGvIKnuGxnhvVHdFqM/edit?usp=sharing"
                                    class="text-primary" style="background-color: bisque">template nilai</a>
                            </h5>
                            <h6>Format : NRP_Nama_Nilai Mahasiswa_Mata Kuliah</h6>

                        </div>
                        <div class="d-flex">
                            <input type="file" id="section" name="upload_berkas" class="form-control" value="section">
                                <input type="hidden" id="user_id" class="form-control" name="user_id" value="{{ $user_id }}">
                                <input type="hidden" id="kelas_id" class="form-control" name="kelas_id" value="{{ $kelas_id }}">
                            <button
                                class="btn btn-primary mx-2" type="submit">
                                Upload
                            </button>
                        </div>
                    </form>

                    <div class="table responsive bg-white mt-2">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama File</th>
                                <th scope="col">Upload</th>
                                <th scope="col">Update</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($tugas_list as $key => $tugas)
                              <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$tugas->original_name}}</td>
                                <td>{{ $tugas->created_at }}</td>
                                <td>{{$tugas->updated_at}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
