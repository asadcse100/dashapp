

<?php $__env->startSection('css'); ?>
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="layout-top-spacing">
            </div>

            <div class="row layout-top-spacing">
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="mb-0 h6"><?php echo e(translate('General Settings')); ?></h1>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="<?php echo e(route('general-config.store')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="row mb-4 layout-spacing">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                                            <div class="widget-content widget-content-area blog-create-section">
                                                <div class="card">
                                                    <div class="row p-4">
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Name</span>
                                                                <input type="text" name="site_name" class="form-control"
                                                                    value="<?php echo e(get_setting('site_name')); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Logo-White</span>
                                                                <input class="form-control file-upload-input" type="file"
                                                                    id="formFile" name="system_logo_white"
                                                                    value="<?php echo e(get_setting('system_logo_white')); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Logo-Black</span>
                                                                <input class="form-control file-upload-input" type="file"
                                                                    id="formFile" name="system_logo_black"
                                                                    value="<?php echo e(get_setting('system_logo_black')); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Timezone</span>
                                                                <select name="timezone"
                                                                    class="form-control aiz-selectpicker"
                                                                    data-live-search="true">
                                                                    <?php $__currentLoopData = timezones(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($value); ?>"
                                                                            <?php if(app_timezone() == $value): ?> selected <?php endif; ?>>
                                                                            <?php echo e($key); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Admin login page
                                                                    background</span>
                                                                <input class="form-control file-upload-input" type="file"
                                                                    id="formFile"
                                                                    value="<?php echo e(\App\Utility\SettingsUtility::get_settings_value('admin_login_background')); ?>"
                                                                    class="selected-files">
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-3 text-right">
                                                            <button type="submit"
                                                                class="btn btn-outline-primary btn-sm mb-2 me-4"><?php echo e(translate('Update')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card-body -->
    </div> <!-- end card-->



    <!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('admin.default.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/admin/default/system_configurations/general_config/index.blade.php ENDPATH**/ ?>