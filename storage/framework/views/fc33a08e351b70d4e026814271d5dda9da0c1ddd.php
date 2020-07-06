
<?php $__env->startSection('content'); ?>
<div class="container">
<h2 class="d-inline-block">All Borrows</h2>
<a href="<?php echo e(route('borrow.create')); ?>" class="btn btn-info float-right">Add New</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>name</th>
				<th>borrow_date</th>
				<th>Action</th>
			
				
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
			<td><?php echo e($row->borrow_date); ?></td>
		
			
			<td>
				
				<a href="<?php echo e(route('borrow.show',$row->code_no)); ?>" class="btn btn-warning">Detail</a>
				
				
			</td>
</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>



	</table>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/finalproject/resources/views/borrow/index.blade.php ENDPATH**/ ?>