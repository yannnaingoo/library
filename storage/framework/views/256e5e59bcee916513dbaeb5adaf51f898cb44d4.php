<?php $__env->startSection('content'); ?>

<h2 style="padding-left: 40px">Member Account Create Form</h2>
<div class="card m-5">
	<h5 class="p-5"><u>Member Information:</u></h5>
	<div class="card-body">
		<div class="container">
			<form method="post" action="<?php echo e(route('members.store')); ?>">
				<?php echo csrf_field(); ?>
				<div class="row">
					<div class="col">
						<label for>Member's Name:</label>
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
				</div>



				<div class="row pt-3">
					
					<div class="col">
						<label for>Email:</label>
						<input type="email" class="form-control" placeholder="example@gmail.com" name="email">
					</div>
				</div>

				<div class="row pt-3">
<!-- 					<div class="col">
						<label for>Date of Birth:</label>
						<input type="date" class="form-control" placeholder="dd/mm/yy" name="dob">
					</div> -->
					<div class="col">
						<label for>Phone</label>
						<input type="text" class="form-control" placeholder="" name="phone">
					</div>

				</div>
				<div class="pt-3">
					<label for="">Address:</label>
					<textarea type="text" class="form-control" id="InputAddress" name="address"></textarea>
				</div>
			

				<hr class="divider" style=" border-color: black">
				 <button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
			</form>
		</div>
	</div>
	
 	
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/finalproject/resources/views/members/create.blade.php ENDPATH**/ ?>