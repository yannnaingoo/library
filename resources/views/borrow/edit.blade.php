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
<form method="post" action= "{{route('borrow.update',$borrow->id)}}">
  @csrf
  @method('PUT')
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">user_id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user_id" placeholder="user_id"value="{{$borrow->user_id}}" >
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">borrow_date</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="borrow_date" placeholder="borrow_date"value="{{$borrow->borrow_date}}" >
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">code_no</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="code_no" placeholder="code_no"value="{{$borrow->code_no}}" >
    </div>
  </div>
   <button type="submit" class="btn btn-primary text" >Save</button>

</form>
</div>
@endsection