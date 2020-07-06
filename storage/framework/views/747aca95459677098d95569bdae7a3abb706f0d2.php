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
<!-- <?php echo e($members); ?> -->
<!-- <?php echo e($members); ?> -->
<form method="post" action= "<?php echo e(route('borrow.store')); ?>">
  <?php echo csrf_field(); ?>
  
  <div class="form-group row">
     <select name ="member" class="myselect form-control"  id="member">
    <option class="choose one">Choose Member</option>
     <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($row->user->id); ?>"><?php echo e($row->user->name); ?></option>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select> 
    
  </div>
 <div class="form-group row">
   <select class="js-example-basic-multiple form-control"  name="states[]" multiple="multiple">
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php
       $total=0;
        $qty=$row->borrowdetail;
        $rent_qty=count($qty);
        $qties = $row->qties;
        foreach($qties as $q)
        {
          $total+=$q->qty;
        }
        
    ?>

    <?php if($total>$rent_qty): ?>
      <option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
   
     </div>

   
  
   <button type="submit" class="btn btn-primary text" >Save</button>

</form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
      $(document).ready(function(){
      $(".myselect").select2();
      // -------------------------------
      $('.js-example-basic-multiple').select2();
       
    
   

       // -------------------------------

      })
// -----------------------------------
      
 

     

   
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yannaing/Desktop/Library/resources/views/borrow/create.blade.php ENDPATH**/ ?>