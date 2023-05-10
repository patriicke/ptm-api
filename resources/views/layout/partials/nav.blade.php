<?php error_reporting(0);?>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"> 
					<span>Main Menu</span>
				</li>



				{{-- @if(Auth::check()) --}}
				@if(Auth::user()->type == 'superadmin' )

				<li class="submenu <?php if($page=="admins" || $page=="admins-grid" || $page=="admin-details" || $page=="add-admin" || $page=="edit-admin") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="admin" || $page=="admin-grid") { echo 'active'; } ?>" href="{{url('admins')}}">Admin  List</a></li>
						<li><a class="<?php if($page=="add-admin") { echo 'active'; } ?>" href="{{url('add-admin')}}" >Admin Add</a></li>
						{{-- <li><a class="<?php if($page=="admin-details") { echo 'active'; } ?>" href="{{url('parent-details')}}">Parents  View</a></li> --}}
					</ul>
				</li>
				@endif
				@if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin')
				<li class=" <?php if($page=="dashboard" || $page=="teacher-dashboard") { echo 'active'; } ?>">
					<a  class="<?php if($page=="dashboard") { echo 'active'; } ?>" href="{{url('dashboard')}}"><i class="feather-grid"></i> <span> Home</span> </a>
				</li>
				<li class="submenu <?php if($page=="parents" || $page=="parents-grid" || $page=="parent-details" || $page=="add-parent" || $page=="edit-parent") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-user"></i> <span> Parents </span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="parents" || $page=="parent-grid") { echo 'active'; } ?>" href="{{url('parents')}}">Parents  List</a></li>
						<li><a class="<?php if($page=="add-parent") { echo 'active'; } ?>" href="{{url('add-parent')}}" >Parent Add</a></li>
						{{-- <li><a class="<?php if($page=="parent-details") { echo 'active'; } ?>" href="{{url('parent-details')}}">Parents  View</a></li> --}}
					</ul>
				</li>
				<li class="submenu <?php if($page=="teachers" || $page=="teachers-grid" || $page=="teacher-details" || $page=="add-teacher" || $page=="edit-teacher") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="teachers" || $page=="teachers-grid") { echo 'active'; } ?>" href="{{url('teachers')}}">Teacher List</a></li>
						<li><a class="<?php if($page=="add-teacher") { echo 'active'; } ?>" href="{{url('add-teacher')}}" >Teacher Add</a></li>
						{{-- <li><a class="<?php if($page=="teacher-details") { echo 'active'; } ?>" href="{{url('teacher-details')}}" >Teacher Details</a></li> --}}
						{{-- <li><a class="<?php if($page=="teacher-details") { echo 'active'; } ?>" href="{{url('teacher-details')}}">Teacher View</a></li> --}}
						{{-- <li><a class="<?php if($page=="add-teacher") { echo 'active'; } ?>" href="{{url('add-teacher')}}">Teacher Add</a></li>
						<li><a class="<?php if($page=="edit-teacher") { echo 'active'; } ?>" href="{{url('edit-teacher')}}">Teacher Edit</a></li> --}}
					</ul>
				</li>
				<li class="submenu <?php if($page=="news" || $page=="news-grid" || $page=="news-details" || $page=="add-news" || $page=="edit-news") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> News</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="news" || $page=="news-grid") { echo 'active'; } ?>" href="{{url('news')}}">News List</a></li>
						<li><a class="<?php if($page=="add-news") { echo 'active'; } ?>" href="{{url('add-news')}}" >News Add</a></li>
						{{-- <li><a class="<?php if($page=="news-details") { echo 'active'; } ?>" href="{{url('news-details')}}" >News Details</a></li> --}}
						{{-- <li><a class="<?php if($page=="news-details") { echo 'active'; } ?>" href="{{url('news-details')}}">Teacher View</a></li> --}}
						{{-- <li><a class="<?php if($page=="add-news") { echo 'active'; } ?>" href="{{url('add-news')}}">Teacher Add</a></li>
						<li><a class="<?php if($page=="edit-news") { echo 'active'; } ?>" href="{{url('edit-news')}}">Teacher Edit</a></li> --}}
					</ul>
				</li>
				<li class="submenu <?php if($page=="students" || $page=="students-grid" || $page=="student-details" || $page=="add-student" || $page=="edit-student") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="students" || $page=="students-grid") { echo 'active'; } ?>" href="{{url('students')}}">Student List</a></li>
						<li><a class="<?php if($page=="add-student") { echo 'active'; } ?>" href="{{url('add-student')}}" >Student Add</a></li>
						{{-- <li><a class="<?php if($page=="student-details") { echo 'active'; } ?>" href="{{url('student-details')}}" >Student Details</a></li> --}}

						{{-- <li><a class="<?php if($page=="student-details") { echo 'active'; } ?>" href="{{url('student-details')}}">Student View</a></li> --}}
						{{-- <li><a class="<?php if($page=="add-student") { echo 'active'; } ?>" href="{{url('add-student')}}">Student Add</a></li>
						<li><a class="<?php if($page=="edit-student") { echo 'active'; } ?>" href="{{url('edit-student')}}">Student Edit</a></li> --}}
					</ul>
				</li>
				
				<li class="submenu <?php if($page=="principles" || $page=="add-principle" || $page=="edit-principle") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-building"></i> <span> Principles </span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="principles") { echo 'active'; } ?>" href="{{url('principles')}}">Principles  List</a></li>
						<li><a class="<?php if($page=="add-principle") { echo 'active'; } ?>" href="{{url('add-principle')}}" >Principles  Add</a></li>
						{{-- <li><a class="<?php if($page=="edit-principle") { echo 'active'; } ?>" href="{{url('edit-principle')}}">principles  Edit</a></li> --}}
					</ul>
				</li>
				<li class="submenu <?php if($page=="schools" || $page=="add-school" || $page=="edit-school") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-book-reader"></i> <span> Schools</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="schools") { echo 'active'; } ?>" href="{{url('schools')}}">School List</a></li>
						<li><a class="<?php if($page=="add-school") { echo 'active'; } ?>" href="{{url('add-school')}}">School Add</a></li>
						{{-- <li><a class="<?php if($page=="edit-school") { echo 'active'; } ?>" href="{{url('edit-school')}}">School Edit</a></li> --}}
					</ul>
				</li>	
				@endif

				@if(Auth::user()->type == 'principle')
				<li class=" <?php if($page=="teacher-dashboard" || $page=="principle-dashboard") { echo 'active'; } ?>">
					<a  class="<?php if($page=="principle-dashboard") { echo 'active'; } ?>" href="{{url('principle-dashboard')}}"><i class="feather-grid"></i> <span> Home</span> </a>
				</li>
				<li class="submenu <?php if($page=="teachers" || $page=="teachers-grid" || $page=="teacher-details" || $page=="add-teacher" || $page=="edit-teacher") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="teachers" || $page=="teachers-grid") { echo 'active'; } ?>" href="{{url('teachers')}}">Teacher List</a></li>
						<li><a class="<?php if($page=="add-teacher") { echo 'active'; } ?>" href="{{url('add-teacher')}}" >Teacher Add</a></li>
						{{-- <li><a class="<?php if($page=="teacher-details") { echo 'active'; } ?>" href="{{url('teacher-details')}}">Teacher View</a></li> --}}
						{{-- <li><a class="<?php if($page=="add-teacher") { echo 'active'; } ?>" href="{{url('add-teacher')}}">Teacher Add</a></li>
						<li><a class="<?php if($page=="edit-teacher") { echo 'active'; } ?>" href="{{url('edit-teacher')}}">Teacher Edit</a></li> --}}
					</ul>
				</li>
				<li class="submenu <?php if($page=="students" || $page=="students-grid" || $page=="student-details" || $page=="add-student" || $page=="edit-student") { echo 'active'; } ?>">
					<a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="<?php if($page=="students" || $page=="students-grid") { echo 'active'; } ?>" href="{{url('students')}}">Student List</a></li>
						<li><a class="<?php if($page=="add-student") { echo 'active'; } ?>" href="{{url('add-student')}}" >Student Add</a></li>
						{{-- <li><a class="<?php if($page=="student-details") { echo 'active'; } ?>" href="{{url('student-details')}}">Student View</a></li> --}}
						{{-- <li><a class="<?php if($page=="add-student") { echo 'active'; } ?>" href="{{url('add-student')}}">Student Add</a></li>
						<li><a class="<?php if($page=="edit-student") { echo 'active'; } ?>" href="{{url('edit-student')}}">Student Edit</a></li> --}}
					</ul>
				</li>
				@endif
			
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->
