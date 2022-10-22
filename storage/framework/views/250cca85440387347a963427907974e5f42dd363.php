

<?php $__env->startSection('css'); ?>
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <div class="widget-content widget-content-area layout-top-spacing">

                <form id="add_form" class="form-horizontal  needs-validation"
                    action="<?php echo e(route('roles.update', $role->id)); ?>" method="POST" enctype="multipart/form-data" novalidate
                    onsubmit="return validateform()">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="row layout-spacing">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                            <div class="widget-content widget-content-area blog-create-section">
                                <div class="col-md-6 layout-top-spacing p-2">
                                    <h4 class="mb-md-0 h6"><?php echo e(translate('Edit Roles')); ?></h4>
                                </div>
                                <hr>
                                <div class="">
                                    <div class="row layout-top-spacing p-4">
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom01">Role Name</span>
                                                <input type="text" placeholder="<?php echo e(translate('Role Name')); ?>"
                                                    id="name" name="name" value="<?php echo e($role->name); ?>"
                                                    class="form-control" required>
                                                <div class="invalid-feedback">
                                                    Please fill the Role Name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">

                                            <div class="panel-heading bord-btm mt-2">
                                                <h3 class="h6"><?php echo e(translate('Permissions')); ?></h3>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <?php $__currentLoopData = \App\Models\Permission::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-lg-12">
                                                        <div class="">
                                                            <div class="card-header">
                                                                <h3 class="mb-0 h6 text-center">
                                                                    <?php echo e(ucfirst($permission->name)); ?></h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="clearfix">
                                                                    <label class="aiz-switch aiz-switch-success mb-0">
                                                                        <input type="checkbox" name="permissions[]"
                                                                            value="<?php echo e($permission->name); ?>"
                                                                            <?php if($role->hasPermissionTo($permission->name)): ?> checked <?php endif; ?>>
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <hr>
                                <div class="col-md-12 p-2" style="text-align:right;">
                                    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-outline-danger mb-2 me-4">
                                        <span>Discard</span>
                                    </a>
                                    <button type="submit" class="btn btn-outline-success mb-2 me-4">Save</button>

                                </div>
                            </div>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('admin.default.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<script>
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
</script>
<?php $__env->startSection('script'); ?>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/admin/default/roles/edit.blade.php ENDPATH**/ ?>