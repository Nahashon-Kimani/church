@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
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
              <div class="col-sm-9">
                    <div class="box">
                      <div class="box-header with-border bg-info">
                        <h4 class="box-title text-uppercase">Edit district</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('admin.district.update', $district->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                          <div class="box-body">
                              <h4 class="box-title text-info"><i class="ti-user mr-15"></i> District Name</h4>
                              <hr class="my-15">
                              {{-- Hidden created by --}}
                              <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                                  <div class="form-group">
                                    <label>District Name</label>
                                    <input name="name" value="{{ $district->name }}" type="text" class="form-control" placeholder="District Name">
                                  </div>
                              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Decon in charge</h4>
                              <hr class="my-15">
                                  <div class="form-group">
                                    <label class="text-uppercase">Decon in charge</label>
                                    <select name="decon_in_charge" class="form-control selects">
                                      <option selected value="{{ $district->deacon_in_charge }}">{{ $district->deconInCharge->fullname }}</option>
                                      <option disabled>_______________________________</option>
                                        @foreach ($members as $member)
                                            <option value="{{ $member->id }}">{{ $member->fullname }}</option>
                                        @endforeach
                                    </select>
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
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection