@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">CHURCH SERVICES 
                  <span class="badge badge-danger">{{ $noOfServices }}</span>
                  </h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">SETTINGS</li>
                              <li class="breadcrumb-item active" aria-current="page">CHURCH SERVICES</li>
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
                <h3 class="box-title">CHURCH SERVICES
                  </h3>
                  <button type="button" class="btn btn-danger text-uppercase float-right" data-toggle="modal" data-target="#serviceModal">
                      <i class="fa fa-plus"></i> New Service
                  </button>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>NAME</th>
                              <th>SERVICE STARTING TIME</th>
                              <th>SERVICE ENDING TIME</th>
                              <th>CREATED BY</th>
                              <th>ACTION</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($services as $key=>$service)
                              <tr>
                                  <td>{{ $key + 1 }}</td>
                                  <td>{{ $service->name }}</td>
                                  <td>{{ date('h:i A', strtotime($service->start_time)) }}</td>
                                  <td>{{ date('h:i A', strtotime($service->ending_time)) }}</td>
                                  <td>{{ $service->user->name }}</td>
                                  <td>
                                    <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-info px-5">
                                      <i class="fa fa-edit"></i>
                                    </a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>SERVICE STARTING TIME</th>
                            <th>SERVICE ENDING TIME</th>
                            <th>CREATED BY</th>
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



<div id="serviceModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gradient-info-dark text-white">
                <h4 class="modal-title text-uppercase">new service</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="box-header with-border">
                      <h4 class="box-title">Create New Service</h4>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" action="{{ route('admin.service.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                        <div class="box-body text-uppercase">
                            <div class="form-group">
                                <label>Service Name</label>
                                <input type="text" name="name" class="form-control" placeholder="First Name">
                              </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Service Start Time</label>
                                  <input type="time" name="start_time" class="form-control" placeholder="First Name">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Service Ending Time</label>
                                  <input type="time" name="end_time" class="form-control" placeholder="Last Name">
                                </div>
                              </div>
                            </div>


                            
                        </div>
                        <!-- /.box-body --> 
                  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Save</button>
            </div>
        </form>
    </div>
</div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection