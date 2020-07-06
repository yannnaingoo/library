<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-6">

<div class="card promoting-card " style="padding-left: 25%">

  <!-- Card content -->

  <div class="card-body d-flex flex-row">

    <!-- Avatar -->


    <!-- Content -->
    <div>

      <!-- Title -->
      <h4 class="card-title font-weight-bold mb-2"><?php echo e($row->name); ?></h4>
      <!-- Subtitle -->
      <p class="card-text"><i class="far fa-clock pr-2"></i><?php echo e($row->category->name); ?></p>
      <p class="card-text">Book by:  <span><?php echo e($row->author->name); ?></span></p>

    </div>

  </div>

  <!-- Card image -->
  <div class="view overlay">
    <img class="img-fluid rounded-0" style="max-width: 300px;" src="<?php echo e(asset($row->photo)); ?>" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

 

</div>

</div>
<div class="col-lg-6">
  
<div class="card promoting-card " style="padding-left: 25%; padding-top: 22%;">

  <!-- Card content -->
<h1>Description</h1>
  
  <!-- Card content -->
  <div class="card-body  " style="max-width: 60%;">

      <!-- Text -->
      <p ><?php echo e($row->description); ?></p>
      <!-- Button -->
    


  </div>

</div>


</div>
</div>
<!-- Card -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yannaing/Desktop/Library/resources/views/books/show.blade.php ENDPATH**/ ?>