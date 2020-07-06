<?php $__env->startSection('content'); ?>
<div class="container">
	<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<!-- ------------------- -->
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active old" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Add Old Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link new" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" >Add New Book</a>
  </li>
 
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

    
     <div class="form-group col-md-6" id="xx">
              
   <select name ="oldbook"class="myselect form-control"  id="book">
    <option class="choose one">Choose One</option>
     <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>   
   </div>
   <!-- ----- -->

<div style="display:none" id="old">
  <!-- -------------- -->
<!--   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Add New Book</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="newbook" placeholder="New Book" id="new" disabled="disabled" >
    </div>
  </div> -->
  <!-- ----------------- -->

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="price" placeholder="Price" id="price" disabled="disabled">
    </div>
  </div>

 <!--   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" name="photo" placeholder="Photo" id="photo">

    </div>
  </div> -->
  <!-- --------------------- -->
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Author</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="price" placeholder="Author" id="author" disabled="disabled" >
    </div>
  </div>
  <!-- --------------- -->
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="price" placeholder="Category" id="category" disabled="disabled" >
    </div>
  </div>
  


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="description" placeholder="Description" id = "description" disabled="disabled">
    </div>
  </div>
  <!-- -------------- -->

  <!-- ---------------- -->
 <!--  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Qty</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="qty" placeholder="Qty" >
    </div>
  </div>

   <button type="submit" class="btn btn-primary text" style="margin-left: 40%">Save</button> -->



  <form method="post" action= "<?php echo e(route('qty.store')); ?>">
  <?php echo csrf_field(); ?>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Add Qty</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="addqty" placeholder="Add Qty" >
    </div>
  </div>
  <input type="number" name="id" id="bookid" hidden="hidden">
   <button type="submit" class="btn btn-primary text" style="" >Add</button>
</div>
</form>
</div>
</div>
   <!-- ----- -->
 




  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

      <div id="new" class="container">
  <form method="post" action= "<?php echo e(route('books.store')); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>

                <div class="row">
    <div class="form-group col-md-6">
                  <label for="inputCourse">Choose Categories:</label>
                  <select name="categories" class="form-control" >
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->id); ?>" ><?php echo e($row->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
    </div>
     <div class="form-group col-md-6">
                  <label for="inputCourse">Choose Authors:</label>
                  <select name="authors" class="form-control" >
                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->id); ?>" ><?php echo e($row->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Book Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="newbook" placeholder="New Book" id="new"  >
    </div>
  </div>
  <!-- ----------------- -->

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="price" placeholder="Price" id="price" >
    </div>
  </div>

  <!-- ----------- -->
 

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" name="photo" placeholder="Photo" id="photo">

    </div>
  </div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      
      <textarea  name="description" type="text" class="form-control" placeholder="Description">  </textarea>
    </div>
  </div>
  <!-- ---------------- -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Qty</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="qty" placeholder="Qty" >
    </div>
  </div>

   <button type="submit" class="btn btn-primary text" style="margin-left: 40%">Save</button>

</form>
</div>

<!-- ------------------ -->
  </div>



  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">hhhbbbbbbb</div>
</div>

<!-- --------------------- -->

    <!-- --------------- -->
   



  
 

<!-- ------------------- -->


<?php $__env->stopSection(); ?> 
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
      $(document).ready(function(){
      $(".myselect").select2();
      // -------------------------------
        $('#new').prop('disabled',false);
        $('#book').change(function(){
      var cid = $(this).val();
      // alert(cid);
       
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.post("<?php echo e(route('books.search')); ?>",{id:cid},function(response){
        $('#new').prop('disabled',true);
        console.log(response);
        // var price=JSON.parse(response);
        // console.log(price);
        $("#old").show(500);
         $("#new").hide(500);
        var description;
        var html;
        var photo;
        var id;
       
        $.each(response,function(i,v){
          
          html = v.price;
          description=v.description;
          author = v.author.name;
          photo = v.photo;
          category =v.category.name;
          id=v.id;
         
         

        });

        $('#price').val(html);
        $('#description').val(description);
        $('#author').val(author);
        $('#category').val(category);

       
    
        $('#bookid').val(id);
      })
      // --------------

       // -------------------------------

      })
// -----------------------------------
      
        $('.new').click(function()
      {
        $("#new").show(500);
         $("#old").hide(500);
         $("#xx").hide(500);
      

      });

            $('.old').click(function()
      {
        $("#new").hide(500);
         $("#old").hide(500);
         $("#xx").show(500);
      

      });


    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yannaing/Desktop/Library/resources/views/books/create.blade.php ENDPATH**/ ?>