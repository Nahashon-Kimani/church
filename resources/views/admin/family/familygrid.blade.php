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
          <div class="col-12">
            <div class="box">
              <div class="box-header bg-info with-border">
                <h3 class="box-title text-uppercase">Church Families</h3>
                <div class="btn-group float-right">
                    <a href="{{ route('admin.family.index') }}" class="waves-effect waves-light btn btn-danger">
                        <i class="fa fa-list"></i> List View
                    </a>
                    {{-- <button type="button" class="waves-effect waves-light btn btn-info">Middle</button> --}}
                    <a href="{{ route('admin.family.create') }}" class="waves-effect waves-light btn btn-danger">
                        <i class="fa fa-plus"></i> New Family
                    </a>
                  </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="row">
                      @foreach ($families as $family)
                          <div class="col-xs-4">
                            <div class="box bl-5 border-danger rounded pull-up">
                                <div class="box-body">	
                                    <div class="flex-grow-1">	
                                        <div class="d-flex align-items-center pr-2 justify-content-between">							
                                            <h4 class="font-weight-500">
                                                {{ $family->member->fullname }} Family
                                            </h4>						
                                        </div>
                                    </div>							
                                   <div class="row">
                                       <div class="col">
                                        <div class="media-list media-list-hover media-list-divided">
                                            <a class="media media-single" href="#">
                                              {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-us"></i> --}}
                                              <span class="title">Family Head: {{ $family->member->fullname }}</span>
                                              <span class="badge badge-pill badge-secondary-light">Family Head</span>
                                            </a>
                    
                                            <a class="media media-single" href="tel:+{{ $family->telephone }}">
                                              {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-ba"></i> --}}
                                              <span class="title">{{ $family->telephone }}</span>
                                              <span class="badge badge-pill badge-info-light">Home</span>
                                            </a>
                    
                                            <a class="media media-single" href="tel:+{{ $family->emergency_no }}">
                                              {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-ch"></i> --}}
                                              <span class="title">{{ $family->emergency_no }}</span>
                                              <span class="badge badge-pill badge-danger-light">Emergency no</span>
                                            </a>
                    
                                            <a class="media media-single" href="#">
                                              {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-de"></i> --}}
                                              <address><span class="title">{{ $family->address }}</span></address>
                                              <span class="badge badge-pill badge-success-light float-right">Address</span>
                                            </a>

                                            {{-- Email Validation --}}
                                            @if ($family->email == '')
                                                <a class="media media-single" href="#">
                                                    {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-fr"></i> --}}
                                                    <span class="title">--</span>
                                                    <span class="badge badge-pill badge-danger-light">Email</span>
                                                </a>
                                            @else
                                                <a class="media media-single" href="mailto:{{ $family->email }}">
                                                    {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-fr"></i> --}}
                                                    <span class="title">{{ $family->email }}</span>
                                                    <span class="badge badge-pill badge-danger-light">Email</span>
                                                </a>
                                            @endif

                                            {{-- Wedding date Validation --}}
                                            @if ($family->wedding_date == '')
                                                <a class="media media-single" href="#">
                                                    {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-fr"></i> --}}
                                                    <span class="title">Wedding: Coming Soon</span>
                                                    <span class="badge badge-pill badge-danger-light">Email</span>
                                                </a>
                                            @else
                                                <a class="media media-single" href="#">
                                                    {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-ga"></i> --}}
                                                        Wedding: <span class="title">{{ date('dS-F-Y', strtotime($family->wedding_date)) }}</span>
                                                    <span class="badge badge-pill badge-warning-light">Wedding Date</span>
                                                </a>
                                            @endif
                    
                                          </div>
                                       </div>
                                   </div>
                                </div>					
                            </div>
                      </div>
                      @endforeach
                      
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

@endsection