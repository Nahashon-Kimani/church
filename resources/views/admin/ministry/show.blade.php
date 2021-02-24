@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 889px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="btn-group mb-5 float-right">
            <button type="button" class="waves-effect waves-light btn btn-info dropdown-toggle" data-toggle="dropdown">ACTION</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('admin.ministry.index') }}">BACK</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('admin.ministry.edit', $ministry->id) }}">EDIT</a>
            </div>
          </div>

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

      <section class="content">
        <div class="row">	
            <div class="col-sm-9 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border text-center">
                    <div class="row">
                        
                    </div>
				  </div>
				  <div class="box-body">
                    <p class="h4 text-uppercase">Members in the Ministry</p>
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
                                  @foreach ($ministryMembers as $key=>$ministryMembers)
                                      <tr>
                                          <td>{{ $key + 1 }}</td>
                                          <td>
                                              <a href="{{ route('admin.members.show',$ministryMembers->member_id ) }}" target="_blank">
                                                {{ Str::ucfirst($ministryMembers->memberName->fullname) }}
                                            </a>
                                          </td>
                                          <td>{{ Str::ucfirst($ministryMembers->memberName->gender) }}</td>
                                          <td>
                                              <a href="tel:+{{ $ministryMembers->memberName->phonenumber }}">{{ $ministryMembers->memberName->phonenumber }}</a>
                                          </td>
                                          <td>{{ Str::ucfirst($ministryMembers->memberName->address) }}</td>
                                          <td>
                                              <a href="mailto:{{ $ministryMembers->memberName->email }}">{{ $ministryMembers->memberName->email }}</a>
                                          </td>
                                          <td>
                                              @if ($ministryMembers->status == 'Active')
                                                <div class="px-25 py-10 w-100"><span class="badge badge-success">{{ $ministryMembers->status }}</span></div>
                                              @else
                                                <div class="px-25 py-10 w-100"><span class="badge badge-danger">{{ $ministryMembers->status }}</span></div>
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
				  <div class="box-footer">
					<p class="lead text-uppercase text-center">members inside</p>
				  </div>
				</div>
              </div>
            
              {{-- other ministries --}}
              <div class="col-sm-3 col-12">
				<div class="box">
				  <div class="box-header bg-info with-border">
					<h4 class="box-title text-uppercase"><strong>Ministry list</strong></h4>
				  </div>
				  <div class="box-body">
					<div class="media-list media-list-hover media-list-divided">
                        @foreach ($minitries as $key=>$allMinistry)
                            <a class="media media-single" href="{{ route('admin.ministry.show', $allMinistry->id) }}">
                                <span class="badge badge-pill badge-danger-light">{{ $key + 1 }}</span>
                                <span class="title text-capitalize">{{ $allMinistry->name }} department</span>
                            </a>
                        @endforeach
					  </div>
				  </div>
				  <div class="box-footer">
					<p class="lead text-uppercase text-right">content inside</p>
				  </div>
				</div>
			  </div>
        </div>
      </section>

    </div>
</div>

<div id="ministryMember" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gradient-info-dark">
                <h4 class="modal-title text-uppercase text-white" id="myModalLabel">Add a new member</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.ministrymember.store') }}" method="POST" class="form">
                    @csrf
                    <input type="hidden" name="ministry" value="{{ $ministry->id }}">
                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                    <div class="form-group">
						<label>MEMBER NAME</label>
						<select name="member_id" class="form-control selects" style="width: 100%;">
                            @foreach ($members as $allMember)
                                <option value="{{ $allMember->id }}">{{ $allMember->fullname }} -> {{ $allMember->phonenumber }} -> {{ $allMember->address }}</option>
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