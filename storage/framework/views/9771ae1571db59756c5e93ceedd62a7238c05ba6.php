

<?php $__env->startSection('css'); ?>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('templete')); ?>/src/assets/css/light/widgets/modules-widgets.css">

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/widgets/modules-widgets.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <!-- Analytics -->

            <div class="layout-top-spacing ">
                <h5 class="text-center">Running Projects</h5>
                <hr>
            </div>
            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-five">
                    
                    <div class="continer">
                        <div class="widget-heading">
                            <a href="javascript:void(0)" class="task-info">
                                <div class="usr-avatar">
                                    <span>$500</span>
                                </div>
                            </a>
                            <div class="task-action">
                                <button class="btn btn-success">Running</button>
                            </div>
                        </div>
                        <div class="widget-content">
                            <a href="#">
                                <h6>I want a good banner design for my eCommerce.</h6>
                            </a>
                            <span>Design for my ecommerce banner and Branding</span>
                            <hr>
                            <div class="meta-info">
                                <div class="avatar--group">
                                    <div class="avatar translateY-axis">
                                        <img alt="avatar" src="<?php echo e(asset('templete')); ?>/src/assets/img/team-2-2.jpg" />
                                    </div>
                                    <div class="container">
                                        <div class="media-body">
                                            <h5 class="media-heading mb-1">Xavier</h5>
                                            <span>
                                                <p class="badge badge-warning ">5</p>
                                                (0 Reviews)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalbids">
                                    <button class="btn btn-dark  me-2">Send Payment Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/assets/js/widgets/modules-widgets.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('admin.default.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/frontend/default/user/freelancer/projects/my_running_project.blade.php ENDPATH**/ ?>