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
				<form action="/mobil/<?php echo e($mobil->id); ?>/update" id="editform" method="POST">
					<?php echo e(csrf_field()); ?>

								  <div class="form-group form-group-default required">
								    <label for="kode_mobil">Kode</label>
								    <input name="kode_mobil" type="text" class="form-control" id="kode_mobil" aria-describedby="emailHelp" placeholde="Kode" value="<?php echo e($mobil->kode_mobil); ?>">
								  </div>

								  <div class="form-group form-group-default required">
								    <label for="car_name">Nama Mobil</label>
								    <input name="car_name" type="text" class="form-control" id="car_name" aria-describedby="emailHelp" placeholde="Nama Mobil" value="<?php echo e($mobil->car_name); ?>">
								  </div>  
								  
								  <div class="form-group form-group-default required">
								    <label for="no_polisi">No Polisi</label>
								    <input name="no_polisi" type="text" class="form-control" id="no_polisi" aria-describedby="emailHelp" placeholde="No Polisi" value="<?php echo e($mobil->no_polisi); ?>"> 
								  </div>

								  <div class="form-group form-group-default required">
								    <label for="brand">Brand</label>
								    <input name="brand" type="text" class="form-control" id="brand" aria-describedby="emailHelp" placeholde="Brand" value="<?php echo e($mobil->brand); ?>">
								  </div>

								  <div class="form-group form-group-default required">
								    <label for="type">Type</label>
								    <input name="type" type="text" class="form-control" id="type" aria-describedby="emailHelp" placeholde="Type" value="<?php echo e($mobil->type); ?>"> 
								  </div>

								  <div class="form-group form-group-default required">
								    <label for="harga_sewa">Harga Sewa</label>
								    <input name="harga_sewa" type="text" class="form-control" id="harga_sewa" aria-describedby="emailHelp" placeholde="Harga Sewa" onkeypress="validateOnlyNumber(event);" value="<?php echo e($mobil->harga_sewa); ?>"> 
								  </div>
							    
		</div>
								<button type="submit" class="btn btn-warning">Update</button>
				        </form>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('template/assets/plugins/jquery-validation/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>

<script type="text/javascript">
	$("#editform").validate({
	  rules: {
	    kode_mobil: "required",
	    car_name:"required",
	    no_polisi:"required",
	    brand:"required",
	    type:"required",
	    warna:"required",
	    harga_sewa:"required",
	  },
	  messages: {
	    kode_mobil: "Please enter your code",
	    car_name: "Please enter your car name",
	    no_polisi: "Please enter your license",
	    brand: "Please enter your brand",
	    type: "Please enter your type",
	    warna: "Please enter your color",
	    harga_sewa: "Please enter price",
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
<?php echo $__env->make('layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\file\resources\views/mobil/edit.blade.php ENDPATH**/ ?>