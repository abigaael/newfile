<?php $__env->startSection('content'); ?>

	<h1>Hi, Data anda telah berhasil diperbaharui</h1>
	<hr><?php echo e($edot->nama_customer); ?>, data anda berhasil diupdate

	<table>
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama Customer</th>
				<th>Email</th
>				<th>No Hp</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
			</tr>
		</thead>
			<tbody>
				<tr>
					<td><?php echo e($edot->kode); ?></td>
					<td><?php echo e($edot->nama_customer); ?></td>
					<td><?php echo e($edot->email); ?></td>
					<td><?php echo e($edot->no_hp); ?></td>
					<td>
					    <?php if($edot->jenis_kelamin == "L"): ?>
					    	Laki-Laki
					    <?php else: ?>
					        Perempuan
					    <?php endif; ?>
					</td>
					<td><?php echo e($edot->alamat); ?></td>
				</tr>
			</tbody>
		
	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\file\resources\views/email/emailupdate.blade.php ENDPATH**/ ?>