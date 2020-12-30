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
                        <h4 class="box-title text-uppercase">Edit event</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('admin.event.update', $event->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                          <div class="box-body">
                              <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Event Info</h4>
                              <hr class="my-15">
                              <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                              <div class="form-group">
                                <label>EVENT TITLE</label>
                                <input type="text" value="{{ $event->title }}" name="title" class="form-control" placeholder="Company Name">
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>EVENT LOCATION</label>
                                    <input type="text" value="{{ $event->location }}" name="location" class="form-control" placeholder="EVENT LOCATION">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>ASSIGNED TO</label>
                                    <select name="assigned_to" class="form-control selects">
                                        {{-- multiple="multiple": to make it select multiple  --}}
                                        <option selected  value="{{ $event->assign_to }}">{{ $event->user->name }}</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                </div>
                              </div>
                              <h4 class="box-title text-info mt-5"><i class="ti-save mr-15"></i> EVENT DATE AND TIME</h4>
                              <hr class="my-15">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>EVENT DATE</label>
                                    <input type="date" value="{{ $event->date }}" name="date" class="form-control" placeholder="DATE">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>EVENT START TIME</label>
                                    <input type="time" value="{{ $event->time }}" name="time" class="form-control" placeholder="EVENT START TIME">
                                  </div>
                                </div>
                              </div>
                              {{-- <div class="form-group">
                                <label>Select File</label>
                                <label class="file">
                                  <input type="file" id="file">
                                </label>
                              </div> --}}
                              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> EVENT DETAILS</h4>
                              <hr class="my-15">
                              <div class="form-group">
                                <label> EVENT DETAILS</label>
                                <textarea rows="5" name="detail" class="form-control" placeholder="About EVENT">
                                    {{ $event->details }}
                                </textarea>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <a href="{{ route('admin.event.index') }}" class="btn btn-rounded btn-warning btn-outline mr-1">
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