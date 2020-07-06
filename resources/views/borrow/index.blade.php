@extends('backendtemplate')
@section('content')
<div class="container">
<h2 class="d-inline-block">All Borrows</h2>
<a href="{{route('borrow.create')}}" class="btn btn-info float-right">Add New</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>name</th>
				<th>borrow_date</th>
				<th>Action</th>
			
				
</tr>
</thead>
	<tbody>
		@php
			$i =1;
		@endphp 
		@foreach($borrow as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->user->name}}</td>
			<td>{{$row->borrow_date}}</td>
		
			
			<td>
				
				<a href="{{route('borrow.show',$row->code_no)}}" class="btn btn-warning">Detail</a>
				
				
			</td>
</tr>
		@endforeach

</tbody>



	</table>
</div>

@endsection



