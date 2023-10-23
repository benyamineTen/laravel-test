@extends('admin.admin_dashboard')
@section('admin')



<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
						<div class="col">
							<div class="card radius-10 bg-gradient-deepblue">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white"> Total Client {{ $totalClients }}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-user fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
								
								
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">Total User {{ $totalUsers }}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
								
								</div>
							</div>
						</div>
						</div>
					</div><!--end row-->
			

					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">All Users</h5>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<hr>
							<div class="table-responsive">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr>
											<th>N</th>
											<th>Name</th>
											<th>Username</th>
											<th>Email-Adress</th>
											<th>Phone</th>
											<th>Role</th> 
										</tr>
									</thead>
	

							<tbody>
								@foreach($user as $key => $item)	
								
	<tr>
		<td> {{ $key+1 }} </td>				
		<td> <img src="{{ (!empty($item->photo)) ? url('upload/admin_images/'.$item->photo):url('upload/no_image.jpg') }}" class="user-img" alt="user avatar" > {{ $item->name }} </td>
		<td>{{ $item->username }}</td>
		<td>{{ $item->email }}</td>
		<td>{{ $item->phone }}</td>
		<td>
			
   <span class="badge badge-pill bg-danger">{{ $item->role }}</span>
			
		<td>
			<div class="badge rounded-pill bg-light-info text-info w-100"> 
				</div>
		</td>
	 
	</tr>
	
	@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

			</div>
            @endsection