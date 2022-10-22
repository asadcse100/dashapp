

<?php $__env->startSection('css'); ?>
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6"><?php echo e(translate('All Roles')); ?></h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="" id="sort_projects" action="" method="GET">
                            <div class="card-header row gutters-5" style="justify-content:center">
                                <div class="col-md-3 text-right">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show create roles')): ?>
                                        <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-outline-primary mb-2 me-4">
                                            <span>Add Role</span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                        data-live-search="true" onchange="sort_projects()">
                                        <option value=""><?php echo e(translate('Filter by Client')); ?></option>
                                        <?php $__currentLoopData = App\Models\User::where('user_type', 'client')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($client->user != null): ?>
                                                <option value="<?php echo e($client->id); ?>"
                                                    <?php if($client->id == $client_id): ?> selected <?php endif; ?>>
                                                    <?php echo e($client->name); ?>

                                                </option>
                                            <?php endif; ?>
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
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1 + ($roles->currentPage() - 1) * $roles->perPage()); ?></td>
                        <td><?php echo e($role->name); ?></td>

                        <td class="text-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu my-5" aria-labelledby="dropdownMenuLink20">

                                    <a href="<?php echo e(route('roles.edit', encrypt($role->id))); ?>"
                                        class="dropdown-item">Edit</a>



                                    <a class="dropdown-item" href="<?php echo e(route('roles.destroy', $role->id)); ?>"
                                        onclick="deleteFn()">Delete</a>

                                </div>
                            </div>
                        </td>
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
<!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
<?php echo $__env->make('admin.default.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/admin/default/roles/index.blade.php ENDPATH**/ ?>