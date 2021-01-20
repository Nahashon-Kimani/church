@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 921px;">
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
        <form action="{{ route('admin.family.store') }}" method="POST" class="form">
          @csrf
            <div class="row">	
              <div class="col-xs-12 col-12">
                    <div class="box">
                      <div class="box-header with-border bt-5 text-uppercase bg-info">
                        <h4 class="box-title">Register New Family</h4>
                      </div>
                      <!-- /.box-header -->
                          <div class="box-body">
                              <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4>
                              <hr class="my-15">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Family Name</label>
                                    <input type="text" name="family_name" disabled class="form-control" placeholder="Family Name">
                                  </div>
                                  {{-- Family Head --}}
                                  <div class="form-group">
                                    <label>Family Head Name</label>
                                        <select name="head" class="form-control selects">
                                            @foreach ($members as $member)
                                                <option value="{{ $member->id }}">{{ $member->fullname }}</option>
                                            @endforeach
                                        </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea rows="5" name="address" class="form-control" placeholder="Physical Address"></textarea>
                                      </div>
                                </div>
                              </div>
                          </div>  
                    </div>
                    <!-- /.box -->			
              </div>
            </div>

            {{-- Family Contact Info --}}
            <div class="row">	
                <div class="col-xs-12 col-12">
                      <div class="box border-top bt-5 border-info">
                        <div class="box-header with-border text-uppercase">
                          <h4 class="box-title">Contact info</h4>
                        </div>
                        <!-- /.box-header -->
                            <div class="box-body">
                                <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Family Contact Info</h4>
                                <hr class="my-15">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Phone Number</label>
                                      <input name="phone" type="text"  class="form-control" placeholder="07123456789">
                                    </div>
                                    {{-- Family Head --}}
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email"  class="form-control" placeholder="name@mail.com">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Emergency Phone Number</label>
                                        <input type="text"  name="emergency" class="form-control" placeholder="07123456789">
                                      </div>
                                  </div>
                                </div>
                            </div>  
                      </div>
                      <!-- /.box -->			
                </div>
              </div>

              {{-- Family Other Information --}}
              <div class="row">	
                <div class="col-xs-12 col-12">
                      <div class="box border-top bt-5 border-info">
                        <div class="box-header with-border text-uppercase">
                          <h4 class="box-title">Other info</h4>
                        </div>
                        <!-- /.box-header -->
                            <div class="box-body">
                                <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Other Info</h4>
                                <hr class="my-15">
                                <div class="row">
                                  <div class="col-md-7">
                                    <div class="form-group">
                                      <label>Wedding Date</label>
                                      <input type="date" name="wedding_date"  class="form-control" placeholder="{{ date('dS-F-Y') }}">
                                    </div>
                                  </div>
                                </div>
                            </div> 
                            <div class="box-footer text-right">
								<a href="{{ route('admin.family.index') }}" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
                                </a>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div> 
                      </div>
                      <!-- /.box -->			
                </div>
              </div>


        </form>
      </section>
    </div>
</div>
@endsection