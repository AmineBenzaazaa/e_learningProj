<div div="" class="left-side-menu left-side-menu-detached active">
	<div class="leftbar-user active">
		<a href="javascript: void(0);">
			<img src="http://pn-learning-management-system-online.test/uploads/user_image/placeholder.png" alt="user-image" height="42" class="rounded-circle shadow-sm">
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
				<a href="{{url('admin/categories')}}" class="side-nav-link " aria-expanded="false">
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
				<a href="{{url('admin/students')}}" class="side-nav-link " aria-expanded="false">
					<i class="dripicons-user-group"></i>
					<span>Students</span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="javascript: void(0);" class="side-nav-link " aria-expanded="false">
					<i class="dripicons-box"></i>
					<span> Report </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level collapse" aria-expanded="false">
					<li class=""> 
                    <a href="{{url('admin_revenue')}} ">Admin Revenue</a> </li>
						<li class="">
							<a href="{{url('instructor_revenue')}} ">
									Instructor Revenue <span class="badge badge-danger-lighten badge-pill">0</span>
							</a>
				        </li>
				</ul>
			</li>

			<li class="side-nav-item">
				<a href="{{url('message')}}" class="side-nav-link " aria-expanded="false">
					<i class="dripicons-message"></i>
					<span>Message</span>
				</a>
			</li>

			<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link " aria-expanded="false">
				<i class="dripicons-toggles"></i>
				<span> Settings </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level collapse" aria-expanded="false">
				<li class="">
					<a href="{{url('admin/system_settings')}}">System Settings</a>
				</li>
				<li class="">
					<a href="{{url('admin/frontend_settings')}}">Website Settings</a>
				</li>
				<li class="">
					<a href="{{url('admin/payment_settings')}}">Payment Settings</a>
				</li>
				<li class="">
					<a href="{{url('admin/instructor_settings')}}">Instructor Settings</a>
				</li>
				<li class="">
					<a href="{{url('admin/manage_language')}}">Language Settings</a>
				</li>
				<li class="">
					<a href="{{url('admin/smtp_settings')}}">Smtp Settings</a>
				</li>
				<li class="">
					<a href="{{url('admin/about')}}">About</a>
				</li>
			</ul>
		</li>
	    </ul>
</div>