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
                        <h3 class="card-title">Rekap Nilai 1 Asisten Dosen Mata Kuliah SKPB</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="rekapNilai1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kelas</th>
                                    <th>File</th>
                                    <th>Nama Asisten Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($nilai1 as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if ($row->kelas)
                                            {{ $row->kelas->nama }}
                                        @else
                                            <span class="text-danger">Kelas tidak ditemukan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/').'/storage/app/public'.$row->file_path }}" target="blank" >{{ $row->filename }}</a>
                                    </td>
                                    <td>@if ($row->user)
                                        {{ $row->user->nama }}
                                        @else
                                            <span class="text-danger">Asisten Dosen tidak ditemukan</span>
                                        @endif
                                    </td>
                                    <td>
                                            <div class="mx-1">
                                                <form action="{{route('admin.rekapnilai.destroy', $row->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="kelas_id" value="{{$row->id}}">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Rekap Nilai 2 Asisten Dosen Mata Kuliah SKPB</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="rekapNilai2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kelas</th>
                                    <th>File</th>
                                    <th>Nama Asisten Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($nilai2 as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            @if ($row->kelas)
                                                {{ $row->kelas->nama }}
                                            @else
                                                <span class="text-danger">Kelas tidak ditemukan</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/').'/storage/app/public'.$row->file_path }}" target="blank" >{{ $row->filename }}</a>
                                        </td>
                                        <td>{{ $row->user->nama }}</td>
                                        <td>
                                                <div class="mx-1">
                                                    <form action="{{route('admin.rekapnilai.destroy', $row->id)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="kelas_id" value="{{$row->id}}">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')
    <script>
        let table = new DataTable('#rekapNilai1');
        let table = new DataTable('#rekapNilai2');
    </script>
@endsection
