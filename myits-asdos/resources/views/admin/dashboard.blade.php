@extends('layouts.admin')

@section('content')
    <!-- Nama Asdos-->
    <div class="mb-2 border-rad-0 mx-3 my-3">
        <h5>Welcome Admin!</h5>
        {{-- <h3> {{ Auth::user()->nama }} </h3> --}}
    </div>

    <!-- Daftar Matkul -->
    <div class="container my-3">
        <div class="card">
            <div class="image align-self-center">
                <img src="/images/logoskpb.png" alt="Logo SKPB" width="240">
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info text-align-center">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Asisten Dosen</p>
                        </div>
                        <h5 class="small-box-footer">Jumlah Kehadiran</h5>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
