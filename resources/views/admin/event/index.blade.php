@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">
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
                <div class="clearfix">
                    <h3 class="box-title text-uppercase">
                        all events
                    </h3>
                    {{-- Main Buttons --}}
                    @include('admin.event.buttons')
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>TITLE</th>
                              <th>LOCATION</th>
                              <th>DATE</th>
                              <th>TIME</th>
                              <th>ASSIGNED TO</th>
                              <th>STATUS</th>
                              <th>ACTION</th>
                          </tr>
                      </thead>
                        <tbody>
                            @foreach ($events as $key=>$event)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ date('dS - F- Y', $event->date) }}</td>
                                    <td>{{ date('h:i A', strtotime($event->time)) }}</td>
                                    <td>
                                        <a href="{{ route('admin.members.index',$event->assign_to) }}">{{ $event->user->fullname }}</a>
                                    </td>
                                    <td>
                                        @if ($event->date > date('Y-m-d'))
                                            <span class="badge badge-success text-uppercase">upcoming Event</span>
                                        @elseif($event->date < date('Y-m-d'))
                                            <span class="badge badge-warning text-uppercase">Archieved</span>
                                        @else 
                                            <span class="badge badge-danger text-uppercase">happening now</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.event.show', $event->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>				  
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>LOCATION</th>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>ASSIGNED TO</th>
                            <th>STATUS</th>
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

@endsection