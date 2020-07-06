@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<h2 class="d-inline-block">All books</h2>
<a href="{{route('books.create')}}" class="btn btn-outline-success float-right">Add New</a>

	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Author</th>
				<th>Categories</th>
				<th>Price</th>
				<!-- <th>Image</th>
				<th>Description</th> -->
				<th>Qty</th>
				<th>Loan Qty</th>
				<th>Action</th>
				
</tr>
</thead>
	<tbody>
		@php
			$i =1;

		@endphp 
		@foreach($books as $row)
		<tr>
			@php
				$qty=$row->borrowdetail;
				$rent_qty=count($qty);
			@endphp
			
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->author->name}}</td>
			<td>{{$row->category->name}}</td>
			<td>{{$row->price}}</td>


			<!-- <td><img src="{{asset($row->photo)}}" class="img-fluid" style="width: 50px;height: 50px"></td> -->
				<!-- <td>{{$row->description}}</td> -->
				@php
			   $q = 0;
		       @endphp 
				
				@foreach ($row->qties as $zz)
				@php
		        $q+= $zz->qty
		        @endphp
				@endforeach

			<td>{{$q}}</td>
			<td>{{$rent_qty}}</td>
			<td>
				<a href="{{route('books.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('books.destroy',$row->id)}}" class="d-inline-block">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete
						
					</button>

				</form>
				<a href="{{route('books.show',$row->id)}}" class="btn btn-info" >Detail</a>
				
			</td>
</tr>
		@endforeach

</tbody>



	</table>
	<!-- ----------- -->
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel" style="padding-left: 40%;color: red;">Book Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Card -->
 
<div class="card promoting-card">

  <!-- Card content -->

  <div class="card-body d-flex flex-row">

    <!-- Avatar -->


    <!-- Content -->
    <div>

      <!-- Title -->
      <h4 class="card-title font-weight-bold mb-2">{{$row->name}}</h4>
      <!-- Subtitle -->
      <p class="card-text"><i class="far fa-clock pr-2"></i>{{$row->category->name}}</p>
      <p class="card-text">Book by:  <span>{{$row->author->name}}</span></p>

    </div>

  </div>

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top rounded-0" src="{{asset($row->photo)}}" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

      <!-- Text -->
      <p >{{$row->description}}</p>
      <!-- Button -->
    


  </div>

</div>
<!-- Card -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>


@endsection



