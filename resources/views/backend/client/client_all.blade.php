@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">All Client</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Client</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
		<a href="{{ route('add.client') }}" class="btn btn-primary">Add Client</a> 				 
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				 
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
			<tr>
                <th>Numero</th>
				<th>Name</th>
				<th>Statut </th>
				<th>Contact Phone </th>
                <th>Contact whatsapp </th>
                <th>Email Adress </th>
				<th>Action</th> 
			</tr>
		</thead>
		<tbody>
            @foreach($client as $key => $item)
			<tr>
                <td> {{ $key+1 }} </td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->statut }}</td>
				<td>{{ $item->contact }}</td>
                <td>{{ $item->contact_whatsapp }}</td>
				<td>{{ $item->email_adress }}</td>
				
				
				<td>

<a href="{{ route('edit.client',$item->id) }}" class="btn btn-info">Edit</a>

<a href="{{ route('delete.client',$item->id) }}" class="btn btn-danger" id="delete" >Delete</a>


				</td> 
			</tr>
			@endforeach
			 
		 
		</tbody>
		<tfoot>
			<tr>
                <th>Numero</th>
				<th>Name</th>
				<th>Statut </th>
				<th>Contact Phone </th>
                <th>Contact whatsapp </th>
                <th>Email Adress </th>
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>
 

				 
			</div>




@endsection