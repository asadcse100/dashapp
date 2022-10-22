

<?php $__env->startSection('css'); ?>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/src/autocomplete/css/autoComplete.02.css" rel="stylesheet"
        type="text/css" />

    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/light/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-4   layout-top-spacing">
                <h5 class="mb-md-0 h6"><?php echo e(translate('List of srevices requested for cancellation')); ?></h5>
            </div>
            <div class="widget-content widget-content-area layout-top-spacing">
                <form class="" id="sort_projects" action="" method="GET">
                    <div class="card-header row gutters-5" style="justify-content:center">
                        
                        <div class="col-md-3 ml-auto">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                data-live-search="true" onchange="sort_projects()">
                                <option value=""><?php echo e(translate('Filter by Client')); ?></option>
                                <?php $__currentLoopData = App\Models\User::where('user_type', 'client')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="type" id="type"
                                onchange="sort_projects()">
                                <option value=""><?php echo e(translate('Sort by')); ?></option>
                                <option value="created_at,asc"
                                    <?php if(isset($col_name, $query)): ?> <?php if($col_name == 'created_at' && $query == 'asc'): ?> selected <?php endif; ?>
                                <?php endif; ?>>
                                <?php echo e(translate('Time (Old > New)')); ?></option>
                            <option value="created_at,desc"
                                <?php if(isset($col_name, $query)): ?> <?php if($col_name == 'created_at' && $query == 'desc'): ?> selected <?php endif; ?>
                            <?php endif; ?>>
                            <?php echo e(translate('Time (New > Old)')); ?></option>
                        <option value="price,desc"
                            <?php if(isset($col_name, $query)): ?> <?php if($col_name == 'price' && $query == 'desc'): ?> selected <?php endif; ?>
                        <?php endif; ?>>
                        <?php echo e(translate('Price (High > Low)')); ?></option>
                    <option value="price,asc"
                        <?php if(isset($col_name, $query)): ?> <?php if($col_name == 'price' && $query == 'asc'): ?> selected <?php endif; ?>
                    <?php endif; ?>>
                    <?php echo e(translate('Price (Low > High)')); ?></option>
            </select>
        </div>

    </div>
</form>


<table id="individual-col-search" class="table dt-table-hover">
    <thead>
        <tr>
            <th data-breakpoints="">#</th>
            <th data-breakpoints=""><?php echo e(translate('Service Title')); ?></th>
            <th data-breakpoints="md"><?php echo e(translate('Freelancer')); ?></th>
            <th data-breakpoints=""><?php echo e(translate('Service Type')); ?></th>
            <th data-breakpoints="md"><?php echo e(translate('Bought At')); ?></th>
            <?php if(\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated): ?>
                <th data-breakpoints=""><?php echo e(translate('Payment Type')); ?></th>
                <th data-breakpoints="" width="15%">
                    <?php echo e(translate('Approval') . ' ( ' . translate('For Manual Payment') . ' )'); ?>

                </th>
            <?php endif; ?>
            <th data-breakpoints="md"><?php echo e(translate('Purchased At')); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $purchasedServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchasedService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><a target="_blank"
                        href="<?php echo e(route('service.show', $purchasedService->servicePackage->service->slug)); ?>"><?php echo e(\Illuminate\Support\Str::limit($purchasedService->servicePackage->service->title, 15, $end = '...')); ?></a>
                </td>
                <td><a target="_blank"
                        href="<?php echo e(route('freelancer.details', $purchasedService->freelancer->user_name)); ?>"><?php echo e($purchasedService->freelancer->name); ?></a>
                </td>
                <td><?php echo e(ucfirst($purchasedService->servicePackage->service_type)); ?></td>
                <td><?php echo e(single_price($purchasedService->amount)); ?></td>
                <?php if(\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated): ?>
                    <td>
                        <?php if($purchasedService->offline_payment == 1): ?>
                            <span
                                class="badge badge-inline badge-info"><?php echo e(translate('Manual Payment')); ?></span>
                        <?php else: ?>
                            <span
                                class="badge badge-inline badge-success"><?php echo e(translate('Online Payment')); ?></span>
                        <?php endif; ?>
                    </td>
                    <?php if($purchasedService->offline_payment == 1): ?>
                        <td>
                            <?php if($purchasedService->approval == 1): ?>
                                <span
                                    class="badge badge-inline badge-success"><?php echo e(translate('Approved')); ?></span>
                            <?php else: ?>
                                <span
                                    class="badge badge-inline badge-info"><?php echo e(translate('Pending')); ?></span>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                <?php endif; ?>
                <td><?php echo e($purchasedService->created_at); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>

<!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/frontend/default/user/client/services/cancel_requested.blade.php ENDPATH**/ ?>