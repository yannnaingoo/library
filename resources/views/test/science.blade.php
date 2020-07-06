@extends('backendtemplate')
@section('content')

	


<div class="container">
 <div class="row">
  	 @foreach ($books as $row)
  	<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  	
  <img class="card-img-top" src="{{asset($row->photo)}}" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">{{ $row->name }}</h5>
    <h5>{{$row->author->name}}</h5>
    <h3>{{$row->category->name}}</h3>
   
    <a href="#" data-toggle ="modal" data-target="#signinup"   class="btn btn-danger" >Borrow</a>
  </div>
</div>
 </div>

 @endforeach


</div>
</div>
@endsection