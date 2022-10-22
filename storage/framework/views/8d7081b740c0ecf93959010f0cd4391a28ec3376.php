<?php $__env->startSection('content'); ?>
    <section class="py-4 py-lg-5">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <?php if($keyword != null): ?>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 text-center">
                            <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400"><?php echo e(translate('Total')); ?> <span
                                    class="fw-600"><?php echo e($total); ?></span> <?php echo e(translate('freelancers found for')); ?> <span
                                    class="fw-600"><?php echo e($keyword); ?></span></h1>
                        </div>
                    </div>
                <?php endif; ?>
                <form id="freelancer-filter-form" action="" method="GET">
                    <div class="row gutters-10">
                        <div class="col-xl-3 col-lg-4">
                            <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
                                <div class="card rounded-0 rounded-lg collapse-sidebar c-scrollbar-light">
                                    <div class="card-header">
                                        <h5 class="mb-0 h6"><?php echo e(translate('Filter By')); ?></h5>
                                        <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb"
                                            data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                            <i class="las la-times la-2x"></i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="separator text-left mb-3 fs-12 text-uppercase text-secondary">
                                            <span class="pr-3"><?php echo e(translate('Categories')); ?></span>
                                        </h6>
                                        <select class="form-control" name="select">
                                            <option value="">All Category</option>
                                            <option value="">Category 1</option>
                                            <option value="">Category 2</option>
                                            <option value="">Category 3</option>
                                            <option value="">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                    data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="">
                                <input type="hidden" name="type" value="freelancer">
                                <div class="card-header">
                                    
                                </div>
                                <div class="row gutters-10">
                                    <div class="card-body p-0">
                                        <div class="faq container">
                                            <div class="row">
                                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-sm-4 mb-4">
                                                        <div class="card">
                                                            <a href="<?php echo e(route('service.show', $service->slug)); ?>">
                                                                <img src="<?php echo e(asset('storage/uploads/services/' . $service->image)); ?>"
                                                                    class="card-img-top" alt="<?php echo e(asset($service->slug)); ?>.">
                                                            </a>
                                                            <div class="card-body">

                                                                <div class="media mt-4 mb-0 pt-1">
                                                                    <?php if(!empty(Auth::user()->photo)): ?>
                                                                        <img src="<?php echo e(asset(Auth::user()->photo)); ?>"
                                                                            class="card-media-image me-3"
                                                                            alt="<?php echo e(Auth::user()->photo); ?>">
                                                                    <?php else: ?>
                                                                        <img src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                                                            class="card-media-image me-3" alt="">
                                                                    <?php endif; ?>
                                                                    <a
                                                                        href="<?php echo e(route('freelancer.details', $service->user->user_name)); ?>">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading mt-3">
                                                                                <?php echo e($service->user->name); ?></h4>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <h5 class="card-title"> <a
                                                                        href="<?php echo e(route('freelancer.details', $service->user->user_name)); ?>"
                                                                        class="text-dark"></a>
                                                                </h5>
                                                                <hr>
                                                                <a href="<?php echo e(route('service.show', $service->slug)); ?>"
                                                                    class="text-dark">
                                                                    <h5 class="card-title">
                                                                        <?php echo e(\Illuminate\Support\Str::limit($service->title, 40, $end = '...')); ?>

                                                                    </h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function applyFilter() {
            $('#freelancer-filter-form').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::guest() ? 'layouts.appindex' : 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/services-listing.blade.php ENDPATH**/ ?>