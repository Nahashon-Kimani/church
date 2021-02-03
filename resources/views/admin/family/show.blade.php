@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Badges</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">UI</li>
                              <li class="breadcrumb-item active" aria-current="page">Badges</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {{-- Initial Name --}}
              <div class="col-sm-2">
                <div class="box box-inverse box-info rounded p-15 h-200 bg-danger bg-bubbles-dark">
                    <div class="box-header">
                      <h4 class="box-title"><strong>{{ $family->member->fullname }} Family</strong></h4>
                    </div>
  
                    <div class="box-body">
                     <h1 class="h1 text-white text-center text-lg display-1 text-uppercase">
                        <strong> F</strong>
                     </h1>
                    </div>
                  </div>
              </div>

              {{-- Center bar --}}
              <div class="col-sm-6 text-center">
                <div class="box">
                    <div class="box-body">
                      <h4 class="box-title text-uppercase mb-5">Family Actions</h4>
                        <div class="clearfix">
                            <button type="button" class="waves-effect waves-light btn btn-info-light mb-5 btn-lg"><i class="far fa-hand-point-left"></i> Family</button>
                            <a href="{{ route('admin.family.index') }}" class="waves-effect waves-light btn btn-danger-light mb-5 btn-lg"><i class="fas fa-list"></i> Family List</a>
                            <button type="button" class="waves-effect waves-light btn btn-success-light mb-5 btn-lg"><i class="far fa-hand-point-right"></i> Family</button>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <a href="{{ route('admin.family.create') }}" class="waves-effect waves-light btn btn-info-light mb-5 btn-lg"><i class="far fa-hand-point-left"></i><br> New</a>
                            <button type="button" class="waves-effect waves-light btn btn-success-light mb-5 btn-lg"><i class="fas fa-list"></i><br> Edit</button>
                            <button type="button" class="waves-effect waves-light btn btn-warning-light mb-5 btn-lg"><i class="far fa-hand-point-right"></i><br>Deactivate</button>
                            <button type="button" class="waves-effect waves-light btn btn-danger-light mb-5 btn-lg"><i class="fas fa-list"></i><br>Delete</button>
                        </div>
                    </div>
                </div>
              </div>
              {{-- Family list, limit is 7 --}}
              <div class="col-sm-4">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title text-uppercase">newest families</h4>
                        <ul class="box-controls pull-right d-md-flex d-none">
                          <li>
                            <a href="{{ route('admin.family.index') }}" class="btn btn-primary-light px-10">View All</a>
                          </li>
                        </ul>
                    </div>
                    <div class="box-body">
                        @foreach ($families as $familyList)
                            <div class="box mb-15 pull-up">
                                <div class="box-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-15 bg-warning h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Book-open font-size-24"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column font-weight-500">
                                                <a href="#" class="text-dark hover-primary mb-1 font-size-16">{{ $familyList->id }}</a>
                                                <span class="text-fade">{{ $familyList->member->fullname }}, {{ date('dS - F - Y', $familyList->date_created) }}</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('admin.family.show', $familyList->id) }}">
                                            <span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
              </div>
          </div>
          {{-- Second Row --}}
          <div class="row">
              {{-- Address --}}
              <div class="col-sm-5">
                <div class="box"> {{-- bt-5 border-danger border-top--}}
                    <div class="box-header bg-info with-border">
                      <h4 class="box-title text-center text-uppercase">Family <strong>Address</strong></h4>
                    </div>
                    <div class="box-body">
                        <p class="h5">Physical Location {{ $family->address }}</p>
                    </div>
                    <div class="box-footer">
                      <p>A footer for more content inside</p>
                    </div>
                  </div>
              </div>
              {{-- Second Part --}}
          </div>
          
          {{-- Family Members --}}
          <div class="row">
              <div class="col-12">
                <div class="box bt-5 border-danger border-top">
                    <div class="box-header rounded p-15 h-70 bg-danger bg-bubbles-dark with-border">
                      <h3 class="box-title text-uppercase text-white">{{ $family->member->fullname }} Family Members</h3>
                      <button type="button" class="btn bg-primary-light px-5 text-uppercase float-right" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus"></i> New Member</button>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>TELEPHONE</th>
                                    <th>EMAIL</th>
                                    <th>DATE JOINED</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($collection as $item)
                                    
                                @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>TELEPHONE</th>
                                    <th>EMAIL</th>
                                    <th>DATE JOINED</th>
                                </tr>
                            </tfoot>
                          </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gradient-info-dark">
                <h4 class="modal-title text-white" id="myModalLabel">Medium model</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ route('admin.family-member.store') }}" method="POST" class="form">
                <input type="hidden" name="family_id" value="{{ $family->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Member Name</label>
                                <select name="member_id" class="form-control mySelect2">
                                    @foreach ($members as $member)
                                        <option value="{{ $member->id }}">{{ $member->fullname }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
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