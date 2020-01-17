<?php $__env->startSection('content'); ?>
		<h1>Edit Data Customer</h1>
		<?php if(session('sukses')): ?>
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-12">
				
			
			<form action="/customer/<?php echo e($customer->id); ?>/update" method="POST">
				        	<?php echo e(csrf_field()); ?>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Kode</label>
							    <input name="kode_customer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Kode" value="<?php echo e($customer->kode_customer); ?>">

							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Customer</label>
							    <input name="nama_customer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Nama Customer" value="<?php echo e($customer->nama_customer); ?>">
							    
							   <div class="form-group">
							    <label for="exampleInputEmail1">No Hp</label>
							    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Hp" value="<?php echo e($customer->no_hp); ?>"> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">Jenis Kelamin</label><br>
								   <?php if($customer->jenis_kelamin == "L"): ?>
								       <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki<br>
								       <input type="radio" name="jenis_kelamin" value="P"> Perempuan<br>
								     <?php else: ?>
								       <input type="radio" name="jenis_kelamin" value="L"> Laki-laki<br>
								       <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan<br>
								   <?php endif; ?>
							   </div>
							   
							   <div class="form-group">
							    <label for="exampleInputEmail1">Alamat</label>
							    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Alamat" value="<?php echo e($customer->alamat); ?>"> 

							    
				</div>
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\file\resources\views/customer/edit.blade.php ENDPATH**/ ?>