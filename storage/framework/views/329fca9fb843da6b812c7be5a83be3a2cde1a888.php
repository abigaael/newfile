<?php $__env->startSection('content'); ?>
		<h1>Edit Data Rental Mobil</h1>
		<?php if(session('sukses')): ?>
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-12">
				
			
			<form action="/rental/<?php echo e($rental->id); ?>/update" method="POST">
				        	<?php echo e(csrf_field()); ?>

							  <div class="form-group">
							    <label for="exampleInputEmail1">No Transaksi</label>
							    <input name="no_transaksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Transaksi" value="<?php echo e($rental->no_transaksi); ?>">
							  </div>

							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Customer</label>
							    <select class="form-control" name="nama_customer">
							    	<option value="<?php echo e($rental->kode_customer); ?>"><?php echo e($rental->customer->nama_customer); ?></option>
							    	<?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    		<?php if($cust->kode_customer !== $rental->kode_customer): ?>
							    			<option value="<?php echo e($cust->kode_customer); ?>"> <?php echo e($cust->nama_customer); ?> </option>
							    		<?php endif; ?> 
							    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    </select>
							   </div>
							    
							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Mobil</label>
							    <select class="form-control" name="nama_mobil">
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
							   <div class="form-group">
							    <label for="exampleInputEmail1">Tanggal rental</label>
							    <input name="tgl_rental" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Tgl rental" value="<?php echo e($rental->tgl_rental); ?>">
							   </div> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">Tanggal kembali</label>
							    <input name="tgl_kemabali" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Tgl kembali" value="<?php echo e($rental->tgl_kemabali); ?>"> 
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
<script type="text/javascript">
	$('[name="tgl_rental"]').datepicker({
	  format: "yyyy-mm-dd"
	});
	$('[name="tgl_kembali"]').datepicker({
	  format: "yyyy-mm-dd"
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\file\resources\views/rental/edit.blade.php ENDPATH**/ ?>