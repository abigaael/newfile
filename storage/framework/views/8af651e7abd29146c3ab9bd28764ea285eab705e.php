<?php $__env->startSection('content'); ?>

	<h1>Hi, Data anda telah berhasil ditambahkan</h1>
	<hr> Selamat <?php echo e($data->nama_customer); ?>, data anda berhasil ditambahkan

	<table>
		<thead>
			<tr>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Jenis Kelamin</th>
			</tr>
			<tbody>
				<tr>
					<td><?php echo e($data->alamat); ?></td>
					<td><?php echo e($data->no_hp); ?></td>
					<td><?php echo e($data->jenis_kelamin); ?></td>
				</tr>
			</tbody>
		</thead>
	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\file\resources\views/email/emailcustomer.blade.php ENDPATH**/ ?>