<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Admin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

					<li>
					<a href="{{route('admin.dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">Client</div>
					</a>
					<ul>
					
						<li> <a href="{{ route('all.client') }}"><i class="bx bx-right-arrow-alt"></i>All client</a>
						</li>
					
						<li> <a href="{{ route('add.client') }}"><i class="bx bx-right-arrow-alt"></i>Add client</a>
						</li>
						
						 
					</ul>
				</li>
	
	
	<li class="menu-label">Roles And Permission</li>
	<li>
		<a class="has-arrow" href="javascript:;">
			<div class="parent-icon"><i class="lni lni-users"></i>
			</div>
			<div class="menu-title">Role & Permission</div>
		</a>
		<ul>
			<li> <a href="{{ route('all.permission') }}"><i class="bx bx-right-arrow-alt"></i>All Permission</a>
			</li>
			<li> <a href="{{ route('all.roles') }}"><i class="bx bx-right-arrow-alt"></i>All Roles</a>
			</li>
			<li> <a href="{{ route('all.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>All Roles in Permission</a>
			</li>
		 
		</ul>
	</li>

				 
	<li>
		<a class="has-arrow" href="javascript:;">
			<div class="parent-icon"><i class="lni lni-user"></i>
			</div>
			<div class="menu-title">Admin Manage </div>
		</a>
		<ul>
			<li> <a href="{{ route('all.admin') }}"><i class="bx bx-right-arrow-alt"></i>All Admin</a>
			</li>
			<li> <a href="{{ route('add.admin') }}"><i class="bx bx-right-arrow-alt"></i>Add Admin</a>
			</li>

		 
		</ul>
	</li>
			</ul>
			<!--end navigation-->
		</div>