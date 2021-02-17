@extends('layouts.admin.app')
@section('title', 'NEW ANNOUNCEMENTS')
@section('content')

<div class="content-wrapper">
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
                        <h4 class="box-title">CREATE NEW ANNOUNCEMENT</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('admin.announcement.store') }}" method="POST">
                        @csrf 
                        <input type="hidden" value="{{ Auth::user()->id }}" name="created_by">

                          <div class="box-body">
                              <h4 class="box-title text-info"><i class="ti-user mr-15"></i> ANNOUNCEMENT TITLE</h4>
                              <hr class="my-15">
                                  <div class="form-group">
                                    <label>ANNOUNCEMENT TITLE</label>
                                    <input type="text" name="title" class="form-control" placeholder="ANNOUNCEMENT TITLE">
                                  </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>START DATE</label>
                                    <input type="date" name="start_date" class="form-control" placeholder="START DATE">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>END DATE</label>
                                    <input type="date" name="stop_date" class="form-control" placeholder="END DATE">
                                  </div>
                                </div>
                              </div>
                              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> TIME</h4>
                              <hr class="my-15">
                              <div class="form-row">
                                <div class="form-group col-sm-6">
                                  <label>START TIME</label>
                                  <input type="time" name="start_time" class="form-control" placeholder="START TIME">
                                </div>
                                <div class="form-group col-sm-6">
                                  <label>STOP TIME</label>
                                  <input type="time" name="stop_time" class="form-control" placeholder="STOP TIME">
                                </div>
                              </div>
                              <h4 class="box-title text-info mt-5"><i class="ti-save mr-15"></i> ABOUT</h4>
                              <hr class="my-15">
                              <div class="form-group">
                                <label>ABOUT </label>
                                <textarea rows="5" name="desc" class="form-control" placeholder="About Announcement"></textarea>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <a href="{{ route('admin.announcement.index') }}" class="btn btn-rounded btn-warning btn-outline mr-1">
                                <i class="ti-trash"></i> Cancel
                              </a>
                              <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Save
                              </button>
                              {{-- <button type="submit" class="btn btn-primary shadow-primary btn-square px-5"><i class="icon-lock"></i> Create School</button> --}}
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