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
                  <div class="box-header text-center bg-info with-border">
                    <div class="row">
                      <div class="col-sm-4">
                        {{-- <h3 class="box-title text-uppercase mb-5"><u>{{ $district->name }} Member List</u></h3><br><br>
                    <h3 class="box-title text-uppercase"> total members: <span class="badge badge-danger">{{ $memberNo }}</span></h3>
                    <button type="button" class="btn btn-danger px-5 text-uppercase float-right" data-toggle="modal" data-target="#myModal">
                      <i class="fa fa-plus"></i>  New Member
                    </button> --}}
                      </div>
                      {{-- Second Col --}}
                      <div class="col-sm-4">
                        <h3 class="box-title text-uppercase mb-5"><u>{{ $district->name }} Member List</u></h3><br><br>
                        <h3 class="box-title text-uppercase"> total members: {{ $memberNo }} {{-- <span class="badge badge-danger">{{ $memberNo }}</span> --}}</h3>
                      </div>
                      {{-- Third Col --}}
                      <div class="col-sm-4">
                        <p class="h4 text-uppercase">Member Actions</p>
                        <div class="btn-group">
                          <button type="button" class="waves-effect waves-light btn text-white btn-outline-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> New</button>
                          <button type="button" class="waves-effect waves-light btn text-white btn-outline-danger">Active</button>
                          <button type="button" class="waves-effect waves-light btn text-white btn-outline-danger">Inactive</button>
                          <button type="button" class="waves-effect waves-light btn text-white btn-outline-danger">All</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>GENDER</th>
                          <th>TELEPHONE</th>
                          <th>ADDRESS</th>
                          <th>EMAIL</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($districtMembers as $key=>$member)
                              <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                  <a href="{{ route('admin.members.show', $member->member_id) }}" target="_blank">{{ $member->memberName->fullname }}</a>
                                </td>
                                <td>{{ Str::ucfirst($member->memberName->gender) }}</td>
                                <td><a href="tel:+{{ $member->memberName->phonenumber }}">{{ $member->memberName->phonenumber }}</a></td>
                                <td>{{ $member->memberName->address }}</td>
                                <td>
                                  @if ($member->memberName->email == null)
                                    <span class="badge badge-danger">None</span>
                                  @else
                                    <a href="mailto:{{ $member->memberName->email }}">{{ $member->memberName->email }}</a>
                                  @endif
                                </td>
                                <td>
                                  @if ($member->status == 'Active')
                                    <span class="badge badge-info">{{ $member->status }}</span>
                                  @else
                                    <span class="badge badge-danger">{{ $member->status }}</span>
                                  @endif
                                </td>
                              </tr>
                          @endforeach
                        </tbody>				  
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>GENDER</th>
                          <th>TELEPHONE</th>
                          <th>ADDRESS</th>
                          <th>EMAIL</th>
                          <th>STATUS</th>
                        </tr>
                      </tfoot>
                    </table>
                    </div>              
                  </div>
                  <!-- /.box-body -->
                  </div>	
              </div>  

              {{-- List of districts in the system --}}
              <div class="col-sm-3">
				<div class="box">
				  <div class="box-header with-border bg-info">
					<h4 class="box-title text-uppercase">District list</h4>
				  </div>
				  <div class="box-body">
					<div class="media-list media-list-hover media-list-divided">
                        @foreach ($districts as $key=>$district)
                            <a class="media media-single" href="{{ route('admin.district.show', $district->id) }}">
                                {{-- <i class="font-size-18 mr-0 flag-icon flag-icon-us"></i> --}}
                                <span class="badge badge-pill badge-warning-light">{{ $key + 1 }}</span>
						            <span class="title">{{ $district->name }} </span>
                                <span class="badge badge-pill badge-danger-light">159</span>
						    </a>
                        @endforeach
					  </div>
				  </div>
				  <div class="box-footer text-capitalize">
					<p>church management system</p>
				  </div>
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
      <div class="modal-header bg-gradient-info-dark text-white">
        <h4 class="modal-title text-uppercase" id="myModalLabel">Add new Member</h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form action="{{ route('admin.district-member.store') }}" method="POST" class="form">
        @csrf
        <input type="hidden" name="district_id" value="{{ $district->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="modal-body">
            <div class="form-group">
              <label>Member Name</label>
              <select name="member_id" class="form-control selects">
                @foreach ($members as $member)
                    <option value="{{ $member->id }}">{{ $member->fullname }}, Phone: {{ $member->phonenumber }}, DOB: {{ date('dS - F - Y', strtotime($member->birth_date)) }}</option>
                @endforeach
              </select>
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