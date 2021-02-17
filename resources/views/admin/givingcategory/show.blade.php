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
                <h3 class="box-title text-uppercase">{{ $category->name }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>DATE</th>
                            {{-- <th>SERVICE NAME</th> --}}
                            <th>AMOUNT GIVEN</th>
                            <th>CREATED BY</th>
                          </tr>
                      </thead>
                       		<tbody>
                                @foreach ($collections as $key=>$collection)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ date('dS - F - Y', strtotime($collection->date)) }}</td>
                                        {{-- <td>{{ $collection->serviceName->name }}</td> --}}
                                        <td>{{ $collection->amount }}</td>
                                        <td>{{ $collection->user->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>	  
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>DATE</th>
                            {{-- <th>SERVICE NAME</th> --}}
                            <th>AMOUNT</th>
                            <th>CREATED BY</th>
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