

<?php $__env->startSection('content'); ?>
<section class="pt-7 pb-6">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-6 mx-auto text-center">
				<img src="<?php echo e(my_asset('assets/frontend/default/img/419.svg')); ?>" class="mx-auto mw-100 mb-5" height="180">
				<h1 class="fw-700"><?php echo e(translate('Your session has expired')); ?></h1>
				<p class="lead mb-5"><?php echo e(translate('Please refresh the page')); ?></p>
				<a href="<?php echo e(route('home')); ?>" class="btn btn-primary mb-5">
					<i class="la la-arrow-left mr-2"></i>
					<span><?php echo e(translate('Back to Homepage')); ?></span>
				</a>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\zeroplus20\resources\views/errors/419.blade.php ENDPATH**/ ?>