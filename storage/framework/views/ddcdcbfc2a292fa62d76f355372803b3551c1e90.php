<?php $__env->startSection('content'); ?>
<div class="container-fluid">

	
  <div class="card" style="margin-bottom: 20px">
    <div class="card-body mb-3 " style="">

      <div class="card-header" style="font-size: 20px">Details</div>

      <div class="card-body">

          <div class="row">
            <div class="col-lg-4" style="">
              <strong class="card-title" style="font-size: 20px; text-align: center;">Member Name:</strong>
            </div>
            <div class="col-lg-8" style="">
              <span><?php echo e($borrow->user->name); ?></span>
            </div>

            <div class="col-lg-4" style="">
              <strong class="card-title" style="font-size: 20px; text-align: center;">Code No:</strong>
            </div>
            <div class="col-lg-8" style="">
              <span><?php echo e($borrow->code_no); ?></span>
            </div>
            <div class="col-lg-4" style="">
              <strong class="card-title" style="font-size: 20px; text-align: center;">Date:</strong>
            </div>
            <div class="col-lg-8" style="">
              <span><?php echo e($borrow->borrow_date); ?></span>
            </div>
            <div class="col-lg-12 pt-5" style="text-align: center; ">
              <p class="card-text" style="font-size: 30px"><b><u>Thanks You So Much</u></b></p>
            </div>
          </div>



       
 <!--        <h5 class="card-title">Code No:<span><?php echo e($borrow->code_no); ?></span></h5> -->
<!--         <h5 class="card-title">Date:<span><?php echo e($borrow->borrow_date); ?></span></h5> -->

      </div>

    </div>
  </div>





  <input type="hidden" name='codeno' value="<?php echo e($borrow->code_no); ?>">

  <h5 style="padding-left: 35%;">Select the Book What You Return</h5>
  <div style="padding-left: 42%;" class="mt-4">

  	<?php $__currentLoopData = $borrowdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="form-group row ">

      <div class="form-check  col-sm-2 ">
        <input class="form-check-input check_box" type="checkbox" id="gridCheck" value = "<?php echo e($row->book_id); ?>"  name="php_book[]" multiple="multiple">
        <label class="form-check-level" for="gridCheck">
         <?php echo e($row->book->name); ?>

       </label>
     </div>

   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   <?php
   
   use Carbon\Carbon;
   $date = $borrow->created_at;
   $date= new Carbon($date);

   
   $now = Carbon::now();
   $diff = $date->diffInDays($now);
 


?>



<button type="button" class="btn btn-primary text mb-3 btn_model "  style="margin-left: 35%;" data-diff="<?php echo e($diff); ?>">Return</button>
</div>


<!-- </form>
-->
<!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Open Modal</button> -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Casher</h4>
      </div>
      <div class="modal-body">
        <form  method="post" action= "<?php echo e(route('borrowdetail.delete')); ?>" >
          <?php echo csrf_field(); ?>
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="inputEmail4">Borrow Date</label>
              <input type="text" class="form-control" id="borrowdate" placeholder="Borrow Date" disabled="disabled" value="<?php echo e($borrow->created_at); ?>">
            </div>


            <div class="form-group col-md-6">
              <label for="inputPassword4">Return Date</label>
              <input type="text" class="form-control" id="returndate" placeholder="" disabled="disabled" value="<?php echo e($now); ?>">
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4">Late Fees for <span id="qty"></span> Books</label> 
          
              <input type="text" class="form-control"  placeholder="" disabled="disabled" value="" id ="total">
            </div>

             <div class="form-group col-md-6">
             <h3 class="mt-4">Kyats</h3>
            </div>



          </div>

          <!-- ---------------- -->

          <input type="hidden" class="book" name="books[]" >
          <input type="hidden" name='codeno' value="<?php echo e($borrow->code_no); ?>">

          <button type="submit" class="btn btn-primary text mt-5" style="margin-left: 35%;">Return</button>





        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<!-- ----------- -->
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $(document).ready(function(){

    $('.btn_model').click(function(){
     var check = $('input:checked').map(function(){
      return $(this).val();
    });
     var book_count=check.length;
     var diff = $(this).data('diff');
     var price = 1000;
     console.log(diff);
     if (diff >3) {
     var total =diff*price*book_count ;
$('#total').val(total);
   }else{
    $('#total').val("0");
   }
     
     $('.book').val(check.get());
     
     $('#qty').html(book_count);
console.log(book_count);
     $('#myModal').modal('show');
        // $('#borrowdate').val('<?php echo e($borrow->borrow_date); ?>');
        $('#returndate').val();
        // $date = '2020-01-29'-'2020-01-30';
        // console.log($date);
       	// console.log(check.get());
       })
    var cid = $(this).val();
      // alert(cid);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    })
  </script>
  <?php $__env->stopSection(); ?>




<?php echo $__env->make('backendtemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/finalproject/resources/views/borrow/detail.blade.php ENDPATH**/ ?>