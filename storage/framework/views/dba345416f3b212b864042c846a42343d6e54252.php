<?php $__env->startSection('content'); ?>
<div class="container">
<h2 class="d-inline-block">All Categories</h2>
<a href="<?php echo e(route('categories.create')); ?>" class="btn btn-outline-success float-right">Add New</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Action</th>
				
</tr>
</thead>
	<tbody>
		<?php
			$i =1;
		?> 
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($i++); ?></td>
			<td><?php echo e($row->name); ?></td>
			
			<td>
				<a href="<?php echo e(route('categories.edit',$row->id)); ?>" class="btn btn-warning">Edit</a>
				<form method="post" action="<?php echo e(route('categories.destroy',$row->id)); ?>" class="d-inline-block">
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button type="submit" class="btn btn-danger">Delete
						
					</button>

				</form>
				
			</td>
</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>



	</table>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yannaing/Desktop/Library/resources/views/categories/index.blade.php ENDPATH**/ ?>