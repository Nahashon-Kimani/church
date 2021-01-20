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
              <div class="box-header with-border">
                <h3 class="box-title text-uppercase">Giving Category</h3>
                <button type="button" class="btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#myModal">
					<i class="fa fa-plus"></i> new Giving Category
				  </button>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>CREATED BY</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                          </tr>
                      </thead>
                       		<tbody>
                                @foreach ($categories as $key=>$category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->user->name }}</td>
                                        <td>{{ date('dS - F - Y', strtotime($category->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('admin.givingcategory.edit', $category->id) }}" class="btn btn-info px-5">
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
                            <th>CREATED BY</th>
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
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gradient-info-dark">
                <h4 class="modal-title text-uppercase text-white" id="myModalLabel">New Giving Category</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ route('admin.givingcategory.store') }}" method="POST" class="form">
                @csrf
                <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Giving Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder=" Name">
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection