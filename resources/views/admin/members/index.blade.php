@extends('layouts.admin.app')
@section('pageTitle', 'Members Page')
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
				<div class="box-header with-border">
				  <h3 class="box-title">Hover Export Data Table</h3>
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Address</th>
								<th>Join Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($members as $key=>$member)
							<tr>
								<td>{{ $key + 1 }}</td>
								<td>{{ $member->fullname }}</td>
								<td>{{ $member->phonenumber }}</td>
								<td>{{ $member->email }}</td>
								<td>{{ $member->address }}</td>
								<td>{{ $member->join_date }}</td>
								<td>
									<a href=""><span class="glyphicon glyphicon-edit"></span>
					
								</td>
							</tr>
							@endforeach
						</tbody>				  
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Address</th>
								<th>Join Date</th>
								<th>Action</th>
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