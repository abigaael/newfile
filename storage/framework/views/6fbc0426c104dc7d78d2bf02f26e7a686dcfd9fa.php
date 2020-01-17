<?php $__env->startSection('content'); ?>
		<h1>Edit Data Rental Mobil</h1>
		<?php if(session('sukses')): ?>
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-12">
				
			
			<form action="/mobil/<?php echo e($mobil->id); ?>/update" method="POST">
				        	<?php echo e(csrf_field()); ?>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Kode</label>
							    <input name="kode_mobil" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Kode" value="<?php echo e($mobil->kode_mobil); ?>">

							   <div class="form-group">
							    <label for="exampleInputEmail1">Nama Mobil</label>
							    <input name="car_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Nama Mobil" value="<?php echo e($mobil->car_name); ?>">
							    
							   <div class="form-group">
							    <label for="exampleInputEmail1">No Polisi</label>
							    <input name="no_polisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="No Polisi" value="<?php echo e($mobil->no_polisi); ?>"> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">Brand</label>
							    <input name="brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Brand" value="<?php echo e($mobil->brand); ?>">

							   <div class="form-group">
							    <label for="exampleInputEmail1">Type</label>
							    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Type" value="<?php echo e($mobil->type); ?>"> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">Harga Sewa</label>
							    <input name="harga_sewa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Harga Sewa" value="<?php echo e($mobil->harga_sewa); ?>"> 

							    
				</div>
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\file\resources\views/mobil/edit.blade.php ENDPATH**/ ?>