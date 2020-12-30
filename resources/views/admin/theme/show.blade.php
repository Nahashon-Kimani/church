@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="btn-group mb-5 float-right">
            <button type="button" class="waves-effect waves-light btn btn-info dropdown-toggle" data-toggle="dropdown">ACTION</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('admin.theme.index') }}">BACK</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('admin.theme.edit', $theme->id) }}">EDIT</a>
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
            <div class="col-sm-9 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border">
                    <h4 class="box-title text-uppercase text-center"> <strong>verse: {{ $theme->verse }}</strong></h4> 
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 text-uppercase">Spiritual year: {{ $theme->spiritual_year }}</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            @if ($theme->status == 'Active')
                                <span class="badge badge-warning text-right">{{ $theme->status }}</span>
                            @else
                                <span class="badge badge-danger text-right">{{ $theme->status }}</span>
                            @endif
                        </div>
                    </div>
				  </div>
				  <div class="box-body">
					<p>{{ $theme->narration }}</p>
				  </div>
				  <div class="box-footer">
					<p class="text-uppercase h5">church management system</p>
				  </div>
				</div>
              </div>
              
              {{-- Right Sidebar --}}
              <div class="col-sm-3 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border">
					<h4 class="box-title text-uppercase"> <strong>created by</strong></h4>
				  </div>
				  <div class="box-body">
                    <div class="media-list media-list-hover media-list-divided">
						<a class="media media-single" href="#">
                            <span class="badge badge-pill badge-danger-light">1</span>
						        <span class="title">{{ $theme->user->name }} </span>
						    <span class="badge badge-pill badge-danger-light">125</span>
						</a>
					  </div>
				  </div>
				  <div class="box-footer">
					<p class="text-uppercase h5">church management system</p>
				  </div>
                </div>
                {{-- Other Themes --}}
                <div class="box">
                    <div class="box-header bg-info with-border">
                      <h4 class="box-title text-uppercase"> <strong>Other Themes</strong></h4>
                    </div>
                    <div class="box-body">
                        <div class="media-list media-list-hover media-list-divided">
                            @foreach ($themes as $key=> $theme)
                            <a class="media media-single" href="{{ route('admin.theme.show', $theme->id) }}">
                                <span class="badge badge-pill badge-danger-light">{{ $key + 1 }}</span>
                                <span class="title">{{ $theme->verse }}: Year {{ $theme->spiritual_year }}</span>
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
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection