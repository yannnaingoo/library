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

<!-- ----------------------- -->
<div   class="container">
  <form method="post" action= "{{route('books.update',$books->id)}}" enctype="multipart/form-data">
  @csrf
    @method('PUT')

                <div class="row">
    <div class="form-group col-md-6">
                  <label for="inputCourse">Choose Categories:</label>
                  <select name="categories" class="form-control" >
                    @foreach ($categories as $row)
                    <option value="{{$row->id}}" >{{$row->name}}</option>
                      @endforeach
                  </select>
    </div>
     <div class="form-group col-md-6">
                  <label for="inputCourse">Choose Authors:</label>
                  <select name="authors" class="form-control" >
                    @foreach ($authors as $row)
                    <option value="{{$row->id}}" >{{$row->name}}</option>
                      @endforeach
                  </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Update Book</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="updatebook" placeholder="New Book" id="new" value="{{$books->name}}"  >
    </div>
  </div>
  <!-- ----------------- -->

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="price" placeholder="Price" id="price" value="{{$books->price}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" name="photo" placeholder="Photo" id="photo" >

    </div>
  </div>
  <input type="text" name="oldphoto" value="{{$books->photo}}" hidden="hidden">


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      
        <textarea  name="description" type="text" class="form-control" placeholder="Description">  {{$books->description}}</textarea>
    </div>
  </div>
  <!-- ---------------- -->
  

   <button type="submit" class="btn btn-primary text" style="margin-left: 40%">Update</button>

</form>
</div>
</div>
<!-- ------------------- -->


@endsection 


     
