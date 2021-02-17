@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 921px;">
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
          <div class="col-10">
            <div class="box">
              <div class="box-header bg-info with-border">
                <h3 class="box-title text-uppercase">Today ({{ date('dS-F-Y') }}) church attendance</h3>
                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#myModal">
					              <i class="fa fa-plus"></i> NEW ATTENDANCE
				            </button>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>MEMBER</th>
                            <th>SERVICE</th>
                            <th>TEMPARATURE</th>
                            <th>SEAT</th>
                            <th>TIME ARRIVE</th>
                            {{-- <th>DATE</th> --}}
                            <th>SERVED BY</th>
                          </tr>
                      </thead>
                        <tbody>
                            @foreach ($attendances as $key=>$attendance)
                                <tr>
                                  <td>{{ $key + 1 }}</td>
                                  <td>{{ $attendance->member->fullname }}</td>
                                  <td>{{ $attendance->service->name }}</td>
                                  <td>{{ $attendance->temp }}</td>
                                  <td>{{ $attendance->seat_no }}</td>
                                  <td>{{ date('h:i A', strtotime($attendance->time)) }}</td>
                                  {{-- <td>{{ date('dS-F-Y', strtotime($attendance->date)) }}</td> --}}
                                  <td>{{ $attendance->user->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>				  
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>MEMBER</th>
                            <th>SERVICE</th>
                            <th>TEMPARATURE</th>
                            <th>SEAT</th>
                            <th>TIME ARRIVE</th>
                            {{-- <th>DATE</th> --}}
                            <th>SERVED BY</th>
                          </tr>
                      </tfoot>
                  </table>
                  </div>              
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->          
          </div>

          {{-- second Column --}}
          <div class="col-2">
            <div class="box">
              <div class="box-header bg-info with-border">
              <h4 class="box-title text-uppercase">Services<strong> Attendance</strong></h4>
              </div>
              <div class="box-body p-0">
                <div class="media-list media-list-hover media-list-divided">
                  @foreach ($services as $key=>$service)
                      <a class="media media-single">
                        <span class="badge badge-pill badge-danger-light">{{ $key + 1 }}</span>
                          <span class="title">{{ $service->name }} </span>
                      </a>
                  @endforeach
                </div>
               </div>
              <div class="box-footer">
              <p class="text-capitalize text-danger"></p>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>


<div id="myModal" class="modal fade bs-example-modal-lg"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gradient-info-dark text-white">
                <h4 class="modal-title text-uppercase text-white" id="myModalLabel">New Church Attendance</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ route('admin.attendance.store') }}" method="POST">
              @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="time" value="{{ date_create('now')->format('Y-m-d H:i:s') }}">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label>MEMBER NAME</label>
                        <select name="member_id" class="form-control selects">
                                @foreach ($members as $member)
                                    <option value="{{ $member->id }}">{{ $member->fullname }}</option>
                                @endforeach
                            </select>
                      </div>
                  </div>
                </div>
                   
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>SERVICE</label>
                            <select name="service_id" class="form-control selects">
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>TEMPARATURE</label>
                            <input type="text" name="temp" class="form-control" placeholder="Company Name">
                          </div>
                          <div class="form-group">
                            <label>SEAT NO</label>
                            <input type="text" name="seat_no" class="form-control" placeholder="Company Name">
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Register</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection