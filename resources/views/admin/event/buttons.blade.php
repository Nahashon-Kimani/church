<div class="btn-group px-5 float-right text-uppercase">
    <a href="{{ route('admin.event.todays') }}" class="waves-effect waves-light btn btn-danger mb-5">Happening Today: {{ $todayEvents }}</a>
    <a href="{{ route('admin.event.upcoming') }}" class="waves-effect waves-light btn btn-danger mb-5">Upcoming: {{ $noOfUpcoming }}</a>
    <a href="{{ route('admin.event.archieve') }}" class="waves-effect waves-light btn btn-danger mb-5">Archieved: {{ $noOfArchieve }}</a>
    <a href="{{ route('admin.event.index') }}" class="waves-effect waves-light btn btn-danger mb-5">All: {{ $totalEvents }}</a>
    <a href="{{ route('admin.event.create') }}" class="waves-effect waves-light btn btn-danger mb-5"><i class="fa fa-plus"></i> Add new</a>
</div>