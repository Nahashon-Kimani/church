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
              <div class="col-sm-12 col-12">
                    <div class="box">
                      <div class="box-header bg-info text-white with-border">
                        <h4 class="box-title">Sample form 1</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('admin.theme.update', $theme->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                          <div class="box-body">
                              <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Theme Info</h4>
                              <hr class="my-15">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>VERSE</label>
                                    <input type="text" value="{{ $theme->verse }}" name="verse" class="form-control" placeholder="Psalms 100:4-5 ">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label>SPIRITUAL YEAR</label>
                                    <input type="text" value="{{ $theme->spiritual_year }}" name="year" class="form-control" placeholder="{{ date('Y') }} / {{ date('Y')+1 }}">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label>SPIRITUAL YEAR</label>
                                    <select name="status" class="form-control selects">
                                      <option selected>Active</option>
                                      <option>Inactive</option>
                                      </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>VERSE NARRATION</label>
                                <textarea rows="5" name="narration" class="form-control" placeholder="Verse Narration">
                                  {{ $theme->narration }}
                                </textarea>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
                                <i class="ti-trash"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Update
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