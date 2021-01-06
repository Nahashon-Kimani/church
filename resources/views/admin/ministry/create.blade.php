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

      <section class="content">
        <div class="row">			  
            <div class="col-sm-8 col-12">
                  <div class="box">
                    <div class="box-header bg-info with-border">
                      <h4 class="box-title text-uppercase"><strong>Create new ministry</strong></h4>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" action="{{ route('admin.ministry.store') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label>Ministry Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Ministry Name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Current Leader</label>
                                <select name="leader" class="form-control selects">
                                  <option selected disabled>-- Select --</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{ route('admin.ministry.index') }}" class="btn btn-rounded btn-warning btn-outline mr-1">
                              <i class="ti-trash"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                              <i class="ti-save-alt"></i> Save
                            </button>
                        </div>  
                    </form>
                  </div>
                  <!-- /.box -->			
            </div>

            {{-- Other ministry in the system --}}
            <div class="col-sm-4 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border">
					<h4 class="box-title text-uppercase"><strong>Ministry list</strong></h4>
				  </div>
				  <div class="box-body">
					<div class="media-list media-list-hover media-list-divided">
                        @foreach ($minitries as $key=>$ministry)
                            <a class="media media-single" href="#">
                                <span class="badge badge-pill badge-danger-light">{{ $key + 1 }}</span>
                                <span class="title">{{ $ministry->name }} </span>
                            </a>
                        @endforeach
					  </div>
				  </div>
				  <div class="box-footer">
					<p>A footer for more content inside</p>
				  </div>
				</div>
			  </div>
      </div>
      <!-- /.row -->

    </section>
    </div>
</div>


@endsection