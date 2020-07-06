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
<form method="post" action= "{{route('returns.store')}}">
  @csrf
       <div class="row">
    <div class="form-group col-md-6">
                  <label for="inputCourse">Choose Code:</label>
                  <select name="orders" class="form-control" >
                    @foreach ($books as $row)
                    <option value="{{$row->id}}" >{{$row->name}}</option>
                      @endforeach
                  </select>
    </div>
  
  </div>
    <button type="submit" class="btn btn-primary text" >Save</button>

</form>
</div>
@endsection