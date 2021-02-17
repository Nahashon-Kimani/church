@extends('layouts.admin.app')
@section('title', 'UPCOMING ANNOUNCEMENTS')
@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Data Tables</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="box">
              <div class="box-header bg-info with-border">
                <h3 class="box-title text-uppercase">
                    Upcoming Announcements <span class="badge badge-pill badge-danger">{{ $totalUpcoming }}</span>
                </h3>
                <a href="{{ route('admin.announcement.create') }}" class="btn btn-danger waves-effect waves-light mb-5 px-5 float-right">
                    <i class="fa fa-plus"></i> New Announcements
                </a>
                {{-- <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>TITLE</th>
                              <th>START DATE</th>
                              <th>END DATE</th>
                              <th>START TIME</th>
                              <th>END TIME</th>
                              <th>ACTION</th>
                          </tr>
                      </thead>
                        <tbody>
                          @foreach ($announcements as $key=>$announcement)
                              <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $announcement->title }}</td>
                                <td>{{ date('F j Y', strtotime($announcement->start_date)) }}</td>
                                <td>{{ date('F j Y', strtotime($announcement->stop_date)) }}</td>
                                <td>{{ date('h:i A', strtotime($announcement->start_time)) }}</td>
                                <td>{{ date('h:i A', strtotime($announcement->stop_time)) }}</td>
                                <td>
                                  <a href="{{ route('admin.announcement.show',$announcement->id ) }}" 
                                    class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></a>
                                </td>
                              </tr>
                          @endforeach
                        </tbody>				  
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>START DATE</th>
                            <th>END DATE</th>
                            <th>START TIME</th>
                            <th>END TIME</th>
                            <th>ACTION</th>
                          </tr>
                      </tfoot>
                  </table>
                  </div>              
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>

@endsection