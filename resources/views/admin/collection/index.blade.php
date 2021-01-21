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
              <div class="box-header with-border bg-info">
                <h3 class="box-title text-uppercase">Church Collections</h3>
                  <br><br>
                  <h4 class="box-title text-uppercase text-white mt-5">Total Collections Ksh. {{ number_format($totalCollections, 2, '.', ',') }}</h4>
                <a href="{{ route('admin.collection.create') }}" class="btn btn-danger px-5 float-right">
                    <i class="fa fa-plus"></i> New Collection
                </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>SERVICE</th>
                            <th>DATE</th>
                            <th>AMOUNT</th>
                            <th>GIVING CATEGORY</th>
                            <th>CREATED BY</th>
                          </tr>
                      </thead>
                        <tbody>
                            @foreach ($collections as $key=>$collection)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $collection->service->name }}</td>
                                    <td>{{ date('dS - F - Y', strtotime($collection->date)) }}</td>
                                    <td>Ksh. {{ number_format($collection->amount, 2, '.', ',') }}</td>
                                    <td>{{ $collection->category->name }}</td>
                                    <td>{{ $collection->user->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>				  
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>SERVICE</th>
                            <th>DATE</th>
                            <th>AMOUNT</th>
                            <th>GIVING CATEGORY</th>
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