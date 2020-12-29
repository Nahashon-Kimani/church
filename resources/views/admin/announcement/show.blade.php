@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="btn-group mb-5 float-right">
            <button type="button" class="waves-effect waves-light btn btn-info">ACTION</button>
            <button type="button" class="waves-effect waves-light btn btn-info dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('admin.announcement.index') }}">BACK</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('admin.announcement.edit', $announcement->id) }}">EDIT</a>
            </div>
          </div>
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Basic Box</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Announcements</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $announcement->title }}</li>
                                </ol>
                            </nav>
                        </div>
            </div>
              
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-sm-9 col-12">
				<div class="box box-shadowed">
				  <div class="box-header bg-gradient-info-dark with-border text-uppercase text-white">
                    <h4 class="box-title text-center mb-3 mt-3">{{ $announcement->title }}</h4><br>
                    <h5 class="box-title mb-2">From: {{ $announcement->start_date }} at {{ $announcement->start_time }}</h5>
				  </div>
				  <div class="box-body text-justify">
                        <p>{{ $announcement->desc }}</p>
                </div>
				  <div class="box-footer">
					<p>A footer for more content inside</p>
				  </div>
				</div>
              </div>
              <div class="col-sm-3 col-12">
				<div class="box">
				  <div class="box-header with-border bg-info">
					<h4 class="box-title text-uppercase ">Announcement details</h4>
				  </div>
				  <div class="box-body">
                    <div class="media-list media-list-hover media-list-divided">
						<a class="media media-single" target="_blank">
                            {{-- href="{{ route('admin.user.show', $announcement->created_by) }}" --}}
						  <i class="fa fa-user"></i>
						  <span class="title">Created by: {{ $announcement->user->name }} </span>
						</a>

						<a class="media media-single" href="#">
						  <i class="font-size-18 mr-0 flag-icon flag-icon-ba"></i>
						  <span class="title">Starting Time: {{ $announcement->start_time }}</span>
						</a>

						<a class="media media-single" href="#">
						  <i class="font-size-18 mr-0 flag-icon flag-icon-ch"></i>
						  <span class="title">Ending Time: {{ $announcement->stop_time }}</span>
						</a>
					  </div>
				  </div>
				  <div class="box-footer">
					<p>PCEA KAYOLE: ANNOUNCEMENTS</p>
				  </div>
				</div>
			  </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection