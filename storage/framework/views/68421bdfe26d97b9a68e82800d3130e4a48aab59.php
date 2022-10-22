

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <!-- BREADCRUMB -->
            <div class="page-meta layout-top-spacing">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-md-10">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Expert</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Service</li>
                            </ol>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo e(route('service.create')); ?>" class="btn btn-primary mb-2 me-4">Add
                                Service</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <div class="widget-content">
                <div class="row layout-spacing">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row gutters-10">

                            <div class="row">
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-3 mb-4">
                                        <div class="card">
                                            <a href="<?php echo e(route('service.show', $service->slug)); ?>">
                                                <?php if(!empty($service->image)): ?>
                                                    <img src="<?php echo e(asset('storage/uploads/services/' . $service->image)); ?>"
                                                        class="card-img-top" height="200" alt="<?php echo e($service->slug); ?>.">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                                        class="card-media-image me-3" alt="">
                                                <?php endif; ?>
                                            </a>
                                            <div class="media mt-4 mb-0 pt-1 container">
                                                <?php if(!empty(Auth::user()->photo)): ?>
                                                    <img src="<?php echo e(asset('profile/photos/' . Auth::user()->photo)); ?>"
                                                        class="card-media-image me-3" alt="<?php echo e(Auth::user()->photo); ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                                        class="card-media-image me-3" alt="">
                                                <?php endif; ?>
                                                <a href="<?php echo e(route('freelancer.details', $service->user->user_name)); ?>">
                                                    <div class="media-body">
                                                        <h4 class="media-heading mt-3">
                                                            <?php echo e(Auth::user()->name); ?>

                                                        </h4>
                                                    </div>
                                                </a>
                                            </div>
                                           
                                            <a href="<?php echo e(route('service.show', $service->slug)); ?>">
                                                <div class="card-body px-0 pb-0 ">
                                                    <p class="card-title mb-3 container">
                                                        <?php echo e(\Illuminate\Support\Str::limit($service->title, 40, $end = '...')); ?>

                                                    </p>
                                                </div>
                                            </a>

                                            <div class="container text-center">
                                                <span type="button" data-bs-dismiss="modal"
                                                    class="badge outline-badge-primary mb-2 me-4"> <a
                                                        href="<?php echo e(route('service.edit', $service->slug)); ?>">Edit</a></span>

                                                <span type="button" data-bs-dismiss="modal"
                                                    class="badge outline-badge-danger mb-2 me-4"> <a
                                                        href="<?php echo e(route('service.destroy', $service->slug)); ?>">Delete</a></span>
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

    <!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('admin.default.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\zeroplus20\resources\views/frontend/default/user/freelancer/projects/services/index.blade.php ENDPATH**/ ?>