@extends('layouts.admin.app')

@section('content')


<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">CHURCH DISTRICTS 
                    {{-- <span class="badge badge-danger badge-sm">{{ $noOfDistricts }}</span> --}}
                    <span class="badge badge-pill badge-warning badge-sm">{{ $noOfDistricts }}</span>
                  </h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">SETTINGS</li>
                              <li class="breadcrumb-item active" aria-current="page">CHURCH DISTRICTS</li>
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
              <div class="box-header with-border">
                <h3 class="box-title">CHURCH DISTRICTS
                  </h3>
                  {{-- <button type="button" class="btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#districtModal">
					<i class="fa fa-plus"></i> New District
                  </button> --}}
                <a href="{{ route('admin.district.create') }}" class="btn btn-info float-right text-uppercase">
                    <i class="fa fa-plus"></i> New District
                </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>DISTRICT NAME</th>
                              <th>DEACON IN CHARGE</th>
                              <th>CREATED BY</th>
                              <th>CREATED AT</th>
                              <th>ACTION</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($districts as $key=>$district)
                              <tr>
                                  <td>{{ $key + 1 }}</td>
                                  <td>{{ $district->name }}</td>
                                   <td> 
                                       @if ($district->deacon_in_charge == null)
                                         --
                                        @else
                                            {{ $district->deconInCharge->name }}
                                        @endif
                                    </td>
                                  <td>{{ $district->user->name }}</td>
                                  <td>{{ $district->created_at }}</td>
                                  <td>
                                        <a href="{{ route('admin.district.edit', $district->id) }}" class="btn btn-info px-5">
                                            <i class="fa fa-eye"></i> 
                                        </a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>DISTRICT NAME</th>
                            <th>DEACON IN CHARGE</th>
                            <th>CREATED BY</th>
                            <th>CREATED AT</th>
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



<div id="districtModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gradient-info-dark text-white">
                <h4 class="modal-title text-uppercase">new district</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="box-header with-border">
                      <h4 class="box-title">Create New Service</h4>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" action="{{ route('admin.district.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                        <div class="box-body text-uppercase">
                            <div class="form-group">
                                <label>district Name</label>
                                <input type="text" name="name" class="form-control" placeholder="First Name">
                              </div>

                              <div class="form-group">
                                <label>Decon in CHARGE</label>
                                <select name="decon_in_charge" class="form-control select2" style="width: 100%;">
                                    <option selected  disabled>-- Select --</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                  </select>
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