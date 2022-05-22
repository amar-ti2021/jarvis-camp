@extends('layouts.template')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ $title }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">{{ $title }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
              <tr>
                  <td class="dtr-control sorting_1" tabindex="0">{{ $d['rendering_engine'] }}</td>
                  <td>{{ $d['browser_platform'] }}</td>
                  <td>{{ $d['engine_version'] }}</td>
                  <td>{{ $d['css'] }}</td>
                  <td>{{ $d['grade'] }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@push('scripts')
<script src="plugins/datatables/jquery.dataTables.js"> </script> 
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"> </script> 
<script>
    $(function() {
        $("#example1").DataTable();
    }); 
</script>
@endpush

@endsection
