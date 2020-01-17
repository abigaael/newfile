<?php $__env->startSection('content'); ?>
		<h1>Edit Data Rental Mobil</h1>
		<?php if(session('sukses')): ?>
			<div class="alert alert-success" role="alert">
			  Data Entered Successfully!
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-12">
			<form action="/mobil/<?php echo e($mobil ?? ''->id); ?>/update" method="POST">
				        	<?php echo e(csrf_field()); ?>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Car Name</label>
							    <input name="car_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Car Name" value="<?php echo e($mobil ?? ''->car_name); ?>">

							   <div class="form-group">
							    <label for="exampleInputEmail1">Type</label>
							    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Car Name" value="<?php echo e($mobil ?? ''->type); ?>">
							    
							   <div class="form-group">
							    <label for="exampleInputEmail1">Brand</label>
							    <input name="brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Car Name" value="<?php echo e($mobil ?? ''->brand); ?>"> 

							   <div class="form-group">
							    <label for="exampleInputEmail1">License</label>
							    <input name="license" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholde="Car Name" value="<?php echo e($mobil ?? ''->license); ?>">
							    
							   </div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-warning">Update</button>
				        </form>
				</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\file\resources\views/customer/editcustomer.blade.php ENDPATH**/ ?>