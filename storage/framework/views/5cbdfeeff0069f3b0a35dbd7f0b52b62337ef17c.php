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

<!-- ----------------------- -->
<div   class="container">
  <form method="post" action= "<?php echo e(route('books.update',$books->id)); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

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
    <label for="inputEmail3" class="col-sm-2 col-form-label">Update Book</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="updatebook" placeholder="New Book" id="new" value="<?php echo e($books->name); ?>"  >
    </div>
  </div>
  <!-- ----------------- -->

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="price" placeholder="Price" id="price" value="<?php echo e($books->price); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" name="photo" placeholder="Photo" id="photo" >

    </div>
  </div>
  <input type="text" name="oldphoto" value="<?php echo e($books->photo); ?>" hidden="hidden">


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      
        <textarea  name="description" type="text" class="form-control" placeholder="Description">  <?php echo e($books->description); ?></textarea>
    </div>
  </div>
  <!-- ---------------- -->
  

   <button type="submit" class="btn btn-primary text" style="margin-left: 40%">Update</button>

</form>
</div>
</div>
<!-- ------------------- -->


<?php $__env->stopSection(); ?> 


     

<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/finalproject/resources/views/books/edit.blade.php ENDPATH**/ ?>