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


<div class="modal fade" id="signinup" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">This Book is Currently on Loan with 10 patrons on the Wait List.</h5> <a href="" class="btn btn-danger ml-5" >Join Waitlist</a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            
          </div>
          <div class="col-8">
         
          </div>
          
        </div>
      </div>
     
    </div>
  </div>
</div>
@endsection