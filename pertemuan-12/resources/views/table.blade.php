
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
              <h3 class="card-title">{{ $title }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no = 0;
                      $type = "";
                  @endphp
                  @foreach ($data as $d)
                    @php
                      $no++;
                      switch ($d['progress']) {
                        case ($d['progress'] < 40):
                          $type = "primary";
                          break;
                        case ($d['progress'] < 60):
                          $type = "danger";
                          break;
                        case ($d['progress'] < 80):
                          $type = "warning";
                          break;
                        default:
                          $type = "success";
                          break;    
                      }
                    @endphp
                    <tr>
                      <td>{{ $no }}.</td>
                      <td>{{ $d['task'] }}</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-{{$type}}" style="width: {{ $d['progress'] }}%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-{{ $type }}">{{ $d['progress'] }}%</span></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection