@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">General Form Elements</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Forms</li>
                              <li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              
          </div>
      </div>	  

      <!-- Main content -->
      <section class="content">
          <div class="row">			  
              <div class="col-sm-12 col-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title text-uppercase">edit service</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('admin.service.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                          <div class="box-body">
                                  <div class="form-group">
                                    <label>Service  Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $service->name }}" placeholder="Service Name">
                                  </div>                             
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>SERVICE STARTING TIME</label>
                                    <input type="time" name="start_time" class="form-control" placeholder="Service Starting time" value="{{ $service->start_time }}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>SERVICE ENDING  TIME</label>
                                    <input type="time" name="end_time" class="form-control" placeholder="Service Ending time" value="{{ $service->ending_time }}">
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <a href="{{ route('admin.service.index') }}" class="btn btn-rounded btn-warning btn-outline mr-1">
                                <i class="ti-trash"></i> Cancel
                              </a>
                              <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Update
                              </button>
                          </div>  
                      </form>
                    </div>
                    <!-- /.box -->			
              </div>  
          </div>
        
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection