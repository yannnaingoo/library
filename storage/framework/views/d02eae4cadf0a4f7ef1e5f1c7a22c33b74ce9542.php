<?php $__env->startSection('content'); ?>


<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<h2 style="padding-left: 40px">Update Member Information</h2>
<div class="card m-5">
  <h5 class="p-5"><u>Member Information:</u></h5>
  <div class="card-body">
    <div class="container-fluid">
  <form method="post" action="<?php echo e(route('members.update',$members->id)); ?>">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
    <div class="row">
          <div class="col">
            <label for>Member's Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo e($members->user->name); ?>" disabled="disabled">
          </div>
        </div>
        <input type="hidden" name="user_id" value="<?php echo e($members->user_id); ?>">



        <div class="row pt-3">
          
          <div class="col">
            <label for>Email:</label>
            <input type="email" class="form-control" placeholder="example@gmail.com" name="email" value="<?php echo e($members->user->email); ?>" disabled="disabled">
          </div>
        </div>

        <div class="row pt-3">
<!--          <div class="col">
            <label for>Date of Birth:</label>
            <input type="date" class="form-control" placeholder="dd/mm/yy" name="dob">
          </div> -->
          <div class="col">
            <label for>Phone</label>
            <input type="text" class="form-control" placeholder="" name="phone" value="<?php echo e($members->phone); ?>">
          </div>

        </div>
        <div class="pt-3">
          <label for="">Address:</label>
          <textarea type="text" class="form-control" id="InputAddress" name="address" ><?php echo e($members->address); ?></textarea>
        </div>
      

        <hr class="divider" style=" border-color: black">
         <button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
</form>
   
    </div>
  </div>
  
  
  
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/finalproject/resources/views/members/edit.blade.php ENDPATH**/ ?>