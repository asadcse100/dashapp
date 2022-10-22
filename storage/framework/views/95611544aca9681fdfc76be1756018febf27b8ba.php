

<?php $__env->startSection('content'); ?>
<section class="pt-7 pb-6">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<h1 class="display-1 fw-700 text-danger"><?php echo e(translate('500')); ?></h1>
				<h2 class="h1 fw-600"><?php echo e(translate('Internal Server Error')); ?>.</h2>
				<p class="lead mb-5"><?php echo e(translate('We\'re experinecing an internal server problem')); ?>.<br><?php echo e(translate('Please try again later')); ?>.</p>
				<a href="<?php echo e(route('home')); ?>" class="btn btn-primary mb-5">
					<i class="la la-arrow-left mr-2"></i>
					<span><?php echo e(translate('Back to Homepage')); ?></span>
				</a>
				<img src="<?php echo e(my_asset('assets/frontend/default/img/500.svg')); ?>" class="img-fluid w-75">
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/errors/500.blade.php ENDPATH**/ ?>