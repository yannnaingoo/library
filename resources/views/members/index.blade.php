@extends('backendtemplate')
@section('content')



<div class="container">
<h2 class="d-inline-block">Member List</h2>
<a href="{{route('members.create')}}" class="btn btn-outline-success float-right">Add member</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Action</th>
				
</tr>
</thead>
	<tbody>
		@php
			$i =1;
		@endphp 
		@foreach($members as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->user->name}}</td>
			<td>{{$row->user->email}}</td>
			<td>{{$row->phone}}</td>
			
			<td>{{$row->address}}</td>

			
			<td>
				<a href="{{route('members.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('members.destroy',$row->id)}}" class="d-inline-block">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete
						
					</button>

				</form>
				
			</td>
</tr>
		@endforeach

</tbody>



	</table>
</div>









@endsection