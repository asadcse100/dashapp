

<?php $__env->startSection('css'); ?>
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6"><?php echo e(translate('All Staffs')); ?></h5>
            </div>

            <div class="widget-content widget-content-area layout-top-spacing">
                <form class="" id="sort_projects" action="" method="GET">
                    <div class="card-header row gutters-5" style="justify-content:center">
                        <div class="col-md-3 ml-auto">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show create staff')): ?>
                                <a href="<?php echo e(route('staffs.create')); ?>" class="btn btn-outline-primary mb-2 me-4">
                                    <span>Add Staff</span>
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
            <th>Email</th>
            <th>Role</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($staff->user->name); ?></td>
                <td><?php echo e($staff->user->email); ?></td>
                <td>
                    <?php if($staff->role != null): ?>
                        <?php echo e($staff->role->name); ?>

                    <?php endif; ?>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                        <div class="dropdown-menu my-5" aria-labelledby="dropdownMenuLink20">
                            <a class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#bd-view-modal-lg<?php echo e($staff->id); ?>">View</a>

                            <a href="<?php echo e(route('staffs.edit', encrypt($staff->id))); ?>"
                                class="dropdown-item">Edit</a>



                            <a class="dropdown-item" href="<?php echo e(route('staffs.destroy', $staff->id)); ?>"
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
    <script>
        // Setup - add a text input to each footer cell
        $('#staff-table tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
        });


        // DataTable
        var table = $('#staff-table').DataTable({

            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +

                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [10, 20, 50],
            "pageLength": 10
        });

        // Apply the search
        table.columns().every(function() {
            var that = this;

            $('input', this.footer()).on('keyup change', function() {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/admin/default/staffs/index.blade.php ENDPATH**/ ?>