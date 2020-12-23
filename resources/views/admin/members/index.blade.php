@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">General Form Elements</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
			<div class="row">			  
				<div class="container">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample form 1</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-sm-4">
									<div class="form-group">
									  <label>First Name</label>
									  <input type="text" class="form-control" placeholder="First Name">
									</div>
									<div class="form-group">
									  <label>Last Name</label>
									  <input type="text" class="form-control" placeholder="Last Name">
									</div>
									
									<div class="form-group">
									  <label >Prefered Name</label>
									  <input type="text" class="form-control" placeholder="E-mail">
									</div>
								  </div>

								
								
								<div class="col-sm-4">
									<h5>Gender</h5><br><br>
									<div class="form-group ichack-input">
										
							          
							            <input type="radio" name="r3" class="flat-red" checked>
							            <label>Male</label><br>
							         
							            <input type="radio" name="r3" class="flat-red">
							            <label>Female</label><br>
							         
							          <input type="radio" name="r3" class="flat-red" checked="">
							          <label>Unspecified</label>
							         
						            </div>
								  </div>
								
								
								  <div class="col-sm-4">
								  	<h5>Picture</h5><br><br>
									<div class="box">     
				                      <div class="box-body">
					                     
						                   <div class="fallback">
							               <input name="file" type="file" multiple />
						                   </div>
					                     
				                        </div>
			                          </div>
								  </div>
						    </div>	
							</div>
							<!-- /.box-body -->
							
						</form>
					  </div>
					  <!-- /.box -->			
				</div>  
		    </div>
		    <div class="row">			  
				<div class="container">
					  <div class="box">
						
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<h4 class="box-title text-info"><i class="ti-envelope mr-15"></i> Contact Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label>First Name</label>
									  <input type="text" class="form-control" placeholder="First Name">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Last Name</label>
									  <input type="text" class="form-control" placeholder="Last Name">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label >E-mail</label>
									  <input type="text" class="form-control" placeholder="E-mail">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label >Contact Number</label>
									  <input type="text" class="form-control" placeholder="Phone">
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info"><i class="ti-save mr-15"></i> Requirements</h4>
								<hr class="my-15">
								<div class="form-group">
								  <label>Company</label>
								  <input type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Interested in</label>
									  <select class="form-control">
										<option>Interested in</option>
										<option>design</option>
										<option>development</option>
										<option>illustration</option>
										<option>branding</option>
										<option>video</option>
									  </select>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Budget</label>
									  <select class="form-control">
										<option>Budget</option>
										<option>less than 5000$</option>
										<option>5000$ - 10000$</option>
										<option>10000$ - 20000$</option>
										<option>more than 20000$</option>
									  </select>
									</div>
								  </div>
								</div>
								<div class="form-group">
								  <label>Select File</label>
								  <label class="file">
									<input type="file" id="file">
								  </label>
								</div>
								<div class="form-group">
								  <label>About Project</label>
								  <textarea rows="5" class="form-control" placeholder="About Project"></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
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