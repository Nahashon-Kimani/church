@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="btn-group float-right mb-5">
            <button type="button" class="waves-effect waves-light btn btn-info dropdown-toggle" data-toggle="dropdown">ACTION</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('admin.event.index') }}">BACK</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('admin.event.edit', $event->id) }}">EDIT</a>
            </div>
          </div>
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Basic Box</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Box Cards</li>
                              <li class="breadcrumb-item active" aria-current="page">Basic Box</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {{-- main part --}}
            <div class="col-sm-9 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border">
                    <h4 class="box-title text-uppercase text-center">EVENT TITLE: {{ $event->title }}</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="text-white text-uppercase">date: {{ $event->date }} at {{ $event->time }}</h5>
                        </div>

                        <div class="col-sm-6">
                            <h5 class="text-white text-uppercase text-right">venue: {{ $event->location }}</h5>
                        </div>
                    </div>
				  </div>
				  <div class="box-body">
					<p>{{ $event->details }}</p>
				  </div>
				  <div class="box-footer">
					<p class="h5 text-uppercase">Church Management System</p>
				  </div>
				</div>
              </div>

              {{-- right sidebar --}}
              <div class="col-sm-3 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border">
					<h4 class="box-title text-uppercase">People Incharge</h4>
				  </div>
				  <div class="box-body">
					<p>{{ $event->user->name }}</p>
				  </div>
				  <div class="box-footer">
					<p class="h5 text-uppercase">Church Management System</p>
				  </div>
				</div>
              </div>
              
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection