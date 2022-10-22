

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
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6"><?php echo e(translate('Purchased Services')); ?></h5>
            </div>
            <div class="widget-content widget-content-area layout-top-spacing">
                <form class="" id="sort_projects" action="" method="GET">
                    <div class=" row gutters-5" style="justify-content:center">
                        
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
                            <th data-breakpoints="md"><?php echo e(translate('Expert')); ?></th>
                            <th data-breakpoints=""><?php echo e(translate('Service Type')); ?></th>
                            <th data-breakpoints="md"><?php echo e(translate('Bought At')); ?></th>
                            <?php if(\App\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated): ?>
                                <th data-breakpoints=""><?php echo e(translate('Payment Type')); ?></th>
                                <th data-breakpoints="" width="15%">
                                    <?php echo e(translate('Approval') . ' ( ' . translate('For Manual Payment') . ' )'); ?>

                                </th>
                            <?php endif; ?>
                            <th data-breakpoints="md"><?php echo e(translate('Purchased At')); ?></th>
                            <th data-breakpoints="md"><?php echo e(translate('Option')); ?></th>
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
                                <td><a target="_blank"
                                        href="<?php echo e(route('freelancer.details', $purchasedService->freelancer->user_name)); ?>"><?php echo e($purchasedService->freelancer->name); ?></a>
                                </td>
                                <td><?php echo e(ucfirst($purchasedService->servicePackage->service_type)); ?></td>
                                <td><?php echo e(single_price($purchasedService->amount)); ?></td>
                                <?php if(\App\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                    \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated): ?>
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

                                <td>
                                    <?php if($purchasedService->cancel_status == 0 && $purchasedService->cancel_requested == 0): ?>
                                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm fw-500 confirm-cancel"
                                            data-href="<?php echo e(route('services.cancel', $purchasedService->id)); ?>"><?php echo e(translate('Cancel')); ?></a>
                                    <?php endif; ?>
                                </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <!-- cancel Modal -->
    <div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6"><?php echo e(translate('Cancel Confirmation')); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body text-center">
                    <p class="lead"><?php echo e(translate('Are you sure to cancel this?')); ?></p>
                    <button type="button" class="btn btn-link mt-2"
                        data-dismiss="modal"><?php echo e(translate('Cancel')); ?></button>
                    <a id="cancel-link" class="btn btn-primary mt-2"><?php echo e(translate('Confirm')); ?></a>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.default.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Server\htdocs\zeroplus20\resources\views/frontend/default/user/client/services/purchased.blade.php ENDPATH**/ ?>