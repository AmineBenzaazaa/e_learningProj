<div div="" class="left-side-menu left-side-menu-detached active">
	<div class="leftbar-user active">
		<a href="javascript: void(0);">
			<img src="{{ url('/uploads/user_image/placeholder.png') }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
			<span class="leftbar-user-name">admin admin</span>
		</a>
	</div>
	<!--- Sidemenu -->
	<ul class="metismenu side-nav side-nav-light in">
		<li class="side-nav-title side-nav-item">Navigation</li>
		<li class="side-nav-item active">
			<a href="{{url('dashboard')}}" class="side-nav-link active" aria-expanded="false">
				<i class="dripicons-view-apps"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="side-nav-item">
			<a href="{{route('categories.index')}}" class="side-nav-link " aria-expanded="false">
				<i class="dripicons-network-1"></i>
				<span>Categories</span>
			</a>
		</li>

		<li class="side-nav-item">
			<a href="{{url('admin/courses')}}" class="side-nav-link " aria-expanded="false">
				<i class="dripicons-archive"></i>
				<span>Courses</span>
			</a>
		</li>
		<li class="side-nav-item">
			<a href="{{route('students.index')}}" class="side-nav-link " aria-expanded="false">
				<i class="dripicons-user-group"></i>
				<span>Students</span>
			</a>
		</li>

		<li class="side-nav-item">
			<a href="{{url('admin/admin_revenue')}}" class="side-nav-link " aria-expanded="false">
				<i class="dripicons-box"></i>
				<span>Admin Revenue</span>
			</a>
		</li>

		<li class="side-nav-item">
			<a href="{{url('message')}}" class="side-nav-link " aria-expanded="false">
				<i class="dripicons-message"></i>
				<span>Message</span>
			</a>
		</li>

		<li class="side-nav-item">
			<a href="{{url('user/profile')}}" class="side-nav-link " aria-expanded="false">
				<i class="dripicons-toggles"></i>
				<span>Settings</span>
			</a>
		</li>


	</ul>
</div>