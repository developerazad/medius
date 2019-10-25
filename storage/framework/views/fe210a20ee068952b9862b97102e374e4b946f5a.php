<?php $__env->startSection('content'); ?>
	<div class="container-fluid app-body">
		<h3>Buffer Posting










		</h3>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover social-accounts" id="example">
					<thead>
						<tr>
							<th>Group Name</th>
							<th>Group Type</th>
							<th>Account Name</th>
							<th>Post Text</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
					<?php $__currentLoopData = $bufferPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bufferPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<tr>
								<td width="350"><?php echo e($bufferPost->name); ?></td>
								<td width="350"><?php echo e($bufferPost->postType); ?></td>
								<td width="350">
									<img src="<?php echo e($bufferPost->avatar); ?>" alt="" style="width: 70px;height:70px;border-radius: 50%;">
								</td>
								<td width="350"><?php echo e($bufferPost->text); ?></td>
								<td width="350"><?php echo e(date('d M, Y H:i:s', strtotime($bufferPost->sent_at))); ?></td>
							</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<span class="pull-right"><?php echo e($bufferPosts->links()); ?></span>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>