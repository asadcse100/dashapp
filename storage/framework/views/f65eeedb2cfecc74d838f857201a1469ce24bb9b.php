

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
                <h5 class="mb-md-0 h6"><?php echo e(translate('All Projects')); ?></h5>
            </div>
            <div class="widget-content widget-content-area layout-top-spacing">
                <form class="" id="sort_projects" action="" method="GET">
                    <div class="card-header row gutters-5" style="justify-content:center">
                        

                        <div class="col-md-3 ml-auto">
                            <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                data-live-search="true" onchange="sort_projects()">
                                <option value=""><?php echo e(translate('Filter by Client')); ?></option>
                                <?php $__currentLoopData = App\Models\User::where('user_type', 'client')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <option value="<?php echo e($client->id); ?>" <?php if($client->id == $client_id): ?> selected <?php endif; ?>>
                                        <?php echo e($client->name); ?>

                                    </option>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="type" id="type"
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
            <th>Title</th>
            <th>Project Category</th>
            <th>Type</th>
            <th>Client</th>
            <th>Budget</th>
            <?php if(\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1): ?>
                <th data-breakpoints="md"><?php echo e(translate('Approval')); ?></th>
            <?php endif; ?>
            <th>Posted at</th>
            <th class="text-center dt-no-sorting">Options</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center">
                    <?php echo e($key + 1 + ($projects->currentPage() - 1) * $projects->perPage()); ?>

                </td>
                <td><a href="<?php echo e(route('project.details', $project->slug)); ?>" target="_blank"
                        class="text-reset"><?php echo e($project->name); ?></a></td>

                <td>
                    <?php if($project->project_category != null): ?>
                        <?php echo e($project->project_category->name); ?>

                    <?php endif; ?>
                </td>
                <td><?php echo e($project->type); ?></td>

                <td>
                    <?php if($project->client != null): ?>
                        <?php echo e($project->client->name); ?>

                    <?php endif; ?>
                </td>
                <td><?php echo e(single_price($project->price)); ?></td>
                <?php if(\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1): ?>
                    <td>
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" id="project_approval.<?php echo e($key); ?>"
                                onchange="project_approval(this)" value="<?php echo e($project->id); ?>"
                                <?php if($project->project_approval == 1): ?> checked <?php endif; ?>>
                            <span></span>
                        </label>
                    </td>
                <?php endif; ?>
                <td><?php echo e(Carbon\Carbon::parse($project->created_at)->diffForHumans()); ?></td>


                <a href="#" data-href="<?php echo e(route('delete_project_by_admin', encrypt($project->id))); ?>"
                    title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trash-2 table-cancel">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path
                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                        </path>
                        <line x1="10" y1="11" x2="10" y2="17">
                        </line>
                        <line x1="14" y1="11" x2="14" y2="17">
                        </line>
                    </svg>
                </a>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
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

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<script type="text/javascript">
    function sort_projects(el) {
        $('#sort_projects').submit();
    }

    function project_approval(el) {
        if (el.checked) {
            var status = 1;
        } else {
            var status = 0;
        }
        $.post('<?php echo e(route('project_approval')); ?>', {
            _token: '<?php echo e(csrf_token()); ?>',
            id: el.value,
            status: status
        }, function(data) {
            if (data == 1) {
                AIZ.plugins.notify('success', 'Project has been approved successfully.');
            } else {
                AIZ.plugins.notify('danger', 'Something went wrong');
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/admin/default/project/projects/index.blade.php ENDPATH**/ ?>