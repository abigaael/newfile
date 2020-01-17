<?php $__env->startPush('script'); ?>
	<style type="text/css">
	  tfoot {
	      display: table-header-group;
	  }
	  .form-group.required label:after {
	    content:"*";
	    color:red;
	}
	</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<h1>Edit Data Rental Mobil</h1>
		<?php if(session('sukses')): ?>
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		<?php endif; ?>
	
		<div class="row">
			<div class="col-lg-12">	
				<form action="/rental/<?php echo e($rental->id); ?>/update" id="editrent" method="POST">
				    <?php echo e(csrf_field()); ?>

							 <div class="form-group form-group-default required">
							    <label for="no_transaksi">No Transaksi</label>
							    <input name="no_transaksi" type="text" class="form-control" id="no_transaksi" aria-describedby="emailHelp" placeholde="No Transaksi" value="<?php echo e($rental->no_transaksi); ?>">
							 </div>

							 <div class="form-group form-group-default required">
							    <label for="nama_customer">Nama Customer</label>
							    <select class="form-control" name="nama_customer">
							    	<option value="<?php echo e($rental->kode_customer); ?>"><?php echo e($rental->customer->nama_customer); ?></option>
							    	<?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    		<?php if($cust->kode_customer !== $rental->kode_customer): ?>
							    			<option value="<?php echo e($cust->kode_customer); ?>"> <?php echo e($cust->nama_customer); ?> </option>
							    		<?php endif; ?> 
							    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    </select>
							 </div>
							    
							 <div class="form-group form-group-default required">
							    <label for="car_name">Nama Mobil</label>
							    <select class="form-control" name="car_name">
							    	<option value="<?php echo e($rental->kode_mobil); ?>"><?php echo e($rental->mobil->car_name); ?></option>
							    	<?php $__currentLoopData = $mobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    		<?php if($mob->kode_mobil !== $rental->kode_mobil): ?>
							    			<option value="<?php echo e($mob->kode_mobil); ?>"> <?php echo e($mob->car_name); ?> </option>
							    		<?php endif; ?> 
							    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    </select>
							 </div> 

							   <!-- <div class="form-group">
							    <label for="exampleInputEmail1">Kode Mobil</label>
							    <input name="kode_mobil" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Kode Mobil" value="<?php echo e($rental->kode_mobil); ?>">

							   <div class="form-group">
							    <label for="exampleInputEmail1">No Polisi</label>
							    <input name="no_polisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Polisi" value="<?php echo e($rental->no_polisi); ?>"> 
 -->
							 <div class="form-group form-group-default required">
							    <label for="tgl_rental">Tanggal rental</label>
							    <input name="tgl_rental" type="text" class="form-control" id="tgl_rental" aria-describedby="emailHelp" placeholde="Tgl rental" value="<?php echo e($rental->tgl_rental); ?>">
							 </div> 

							 <div class="form-group form-group-default required">
							    <label for="tgl_kembali">Tanggal kembali</label>
							    <input name="tgl_kembali" type="text" class="form-control" id="tgl_kembali" aria-describedby="emailHelp" placeholde="Tgl kembali" value="<?php echo e($rental->tgl_kembali); ?>"> 
							 </div>

							  <!--  <div class="form-group">
							    <label for="exampleInputEmail1">Harga Sewa</label>
							    <input name="harga_sewa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Harga Sewa" value="<?php echo e($rental->harga_sewa); ?>"> 
 -->
							    
							
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('template/assets/plugins/jquery-validation/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>

<script type="text/javascript">
	$('[name="tgl_rental"]').datepicker({
	  format: "dd-mm-yyyy"
	});
	$('[name="tgl_kembali"]').datepicker({
	  format: "dd-mm-yyyy"
	});

	$("#editrent").validate({
        rules: {
           no_transaksi: "required",
           nama_customer:"required",
           car_name:"required",
           tgl_rental:"required",
           tgl_kembali:"required",
           harga_sewa:"required",
        },
        messages: {
           no_transaksi: "Please enter your transaction number",
           car_name: "Please enter your car name",
           nama_customer: "Please enter name customer",
           tgl_rental: "Please enter your rental date",
           tgl_kembali: "Please enter your back date",
        }
    });

    function validateOnlyNumber(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /[0-9\b]|\./;
         
        if( !regex.test(key) ) {
          theEvent.returnValue = false;
          	if(theEvent.preventDefault) theEvent.preventDefault();
          }
      }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\file\resources\views/rental/edit.blade.php ENDPATH**/ ?>