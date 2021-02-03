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
                <h3 class="box-title text-uppercase">
                    all themes
                </h3>
                <a href="{{ route('admin.theme.create') }}" class="waves-effect waves-light btn btn-danger mb-5 px-5 float-right text-uppercase">
                    <i class="fa fa-plus"></i> New theme
                </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>VERSE</th>
                              {{-- <th>VERSE NARRATION</th> --}}
                              <th>SPIRITUAL YEAR</th>
                              <th>STATUS</th>
                              <th>ACTION</th>
                          </tr>
                      </thead>
                        <tbody>
                            @foreach ($themes as $key=>$theme)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $theme->verse }}</td>
                                    <td>{{ $theme->spiritual_year }}</td>
                                    <td>
                                        @if ($theme->status == 'Active')
                                            <span class="badge badge-success">{{ $theme->status }}</span>
                                        @else
                                            <span class="badge badge-warning">{{ $theme->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.theme.show', $theme->id) }}" class="btn btn-info px-5">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>			  
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>VERSE</th>
                            {{-- <th>VERSE NARRATION</th> --}}
                            <th>SPIRITUAL YEAR</th>
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