<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<h2 class="d-inline-block">All books</h2>
<a href="<?php echo e(route('books.create')); ?>" class="btn btn-outline-success float-right">Add New</a>

	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Author</th>
				<th>Categories</th>
				<th>Price</th>
				<!-- <th>Image</th>
				<th>Description</th> -->
				<th>Qty</th>
				<th>Loan Qty</th>
				<th>Action</th>
				
</tr>
</thead>
	<tbody>
		<?php
			$i =1;

		?> 
		<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<?php
				$qty=$row->borrowdetail;
				$rent_qty=count($qty);
			?>
			
			<td><?php echo e($i++); ?></td>
			<td><?php echo e($row->name); ?></td>
			<td><?php echo e($row->author->name); ?></td>
			<td><?php echo e($row->category->name); ?></td>
			<td><?php echo e($row->price); ?></td>


			<!-- <td><img src="<?php echo e(asset($row->photo)); ?>" class="img-fluid" style="width: 50px;height: 50px"></td> -->
				<!-- <td><?php echo e($row->description); ?></td> -->
				<?php
			   $q = 0;
		       ?> 
				
				<?php $__currentLoopData = $row->qties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php
		        $q+= $zz->qty
		        ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<td><?php echo e($q); ?></td>
			<td><?php echo e($rent_qty); ?></td>
			<td>
				<a href="<?php echo e(route('books.edit',$row->id)); ?>" class="btn btn-warning">Edit</a>
				<form method="post" action="<?php echo e(route('books.destroy',$row->id)); ?>" class="d-inline-block">
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button type="submit" class="btn btn-danger">Delete
						
					</button>

				</form>
				<a href="<?php echo e(route('books.show',$row->id)); ?>" class="btn btn-info" >Detail</a>
				
			</td>
</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>



	</table>
	<!-- ----------- -->
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel" style="padding-left: 40%;color: red;">Book Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Card -->
 
<div class="card promoting-card">

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
    <img class="card-img-top rounded-0" src="<?php echo e(asset($row->photo)); ?>" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

      <!-- Text -->
      <p ><?php echo e($row->description); ?></p>
      <!-- Button -->
    


  </div>

</div>
<!-- Card -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yannaing/Desktop/Library/resources/views/books/index.blade.php ENDPATH**/ ?>