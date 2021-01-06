 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				{{-- if admin is login in --}}
				@if(Request::is('admin*'))	
				<li class="header">Dashboard</li>
				<li class="treeview">
					<a href="#">
					  <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
					  <span>HOME</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{ route('admin.dashboard') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>HOME</a></li>
					</ul>
				  </li>
				<li class="treeview">
					<a href="#">
					  <i class="fa fa-calendar"><span class="path1"></span><span class="path2"></span></i>
					  <span>CALENDAR</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{ route('admin.calendar') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>TODAY</a></li>
					</ul>
				  </li>
				<li class="treeview">
				  <a href="#">
					<i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
					<span>COLLECTIONS</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>TODAY</a></li>
					<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>MONTH</a></li>
					<li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>QUARTELY</a></li>
					<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>MID YEAR</a></li>
					<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ANNUALLY</a></li>
				  </ul>
				</li>
				{{-- <li class="header">Components & UI </li> --}}
				<li class="treeview">
				  <a href="#">
					<i class="icon-Write"><span class="path1"></span><span class="path2"></span></i>
					<span>EVENTS</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  	<ul class="treeview-menu">
						<li><a href="{{ route('admin.event.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ALL</a></li>
						<li><a href="{{ route('admin.event.upcoming') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>UP COMMING</a></li>
						<li><a href="{{ route('admin.event.archieve') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ARCHIVE</a></li>
					</ul>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>ANNOUNCEMENTS</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">
					<li><a href="{{ route('admin.announcement.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ALL</a></li>
					<li><a href="{{ route('admin.announcement.upcoming') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>UP COMMING</a></li>
					<li><a href="{{ route('admin.announcement.archive') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ARCHIVE</a></li>
				</ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
					<span>FAMILIES</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				</li> 
				<li class="header">SETTINGS</li>				 
				<li class="treeview">
				  <a href="#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span>SETTINGS</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{ route('admin.service.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CHURCH SERVICES</a></li>
					<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ROLES </a></li>
					<li><a href="{{ route('admin.district.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>DISTRICTS</a></li>
					<li><a href="{{ route('admin.theme.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>THEMES </a></li>
					<li><a href="{{ route('admin.ministry.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>MINISTRIES </a></li>
				  </ul>
				</li> 
				<li class="header">COMMUNICATION</li>				 
				<li class="treeview">
				  <a href="#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span>COMMUNICATION</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>EMAIL</a></li>
					<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>SMS </a></li>
					{{-- <li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>DISTRICTS</a></li> --}}
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					<span>REPORTS</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				</li>
				@endif 	 
				
				{{-- if church member is login --}}
				@if(Request::is('members*'))
				<li class="treeview">
					<a href="#">
					  <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					  <span>MEMBER </span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
				  </li>
				  <li class="treeview">
					<a href="#">
					  <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					  <span>MEMBER</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
				  </li>
				  <li class="treeview">
					<a href="#">
					  <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					  <span>MEMBER</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
				  </li>	
				@endif
			  </ul>
		  </div>
		</div>
    </section>
	<div class="sidebar-footer">
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
		<a href="mailbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><span class="icon-Mail"></span></a>
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>