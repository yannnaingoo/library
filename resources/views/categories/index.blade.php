@extends('backendtemplate')
@section('content')
<div class="container">
<h2 class="d-inline-block">All Categories</h2>
<a href="{{route('categories.create')}}" class="btn btn-outline-success float-right">Add New</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Action</th>
				
</tr>
</thead>
	<tbody>
		@php
			$i =1;
		@endphp 
		@foreach($categories as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			
			<td>
				<a href="{{route('categories.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('categories.destroy',$row->id)}}" class="d-inline-block">
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



