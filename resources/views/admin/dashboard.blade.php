@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper" style="min-height: 760px;">
    <div class="container-full">
        <section class="content">

            {{-- first row --}}
            <div class="row">
                {{-- Welcome section --}}
                <div class="col-sm-8">
					<div class="box pull-up">
						<div class="box-body bg-img bg-primary-light">
							<div class="d-lg-flex align-items-center justify-content-between">
								<div class="d-lg-flex align-items-center mb-30 mb-xl-0 w-p100">
									<img src="{{ asset('../eduadmin/assets/images/avatar2.png') }}" class="img-fluid max-w-250" alt="">
									<div class="ml-30">
										<h2 class="mb-10 text-capitalize">Welcome back, <strong>{{ Auth::user()->name }}</strong></h2>
                                        <p class="mb-0 text-fade font-size-18">Today Total Attendance {{ $totalAttendance }}.</p>
									</div>
								</div>
							</div>							
						</div>
					</div>
                </div>
                {{-- Today events section --}}
                <div class="col-sm-4 col-12">
					<div class="box pull-up">
                        @if ($todayEvents != 0)
                                @foreach ($events as $event)
                                <div class="box-body">	
                                    <div class="bg-info rounded">
                                        <h5 class="text-white text-center text-uppercase p-10">Title: {{ $event->title }}</h5>
                                    </div>
                                    <p class="mb-0 font-size-18">Venue: {{ $event->location }}</p>
                                    <p class="mb-0 font-size-18">Time: {{ date('h:i A', strtotime($event->time)) }}</p> 
                                    <div class="d-flex justify-content-between mt-30">
                                        <div>
                                            <p class="mb-0 text-fade">ASSIGNED TO</p>
                                            <p class="mb-0">{{ $event->user->name }}</p>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.event.show', $event->id) }}" class="btn btn-info">VIEW EVENT</a>
                                        </div>
                                    </div>								
                                </div>
                                @endforeach	
                        @else
                            <div class="box-body">	
                                <div class="bg-warning rounded">
                                    <h5 class="text-white text-center p-10 text-uppercase">No event today</h5>
                                </div>
                                <p class="mb-0 font-size-18">
                                    <a href="{{ route('admin.event.upcoming') }}"> view other upcoming events here</a>
                                </p>
                                <div class="d-flex justify-content-between mt-30">
                                    <div>
                                        <p class="mb-0 text-fade">Upcoming Events
                                            <span class="badge badge-pill badge-warning">{{ $upComingEvents }}</span>
                                        </p>
                                        {{-- <p class="mb-0">{{ $upComingEvents }}</p> --}}
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.event.upcoming') }}" class="btn btn-warning">UPCOMING EVENT</a>
                                    </div>
                                </div>								
                            </div>
                        @endif				
					</div>
				</div>
            </div>

            {{-- End of first row --}}

            {{-- Second row --}}
            <div class="row">
                {{-- Today Attendance --}}
                <div class="col-sm-5 col-12">
                    <h4 class="title text-uppercase">Services List</h4>	
                    <div class="row">						
                        @foreach ($services as $service)
                            <div class="col-sm-6">
                                <div>
                                    <div class="box bt-5 border-danger rounded pull-up">
                                        <div class="box-body">	
                                            <div class="flex-grow-1">	
                                                <div class="d-flex align-items-center pr-2 justify-content-between">							
                                                    
                                                    <h4 class="font-weight-500">
                                                        {{ $service->name }} 
                                                    </h4>						
                                                </div>
                                                <p class="h6 text-capitalize">
                                                     Today {{ date('d-m-Y')}} 
                                                    {{--from {{ date('h:i A', strtotime($service->start_time)) }} 
                                                    to {{ date('h:i A', strtotime($service->ending_time)) }} --}}
                                                </p>
                                            </div>							
                                            <div class="d-flex align-items-center justify-content-between mt-10">
                                                <div class="d-flex">
                                                    <a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                        <img src="{{ asset('../eduadmin/assets/images/avatar/avatar-1.png') }}" class="h-50 align-self-end" alt="">
                                                    </a>
                                                    <a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                        <img src="{{ asset('../eduadmin/assets/images/avatar/avatar-3.png') }}" class="h-50 align-self-end" alt="">
                                                    </a>
                                                    <a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                        <img src="{{ asset('../eduadmin/assets/images/avatar/avatar-4.png') }}" class="h-50 align-self-end" alt="">
                                                    </a>
                                                </div>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark text-uppercase">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>					
                                    </div>
                                </div>
                            </div>
                         @endforeach
                    </div>
                </div>
                {{-- church services --}}
                <div class="col-sm-7 col-12">
					<div class="box">
						<div class="box-header with-border">
                            <h4 class="box-title text-uppercase">Today Services Attendance: Total 
                                <span class="badge badge-pill badge-warning">{{ $totalAttendance }}</span>
                            </h4>
                        </div>
                        <div class="box-body px-0 pt-0 pb-10">
						  <div class="media-list media-list-hover">
                              @foreach ($services as $service)
                                <a class="media media-single" href="#">
                                    <h4 class="w-50 text-gray font-weight-500">{{ date('h:i A', strtotime($service->start_time)) }}</h4>
                                    <div class="media-body pl-15 bl-5 rounded border-primary">
                                    <p>{{ $service->name }}</p>
                                    <span class="text-fade">{{ date('h:i A', strtotime($service->ending_time)) }} (END) </span>
                                    </div>
                                    <hr>
                                </a>
                              @endforeach
						  </div>
						</div>
					</div>
                </div>
            </div>

        </section>
    </div>
</div>

@endsection