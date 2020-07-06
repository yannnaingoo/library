	
	<?php $__env->startSection('content'); ?>


	<!-- ----------- body start--------------- -->
	<div class="book">
		<div class="container-fluid">
			<div class="row py-5">
				<div class="col-lg-12 " align="center">
				

						<div class="col-lg-12 col-md-12 col-sm-12 pb-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<?php $__currentLoopData = $modern; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

											<?php
									$a ="avaiable";
       										$total=0;
       							 $qty=$row->borrowdetail;
       						 $rent_qty=count($qty);
        						$qties = $row->qties;
        					foreach($qties as $q)
        						{
         				 $total+=$q->qty;
        							}
        
    							?>


										<div class="col-lg-3 col-md-10 col-sm-10" 
										style="text-align: center;">
										<img src="<?php echo e(asset($row->photo)); ?>" class="img-thumbnail" alt="Cinque Terre" style="width: 50%;height: 50%;">
										<h4 class="mt-3"><?php echo e($row->name); ?></h4>
										
										   <?php if($total>$rent_qty): ?>
										<input type="text" name="" disabled="disabled" value="<?php echo e($a); ?>" class="text-center bg-success">

									<?php else: ?>
										<input type="text" name="" disabled="disabled" value="unavaiable" class="text-center bg-success">

								 	<?php endif; ?>
								 	
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							
					     </div>

</div>
</div>
</div>
</div>


		
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yannaing/Desktop/Library/resources/views/frontend/modern.blade.php ENDPATH**/ ?>