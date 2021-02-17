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
                    <a href="{{ route('admin.family.familygrid') }}" class="waves-effect waves-light btn btn-danger">
                        <i class="fa fa-list"></i> Grid View
                    </a>
                    {{-- <button type="button" class="waves-effect waves-light btn btn-info">Middle</button> --}}
                    <a href="{{ route('admin.family.create') }}" class="waves-effect waves-light btn btn-danger">
                        <i class="fa fa-plus"></i> New Family
                    </a>
                  </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>FAMILY NAME</th>
                            <th>FAMILY HEAD</th>
                            <th>TEL NO</th>
                            <th>EMERGENCY NO</th>
                            <th>ADDRESS</th>
                            <th>EMAIL</th>
                            <th>WEDDING DATE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                      </thead>
                        <tbody>
                          @foreach ($families as $key=>$family)
                              <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $family->member->fullname }} Family</td>
                                <td>
                                  <a href="{{ route('admin.members.show', $family->family_head) }}">{{ $family->member->fullname }}</a>
                                </td>
                                <td>{{ $family->telephone }}</td>
                                <td>{{ $family->emergency_no }}</td>
                                <td>{{ $family->address }}</td>
                                <td>
                                  @if ($family->email == '')
                                    <span class="badge badge-danger">--</span>
                                  @else
                                    <span class="badge badge-info">{{ $family->email }}</span>
                                  @endif
                                </td>
                                <td>
                                  @if ($family->wedding_date == '')
                                    <span class="badge badge-pill badge-danger">Coming Soon</span>
                                  @else
                                      {{ $family->wedding_date }}
                                  @endif
                                </td>
                                <td>
                                  @if ($family->status == 'Active')
                                    <span class="badge badge-info">{{ $family->status }}</span>
                                  @else
                                    <span class="badge badge-danger">{{ $family->status }}</span>
                                  @endif
                                </td>
                                <td>
                                  <a href="{{ route('admin.family.show', $family->id) }}" class="btn btn-info px-5">
                                    <i class="fa fa-eye"></i>
                                  </a>
                                </td>
                              </tr>
                          @endforeach
                        </tbody>				  
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>FAMILY NAME</th>
                            <th>FAMILY HEAD</th>
                            <th>TEL NO</th>
                            <th>ADDRESS</th>
                            <th>EMAIL</th>
                            <th>WEDDING DATE</th>
                            <th>EMERGENCY NO</th>
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