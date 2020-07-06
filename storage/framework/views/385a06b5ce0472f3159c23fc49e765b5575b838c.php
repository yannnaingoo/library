<?php $__env->startSection('content'); ?>
<div class="container">
<h2 class="d-inline-block">Return Lists</h2>

	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>User name</th>
				<th>Code no</th>
				<th>Return date</th>
				
			
				
</tr>
</thead>
	<tbody>
		<?php
			$i =1;
		?> 
		<?php $__currentLoopData = $borrow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($i++); ?></td>
			<td><?php echo e($row->user->name); ?></td>
			<td><?php echo e($row->code_no); ?></td>
			<td><?php echo e($row->updated_at); ?></td>
		
			
			
</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>



	</table>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yannaing/Desktop/Library/resources/views/returns/index.blade.php ENDPATH**/ ?>