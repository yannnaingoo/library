 
<?php $__env->startSection('content'); ?>

<div class="container">
 <div class="row">
  	 <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  	
  <img class="card-img-top" src="<?php echo e(asset($row->photo)); ?>" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title"><?php echo e($row->name); ?></h5>
    <h5><?php echo e($row->author->name); ?></h5>
    <h3><?php echo e($row->category->name); ?></h3>
   
    <a href="#" data-toggle ="modal" data-target="#signinup"   class="btn btn-danger" >Borrow</a>
  </div>
</div>
 </div>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/finalproject/resources/views/test/index.blade.php ENDPATH**/ ?>