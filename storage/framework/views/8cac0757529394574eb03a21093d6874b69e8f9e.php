

<?php $__env->startSection('content'); ?>
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('templete')); ?>/src/plugins/src/sweetalerts2/sweetalerts2.css">

    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('templete')); ?>/src/assets/css/light/elements/alert.css">

    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('templete')); ?>/src/assets/css/light/forms/switches.css">
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/users/account-setting.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/elements/alert.css">

    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/forms/switches.css">
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/tagify/custom-tagify.css" rel="stylesheet" type="text/css" />

    <!--  END CUSTOM STYLE FILE  -->

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('templete')); ?>/src/plugins/css/light/editors/markdown/simplemde.min.css">

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/editors/markdown/simplemde.min.css">

    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Expert</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create new service</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h3>Service Info</h3>
                        </div>
                    </div>
                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                            aria-labelledby="animated-underline-home-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info" action="<?php echo e(route('service.store')); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="info">
                                            <h6>Title of Service</h6>
                                            <hr>
                                            <div class="row ">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text" id="inputGroup-sizing"
                                                                    for="validationCustom01">Title of Service</span>
                                                                <input type="text" class="form-control "
                                                                    name="title"
                                                                    placeholder="<?php echo e(translate('Enter your service title')); ?>"
                                                                    aria-label="Enter your Bank name" required
                                                                    aria-describedby="nameLabel"
                                                                    data-msg="Please Enter your Bank name."
                                                                    data-error-class="u-has-error"
                                                                    data-success-class="u-has-success">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Service
                                                                    Image</span>
                                                                <input type="file" class="form-control" type="file"
                                                                    name="service_photo" aria-label="Sizing example input"
                                                                    aria-describedby="inputGroup-sizing-sm">
                                                            </div>
                                                        </div>


                                                        <div id="autosaving" class="row layout-spacing">
                                                            <div class="col-lg-12">
                                                                <div class="widget-header">
                                                                    <div class="row">
                                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                            <h4> About Service </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content widget-content-area">

                                                                    <textarea id="demo2" name="about_service" ></textarea>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Select
                                                                    Category</span>
                                                                <select class="form-select aiz-selectpicker"
                                                                    name="category_id">
                                                                    <?php $__currentLoopData = \App\Models\ProjectCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($category->id); ?>">
                                                                            <?php echo e($category->name); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="account-content">
                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <h5>Packages</h5>

                                                                    <div class="animated-underline-content">
                                                                        <ul class="nav nav-tabs" id="animateLine"
                                                                            role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="basic-tab"
                                                                                    data-bs-toggle="tab" href="#basic"
                                                                                    role="tab" aria-controls="basic"
                                                                                    aria-selected="true"> Basic</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="standard-tab"
                                                                                    data-bs-toggle="tab" href="#standard"
                                                                                    role="tab"
                                                                                    aria-controls="standard"
                                                                                    aria-selected="true">Standard</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="premium-tab"
                                                                                    data-bs-toggle="tab" href="#premium"
                                                                                    role="tab" aria-controls="premium"
                                                                                    aria-selected="true">Premium</a>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-content" id="animateLineContent-4">
                                                                <div class="tab-pane fade show active" id="basic"
                                                                    role="tabpanel" aria-labelledby="basic">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                                                                                <div class="info">
                                                                                    <h6>Basic Packages</h6>
                                                                                    <div class="row ">
                                                                                        <div class="col-lg-11 mx-auto">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group  mb-3 required">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing"
                                                                                                            for="validationCustom01">Price</span>
                                                                                                        <input
                                                                                                            type="number"
                                                                                                            class="form-control "
                                                                                                            name="basic_price"
                                                                                                            placeholder="<?php echo e(translate('Enter Price')); ?>"
                                                                                                            aria-label="Enter Basic Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Basic Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">Devilery
                                                                                                            Within</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="basic_delivery_time"
                                                                                                            placeholder="<?php echo e(translate('Enter Delivery Time')); ?>"
                                                                                                            aria-label="Enter Basic Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Basic Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">Revision
                                                                                                            Limit</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="basic_revision_limit"
                                                                                                            placeholder="<?php echo e(translate('Enter Revision Limit')); ?>"
                                                                                                            aria-label="Enter Basic Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Basic Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">What
                                                                                                            is included
                                                                                                            section</span>
                                                                                                        <input
                                                                                                            id="include_description"
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            name="basic_included_description[]">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="standard" role="tabpanel"
                                                                    aria-labelledby="standard">
                                                                    <div class="row">

                                                                        <div
                                                                            class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                                <div class="info">
                                                                                    <h6>Standard Package</h6>
                                                                                    <div class="row ">
                                                                                        <div class="col-lg-11 mx-auto">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group  mb-3 required">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing"
                                                                                                            for="validationCustom01">Price</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="standard_price"
                                                                                                            placeholder="<?php echo e(translate('Enter Price')); ?>"
                                                                                                            aria-label="Enter Standard Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Standard Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">Devilery
                                                                                                            Within</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="standard_delivery_time"
                                                                                                            placeholder="<?php echo e(translate('Enter Delivery Time')); ?>"
                                                                                                            aria-label="Enter Standard Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Standard Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">Revision
                                                                                                            Limit</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="standard_revision_limit"
                                                                                                            placeholder="<?php echo e(translate('Enter Revision Limit')); ?>"
                                                                                                            aria-label="Enter Standard Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Standard Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">What
                                                                                                            is included
                                                                                                            section</span>
                                                                                                        <input
                                                                                                            id="include_description"
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            name="standard_included_description[]">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="tab-pane fade" id="premium" role="tabpanel"
                                                                    aria-labelledby="premium">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                                <div class="info">
                                                                                    <h6>Premium Package</h6>
                                                                                    <div class="row ">
                                                                                        <div class="col-lg-11 mx-auto">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group  mb-3 required">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing"
                                                                                                            for="validationCustom01">Price</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="premium_price"
                                                                                                            placeholder="<?php echo e(translate('Enter Price')); ?>"
                                                                                                            aria-label="Enter Standard Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Standard Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">Devilery
                                                                                                            Within</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="premium_delivery_time"
                                                                                                            placeholder="<?php echo e(translate('Enter Delivery Time')); ?>"
                                                                                                            aria-label="Enter Standard Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Standard Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">Revision
                                                                                                            Limit</span>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control "
                                                                                                            name="premium_revision_limit"
                                                                                                            placeholder="<?php echo e(translate('Enter Revision Limit')); ?>"
                                                                                                            aria-label="Enter Standard Package Price"
                                                                                                            required
                                                                                                            aria-describedby="nameLabel"
                                                                                                            data-msg="Enter Standard Package Price"
                                                                                                            data-error-class="u-has-error"
                                                                                                            data-success-class="u-has-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6 mb-4">
                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <span
                                                                                                            class="input-group-text"
                                                                                                            id="inputGroup-sizing-sm">What
                                                                                                            is included
                                                                                                            section</span>
                                                                                                        <input
                                                                                                            id="include_description"
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            name="premium_included_description[]">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-primary transition-3d-hover mr-1"><?php echo e(translate('Post Service')); ?></button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  END CONTENT AREA  -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/assets/js/users/account-settings.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/tagify/tagify.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/tagify/custom-tagify.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

    <script src="<?php echo e(asset('templete')); ?>/src/assets/js/scrollspyNav.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/editors/markdown/simplemde.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/editors/markdown/custom-markdown.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/user/freelancer/projects/services/create.blade.php ENDPATH**/ ?>