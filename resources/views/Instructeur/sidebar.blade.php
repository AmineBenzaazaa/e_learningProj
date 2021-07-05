<div class="left-side-menu left-side-menu-detached">
	<div class="leftbar-user">
		<a href="javascript: void(0);">
			<img src="uploads/user_image/placeholder.png" alt="user-image" height="42" class="rounded-circle shadow-sm">
						<span class="leftbar-user-name">Instructeur</span>
		</a>
	</div>

	<!--- Sidemenu -->
		<ul class="metismenu side-nav side-nav-light">

			<li class="side-nav-title side-nav-item">Navigation</li>
			
			<li class="side-nav-item">
				<a href="{{url('Instructeur/Dashboard')}}" class="side-nav-link active">
					<i class="dripicons-archive"></i>
					<span>Dashboard</span>
				</a>
			</li>
			
			<li class="side-nav-item">
				<a href="{{route('courses.index')}}" class="side-nav-link active">
					<i class="dripicons-archive"></i>
					<span>Courses</span>
				</a>
			</li>
			<li class="side-nav-item">
				<a href="{{url('Instructeur/instructor_revenue')}}" class="side-nav-link ">
					<i class="dripicons-media-shuffle"></i>
					<span>Instructor Revenue</span>
				</a>
			</li>

			<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link ">
				<i class="dripicons-toggles"></i>
				<span> Settings </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level collapse" aria-expanded="false">
				<li class="">
					<a href="{{url('user/profile')}}">User Settings</a>
				</li>
			</ul>
		</li>
	    </ul>
</div>