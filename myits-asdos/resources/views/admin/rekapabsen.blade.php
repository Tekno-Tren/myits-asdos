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
                        <h3 class="card-title">Rekap Absen Asisten Dosen Mata Kuliah SKPB</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="rekapAbsen" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kelas</th>
                                    <th>Nama Asisten Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($nilai1 as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->kelas->nama }}</td>
                                        <td>{{ $row->user->nama }}</td>
                                        <td>
                                            <div class="mx-1">
                                                <a href="{{ route('admin.detail') }}"
                                                    class="btn btn-secondary mx-1">Detail</a> {{-- <form action="{{route('admin.detail', $row->id)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="kelas_id" value="{{$row->id}}">
                                                        <button type="submit" class="btn btn-danger">Detail</button>
                                                    </form> --}}
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
        let table = new DataTable('#rekapAbsen');
    </script>
@endsection
