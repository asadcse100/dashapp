

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
                                <h5 class="text-center">Total Requests</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Project Name</th>
                                        <th>Paid Amount</th>
                                        <th>Your Earnings</th>
                                        <th>Paid at</th>
                                        <th>Admin Charge</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $milestones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $milestone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><a href="#" class="text-secondary"><?php echo e($milestone->project->name); ?></a>
                                            </td>
                                            <td><?php echo e(single_price($milestone->amount)); ?></td>
                                            <td><?php echo e(single_price($milestone->freelancer_profit)); ?></td>
                                            <td><?php echo e($milestone->created_at); ?></td>
                                            <td><?php echo e(single_price($milestone->admin_profit)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\zeroplus20\resources\views/frontend/default/user/freelancer/earnings/history.blade.php ENDPATH**/ ?>