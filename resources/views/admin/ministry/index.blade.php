@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">CHURCH MINISTRIES
                    {{-- <span class="badge badge-info badge-sm">{{ $noOfMinistry }}</span> --}}
                </h3>
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
              <div class="box-header with-border">
                <h3 class="box-title">CHURCH MINISTRIES 
                    <span class="badge badge-info badge-sm">{{ $noOfMinistry }}</span>
                </h3>
                <a href="{{ route('admin.ministry.create') }}" class="btn btn-info float-right text-uppercase">
                    <i class="fa fa-plus"></i>  new ministry
                </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>NAME</th>
                              <th>CURRENT LEADER</th>
                              <th>CREATED AT</th>
                              <th>ACTION</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($minitries as $key=>$ministry)
                              <tr>
                                  <td>{{ $key+ 1 }}</td>
                                  <td>{{ $ministry->name }}</td>
                                  <td>
                                    @if ($ministry->current_leader == NULL)
                                        <span class="badge badge-info text-uppercase">not assigned</span>
                                    @else
                                        {{ $ministry->currentLeader->fullname }}
                                    @endif
                                  </td>
                                  <td>{{ $ministry->created_at->toFormattedDateString() }}</td>
                                  <td>
                                      <a href="{{ route('admin.ministry.show', $ministry->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>ID</th>
                              <th>NAME</th>
                              <th>CURRENT LEADER</th>
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
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>

@endsection