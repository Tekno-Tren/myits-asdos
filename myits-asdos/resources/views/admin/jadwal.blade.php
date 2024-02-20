@extends('layouts.admin')

@section('content')

    <!-- Main content -->
    <section class="content">
    <div>
            <a type="button" class="btn btn-outline-secondary mx-8 mb-3 mt-3" href="#">+ Pertemuan</a>
        </div>
      <div class="row">
        <div class="col-12">
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Jadwal Asisten Dosen Mata Kuliah SKPB</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Asisten Dosen</th>
                  <th>Kelas</th>
                  <th>Materi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1.</td>
                  <td>Delila
                  </td>
                  <td>HI</td>
                  <td>Hubungan adalah ....</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


@endsection

