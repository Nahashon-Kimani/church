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
          <div class="row">			  
              <div class="col-sm-12 col-12">
                    <div class="box">
                      <div class="box-header with-border bg-info">
                        <h4 class="box-title text-uppercase">Today Church Collections</h4>
                        {{-- <a href="{{ route('admin.collection.create') }}" class="btn btn-danger float-right px-5">
                            <i class="fa fa-plus"></i> New Collection
                        </a> --}}
                      </div>
                         <form action="{{ route('admin.collection.store') }}" method="POST" class="form">
                            @csrf
                            <div class="box-body">
                                <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4>
                                <hr class="my-15">
                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                                    <div class="form-group">
                                      <label>CHURCH SERVICE</label>
                                        <select name="service" class="form-control selects">
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>SERVICE DATE</label>
                                        <input name="date" type="date" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>AMOUNT</label>
                                        <input name="amount" type="text" class="form-control" placeholder="10, 000">
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>GIVING CATEGORY</label>
                                        <select name="category" class="form-control selects">
                                          @foreach ($givingCategories as $givingCategory)
                                              <option value="{{ $givingCategory->id }}">{{ $givingCategory->name }}</option>
                                          @endforeach
                                      </select>
                                      </div>
                                    </div>
                                  </div>
                            </div>  
   
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
    </div>
</div>
          
@endsection