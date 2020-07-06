@extends('backendtemplate')
@section('content')
<div class="container">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- {{$members}} -->
<!-- {{$members}} -->
<form method="post" action= "{{route('borrow.store')}}">
  @csrf
  
  <div class="form-group row">
     <select name ="member" class="myselect form-control"  id="member">
    <option class="choose one">Choose Member</option>
     @foreach ($members as $row)
    <option value="{{$row->user->id}}">{{$row->user->name}}</option>
   
    @endforeach
  </select> 
    
  </div>
 <div class="form-group row">
   <select class="js-example-basic-multiple form-control"  name="states[]" multiple="multiple">
    @foreach ($books as $row)

    @php
       $total=0;
        $qty=$row->borrowdetail;
        $rent_qty=count($qty);
        $qties = $row->qties;
        foreach($qties as $q)
        {
          $total+=$q->qty;
        }
        
    @endphp

    @if($total>$rent_qty)
      <option value="{{$row->id}}">{{$row->name}}</option>
    @endif
  @endforeach
   </select>
   
     </div>

   
  
   <button type="submit" class="btn btn-primary text" >Save</button>

</form>
</div>
@endsection

@section('script')
<script type="text/javascript">
      $(document).ready(function(){
      $(".myselect").select2();
      // -------------------------------
      $('.js-example-basic-multiple').select2();
       
    
   

       // -------------------------------

      })
// -----------------------------------
      
 

     

   
</script>

@endsection
