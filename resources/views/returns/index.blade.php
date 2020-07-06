@extends('backendtemplate')
@section('content')
<div class="container">
<h2 class="d-inline-block">Return Lists</h2>

	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>User name</th>
				<th>Code no</th>
				<th>Return date</th>
				
			
				
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
			<td>{{$row->code_no}}</td>
			<td>{{$row->updated_at}}</td>
		
			
			
</tr>
		@endforeach

</tbody>



	</table>
</div>

@endsection



