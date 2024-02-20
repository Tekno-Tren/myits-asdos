@extends('layouts.admin')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-header">
              <h3 class="card-title">Data Asisten Dosen Mata Kuliah SKPB</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Asisten Dosen</th>
                  <th>Kelas</th>
                  <th>Nama Dosen</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

@endsection
