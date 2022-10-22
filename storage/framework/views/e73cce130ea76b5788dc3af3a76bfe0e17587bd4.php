

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="layout-top-spacing">
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="layout-top-spacing ">
                                <h5 class="text-center">List of service sold</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Service Title</th>
                                        <th>Client Name</th>
                                        <th>Service Type</th>
                                        <th>Amount</th>
                                        <th>My Earning</th>
                                        <th>Purchased At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $purchasedServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchasedService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td>
                                                <a target="_blank"
                                                    href="<?php echo e(route('service.show', $purchasedService->servicePackage->service->slug)); ?>">
                                                    <?php echo e(\Illuminate\Support\Str::limit($purchasedService->servicePackage->service->title, 15, $end = '...')); ?>

                                                    <?php if($purchasedService->cancel_status == 1): ?>
                                                        <span
                                                            class="ml-2 badge badge-danger badge-inline badge-md"><?php echo e(translate('Cancelled')); ?></span>
                                                    <?php elseif($purchasedService->cancel_requested == 1): ?>
                                                        <span
                                                            class="badge badge-info badge-inline badge-md"><?php echo e(translate('Cancel Requested')); ?></span>
                                                    <?php endif; ?>
                                                </a>
                                            </td>
                                            <td><?php echo e($purchasedService->user->name); ?></td>
                                            <td><?php echo e(ucfirst($purchasedService->servicePackage->service_type)); ?></td>
                                            <td><?php echo e(single_price($purchasedService->amount)); ?></td>
                                            <td><?php echo e(single_price($purchasedService->freelancer_profit)); ?></td>
                                            <td><?php echo e($purchasedService->created_at); ?></td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/frontend/default/user/freelancer/projects/services/purchased.blade.php ENDPATH**/ ?>