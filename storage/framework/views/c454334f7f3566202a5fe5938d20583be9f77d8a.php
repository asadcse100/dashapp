

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
    <style>
        .Work_experience {
            padding: 2px;
        }
    </style>
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h3>Account Settings</h3>

                            <div class="animated-underline-content">
                                <ul class="nav nav-tabs" id="animateLine" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab"
                                            href="#animated-underline-home" role="tab"
                                            aria-controls="animated-underline-home" aria-selected="true"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg> Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="professional-tab" data-bs-toggle="tab"
                                            href="#professional" role="tab" aria-controls="professional"
                                            aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg> Professional</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience"
                                            role="tab" aria-controls="experience" aria-selected="true"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>Experience</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="educational-tab" data-bs-toggle="tab"
                                            href="#educational" role="tab" aria-controls="educational"
                                            aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg> Educational</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="portfolio-tab" data-bs-toggle="tab" href="#portfolio"
                                            role="tab" aria-controls="portfolio" aria-selected="true"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg> Portfolio</a>
                                    </li>

                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                            aria-labelledby="animated-underline-home-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <?php if($verification == null): ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="h6 font-weight-medium mb-0">
                                                    Identity Verification</h4>
                                            </div>
                                            <div class="card-body">
                                                <form action="<?php echo e(route('user_profile.verification_store')); ?>"
                                                    method="POST" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label class="form-label">Nid / Passport PDF</label>
                                                        <div class="input-group" data-toggle="aizuploader">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-soft-secondary font-weight-medium">
                                                                    Browse</div>
                                                            </div>
                                                            <div class="form-control file-amount">
                                                                Choose File</div>
                                                            <input type="hidden" name="verification_file"
                                                                class="selected-files">
                                                            <input type="hidden" name="verification_type"
                                                                value="identity_verification">
                                                        </div>
                                                        <div class="file-preview box"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="file-preview"></div>
                                                    </div>
                                                    <div class="text-right mt-4">
                                                        <!-- Buttons -->
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                        <!-- End Buttons -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php elseif($verification != null && $verification->verified == 0): ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="h6 font-weight-medium mb-0">
                                                    Identity Verification</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="alert alert-info" role="alert">
                                                    Your identity verification has not been approved yet.
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="h6 font-weight-medium mb-0">
                                                    Identity Verification</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="alert alert-success" role="alert">
                                                    Your identity verifed successfully.
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <form class="section general-info" action="<?php echo e(route('user_profile.bio_update')); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <input name="_method" type="hidden" value="PATCH">
                                        <?php echo csrf_field(); ?>
                                        <div class="info">
                                            <h6>General Information</h6>
                                            <hr>
                                            <div class="row ">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">

                                                            <div class="profile-image  mt-4 pe-md-4">
                                                                <p class="text-center">Profile Photo</p>
                                                                <div class="img-uploader-content">
                                                                    <input type="file" class="filepond"
                                                                        name="filepond"
                                                                        accept="image/png, image/jpeg, image/gif" />
                                                                    <input type="hidden" name="profile_photo"
                                                                        class="selected-files"
                                                                        value="<?php echo e($user_profile->user->photo); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="profile-image  mt-4 pe-md-4">
                                                                <p class="text-center">Cover Photo</p>
                                                                <div class="multiple-file-upload">
                                                                    <input type="file"
                                                                        class="filepond file-upload-multiple"
                                                                        name="filepond" multiple data-allow-reorder="true"
                                                                        data-max-file-size="3MB" data-max-files="1"
                                                                        accept="image/png, image/jpeg, image/gif" />
                                                                    <input type="hidden" name="cover_photo"
                                                                        class="selected-files"
                                                                        value="<?php echo e($user_profile->user->cover_photo); ?>">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="layout-top-spacing">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Username</label>
                                                                                <input type="text"
                                                                                    class="form-control mb-3"
                                                                                    id="username" name="username"
                                                                                    <?php if($user_profile->user->user_name != null): ?> value="<?php echo e($user_profile->user->user_name); ?>" <?php endif; ?>
                                                                                    placeholder="Username"
                                                                                    value="User-name" disabled>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Full
                                                                                    Name</label>
                                                                                <input type="text"
                                                                                    class="form-control mb-3"
                                                                                    name="name"
                                                                                    value="<?php echo e($user_profile->user->name); ?>"
                                                                                    placeholder="Enter your name"
                                                                                    aria-label="Enter your name" required
                                                                                    aria-describedby="nameLabel"
                                                                                    data-msg="Please enter your name."
                                                                                    data-error-class="u-has-error"
                                                                                    data-success-class="u-has-success">
                                                                                <small
                                                                                    class="form-text text-muted">Displayed
                                                                                    on your public profile.</small>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Gender</label>
                                                                                <select class="form-select mb-3"
                                                                                    name="gender" required
                                                                                    data-minimum-results-for-search="Infinity"
                                                                                    data-msg="Please select your gender."
                                                                                    data-error-class="u-has-error"
                                                                                    data-success-class="u-has-success">
                                                                                    <option value="male"
                                                                                        <?php if($user_profile->gender == 'male'): ?> selected <?php endif; ?>>
                                                                                        Male</option>
                                                                                    <option value="female"
                                                                                        <?php if($user_profile->gender == 'female'): ?> selected <?php endif; ?>>
                                                                                        Female</option>
                                                                                    <option value="other"
                                                                                        <?php if($user_profile->gender == 'other'): ?> selected <?php endif; ?>>
                                                                                        Other</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">

                                                                            <label for="email">Email</label>
                                                                            <div class="input-group mb-3">
                                                                                <input type="email" class="form-control"
                                                                                    name="email"
                                                                                    <?php if($user_profile->user->email != null): ?> value="<?php echo e($user_profile->user->email); ?>" <?php endif; ?>
                                                                                    placeholder="Enter your email address"
                                                                                    aria-label="Enter your email address"
                                                                                    required aria-describedby="emailLabel"
                                                                                    disabled>

                                                                                <?php if($user_profile->user->email_verified_at == null): ?>
                                                                                    <a class="input-group-text"
                                                                                        href="<?php echo e(route('email.verification')); ?>">
                                                                                        Send Verification Link
                                                                                    </a>
                                                                                <?php else: ?>
                                                                                    <span
                                                                                        class="input-group-text">Verified</span>
                                                                                <?php endif; ?>

                                                                            </div>

                                                                            <?php if($user_profile->user->email_verified_at == null): ?>
                                                                                <span
                                                                                    class="alert alert-danger d-block py-1 mt-1">Verify
                                                                                    your email address</span>
                                                                            <?php endif; ?>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Phone</label>
                                                                                <input type="text"
                                                                                    class="form-control mb-3"
                                                                                    name="phone"
                                                                                    <?php if($user_profile->user->address->phone != null): ?> value="<?php echo e($user_profile->user->address->phone); ?>" <?php endif; ?>
                                                                                    placeholder="Enter your contact number"
                                                                                    aria-label="Enter your contact number"
                                                                                    required aria-describedby="nameLabel"
                                                                                    data-msg="Enter your contact number."
                                                                                    data-error-class="u-has-error"
                                                                                    data-success-class="u-has-success">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Address</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="address"
                                                                                    <?php if($user_profile->user->address->street != null): ?> value="<?php echo e($user_profile->user->address->street); ?>" <?php endif; ?>
                                                                                    placeholder="Enter your street address"
                                                                                    required aria-describedby="nameLabel">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="country">Country</label>
                                                                                <select class="form-select mb-3"
                                                                                    id="country_id" name="country_id"
                                                                                    data-live-search="true" required
                                                                                    data-msg="Please select your country.">
                                                                                    <?php $__currentLoopData = \App\Models\Country::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($user_profile->user->address->country_id != null): ?>
                                                                                            <option
                                                                                                value="<?php echo e($country->id); ?>"
                                                                                                <?php if($user_profile->user->address->country_id == $country->id): ?> selected <?php endif; ?>>
                                                                                                <?php echo e($country->name); ?>

                                                                                            </option>
                                                                                        <?php else: ?>
                                                                                            <option
                                                                                                value="<?php echo e($country->id); ?>">
                                                                                                <?php echo e($country->name); ?>

                                                                                            </option>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="city">City</label>
                                                                                <select class="form-select mb-3"
                                                                                    name="city_id" id="city_id"
                                                                                    data-live-search="true" required>

                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label>Postal
                                                                                    Code</label>
                                                                                <input type="text" id="postal_code"
                                                                                    name="postal_code"
                                                                                    <?php if($user_profile->user->address->postal_code != null): ?> value="<?php echo e($user_profile->user->address->postal_code); ?>" <?php endif; ?>
                                                                                    required placeholder="('Eg. 1203')"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        

                                                                        <div class="col-md-12 mt-1">
                                                                            <div class="form-group text-end">
                                                                                <button type="submit"
                                                                                    class="btn btn-secondary">Save</button>
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
                                    </form>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info" action="<?php echo e(route('user_profile.bio_update')); ?>"
                                        method="POST">
                                        <input name="_method" type="hidden" value="PATCH">
                                        <?php echo csrf_field(); ?>
                                        <div class="info">
                                            <h5 class="">Social</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-linkedin mb-3">
                                                                <span class="input-group-text me-3" id="linkedin"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-linkedin">
                                                                        <path
                                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                                        </path>
                                                                        <rect x="2" y="9"
                                                                            width="4" height="12"></rect>
                                                                        <circle cx="4" cy="4"
                                                                            r="2"></circle>
                                                                    </svg></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Linkedin Username / Profile Link"
                                                                    aria-label="Username" name="linkedin"
                                                                    aria-describedby="linkedin"
                                                                    value="<?php echo $user_profile->linkedin; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-tweet mb-3">
                                                                <span class="input-group-text me-3" id="tweet"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-twitter">
                                                                        <path
                                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                                        </path>
                                                                    </svg></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Twitter Username / Profile Link"
                                                                    aria-label="Username" name="tweeter"
                                                                    aria-describedby="tweet"
                                                                    value="<?php echo $user_profile->tweeter; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-fb mb-3">
                                                                <span class="input-group-text me-3" id="fb"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-facebook">
                                                                        <path
                                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                                        </path>
                                                                    </svg></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Facebook Username / Profile Link"
                                                                    aria-label="Username" name="facebook"
                                                                    aria-describedby="fb" value="<?php echo $user_profile->facebook; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-github mb-3">
                                                                <span class="input-group-text me-3" id="github"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-github">
                                                                        <path
                                                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                                        </path>
                                                                    </svg></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Github Username / Profile Link"
                                                                    aria-label="Username" name="github"
                                                                    aria-describedby="github"
                                                                    value="<?php echo $user_profile->github; ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-1">
                                                        <div class="form-group text-end">
                                                            <button type="submit" class="btn btn-secondary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="professional" role="tabpanel" aria-labelledby="professional">
                            <div class="row">
                                <form class="section general-info" action="<?php echo e(route('user_profile.bio_update')); ?>"
                                    method="POST">
                                    <input name="_method" type="hidden" value="PATCH">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <div class="info">
                                            <h6 class="">Professional Information</h6>
                                            <hr>
                                            <div class="row mt-4">
                                                <div class="col-md-12 layout-spacing">
                                                    <label>Bio</label><br>
                                                    <small>Tell us about yourself in few sentences..</small>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="10" name="bio" required><?php echo e($user_profile->bio); ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="city">Specialist</label>
                                                        <select class="form-select mb-3" id="specialist"
                                                            name="specialist" data-live-search="true" required>
                                                            <?php $__currentLoopData = \App\Models\ProjectCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($category->id); ?>"
                                                                    <?php if($user_profile->specialist == $category->id): ?> selected <?php endif; ?>>
                                                                    <?php echo e($category->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <label for="country">Skill (Max
                                                            <?php echo e($user_profile->user->userPackage->skill_add_limit); ?>)</label>

                                                        <select class="form-control" multiple name="skills[]"
                                                            data-live-search="true" data-selected-text-format="count"
                                                            data-max-options="<?php echo e($user_profile->user->userPackage->skill_add_limit); ?>">
                                                            <?php if($user_profile->skills != null): ?>
                                                                <?php $__currentLoopData = \App\Models\Skill::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($skill->id); ?>"
                                                                        <?php if(in_array($skill->id, json_decode($user_profile->skills))): ?> selected <?php endif; ?>>
                                                                        <?php echo e($skill->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php else: ?>
                                                                <?php $__currentLoopData = \App\Models\Skill::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($skill->id); ?>">
                                                                        <?php echo e($skill->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Hourly Rate</label>
                                                        <input type="number" class="form-control" name="hourly_rate"
                                                            value="<?php echo e($user_profile->hourly_rate); ?>" placeholder="100"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-1">
                                                <div class="form-group text-end">
                                                    <button type="submit" class="btn btn-secondary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h6 class="">Work Experience</h6>
                                        <hr>
                                        <?php if(count($user_profile->user->workExperiences) > 0): ?>
                                            <div class="my-3">
                                                <div class="row gutters-10">
                                                    <?php $__currentLoopData = $user_profile->user->workExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $work_experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-6 p-2">
                                                            <div class="widget-content widget-content-area br-8">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <h4 class="h6 mb-1">
                                                                                <?php echo e($work_experience->designation); ?></h4>
                                                                            <ul class="list-unstyled text-secondary mb-0">
                                                                                <li class="text-primary">
                                                                                    <?php echo e($work_experience->company_name); ?>

                                                                                </li>
                                                                                <?php if($work_experience->present == '1'): ?>
                                                                                    <li><?php echo e(Carbon\Carbon::parse($work_experience->start)->toFormattedDateString()); ?>

                                                                                        - <?php echo e(translate('Present')); ?></li>
                                                                                <?php else: ?>
                                                                                    <li><?php echo e(Carbon\Carbon::parse($work_experience->start)->toFormattedDateString()); ?>

                                                                                        -
                                                                                        <?php echo e(Carbon\Carbon::parse($work_experience->end)->toFormattedDateString()); ?>

                                                                                    </li>
                                                                                <?php endif; ?>
                                                                                <li><?php echo e($work_experience->location); ?></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="absolute-top-right">
                                                                                <a href="<?php echo e(route('user_profile.work_experience_edit', encrypt($work_experience->id))); ?>"
                                                                                    class="mt-2 edit-profile btn btn-sm btn-icon btn-outline-success rounded-circle"
                                                                                    title="Edit">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-edit-3">
                                                                                        <path d="M12 20h9"></path>
                                                                                        <path
                                                                                            d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                                                        </path>
                                                                                    </svg></a>
                                                                                <a href="<?php echo e(route('user_profile.work_experience_destroy', encrypt($work_experience->id))); ?>"
                                                                                    class="btn btn-sm btn-icon btn-outline-danger rounded-circle"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title="Delete">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash-2">
                                                                                        <polyline points="3 6 5 6 21 6">
                                                                                        </polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                        <line x1="10"
                                                                                            y1="11" x2="10"
                                                                                            y2="17"></line>
                                                                                        <line x1="14"
                                                                                            y1="11" x2="14"
                                                                                            y2="17"></line>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if($user_profile->user->userPackage->job_exp_limit > count($user_profile->user->workExperiences)): ?>
                                            <form class="section general-info"
                                                action="<?php echo e(route('user_profile.work_experience_add')); ?>" method="POST"
                                                enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 mt-3">
                                                            <label>Company Name</label>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="company_name" placeholder="Company Name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">

                                                        <div class="col-md-4">
                                                            <label>Joining date</label>
                                                            <div class="form-group">
                                                                <input type="date" class="aiz-date-range form-control"
                                                                    name="start_date" placeholder="Select Date"
                                                                    data-single="true" data-show-dropdown="true"
                                                                    autocomplete="off" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label> Curnetly working here</label>
                                                            <div
                                                                class="form-check form-switch form-check-inline form-switch-info">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" name="present" id="form-switch-info">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Leaving Date</label>
                                                                <input type="date" class="aiz-date-range form-control"
                                                                    name="end_date" placeholder="Select Date"
                                                                    data-single="true" data-show-dropdown="true"
                                                                    autocomplete="off" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Designation</label>
                                                                <input type="text" class="form-control"
                                                                    name="designation" placeholder="Designation" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Company Website</label>
                                                                <input type="text" class="form-control"
                                                                    name="company_website" placeholder="Company Website">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Company Location</label>
                                                                <input type="text" class="form-control"
                                                                    name="location" placeholder="Company Location"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-1 mb-3">
                                                        <div class="form-group text-end">
                                                            <button class="btn btn-secondary">Add Work
                                                                Experience</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php else: ?>
                                            <div class="alert alert-info" role="alert">
                                                You have added maximum number of work experience according to your package.
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="educational">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h6 class="">Educational Information</h6>
                                        <hr>
                                        <?php if(count($user_profile->user->education_details) > 0): ?>
                                            <div class="my-3">
                                                <div class="row gutters-10">
                                                    <?php $__currentLoopData = $user_profile->user->education_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-6 p-2">
                                                            <div class="widget-content widget-content-area br-8">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <h4 class="h6 mb-1">
                                                                                <?php echo e($education->degree); ?></h4>
                                                                            <ul class="list-unstyled text-secondary mb-0">
                                                                                <li><?php echo e(translate('School Name')); ?>:
                                                                                    <?php echo e($education->school_name); ?></li>
                                                                                <li><?php echo e(translate('Pasing Year')); ?>:
                                                                                    <?php echo e($education->passing_year); ?></li>
                                                                                <li><?php echo e(translate('Country')); ?>:
                                                                                    <?php echo e($education->country->name); ?>

                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="absolute-top-right">
                                                                                <a href="<?php echo e(route('user_profile.education_info_edit', encrypt($education->id))); ?>"
                                                                                    class="mt-2 edit-profile btn btn-sm btn-icon btn-outline-success rounded-circle"
                                                                                    title="Edit">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-edit-3">
                                                                                        <path d="M12 20h9"></path>
                                                                                        <path
                                                                                            d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                                                        </path>
                                                                                    </svg></a>
                                                                                <a href="<?php echo e(route('user_profile.education_info_destroy', encrypt($education->id))); ?>"
                                                                                    class="btn btn-sm btn-icon btn-outline-danger rounded-circle"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title="Delete">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash-2">
                                                                                        <polyline points="3 6 5 6 21 6">
                                                                                        </polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                        <line x1="10"
                                                                                            y1="11" x2="10"
                                                                                            y2="17"></line>
                                                                                        <line x1="14"
                                                                                            y1="11" x2="14"
                                                                                            y2="17"></line>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>


                                        <form class="section general-info"
                                            action="<?php echo e(route('user_profile.education_info_add')); ?>" method="POST"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                                                        <div class="row gutters-10">
                                                            <div class="col-md-6 mt-3">
                                                                <label>Institute/School Name</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                        name="school_name" placeholder="School Name"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <label>Degree</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                        name="degree"
                                                                        placeholder="Ex. Bachelor of Science" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mt-3">
                                                                <label class="form-label">Passing Year</label>
                                                                <input type="number" class="form-control"
                                                                    name="passing_year" placeholder="Ex. 2008" required>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <label class="form-label">Country</label>
                                                                <select class="form-select mb-3" id="school_country_id"
                                                                    name="country_id" required data-live-search="true">
                                                                    <?php $__currentLoopData = \App\Models\Country::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($country->id); ?>">
                                                                            <?php echo e($country->name); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>




                                                            <div class="col-md-12 mt-1 mb-3">
                                                                <div class="form-group text-end">
                                                                    <button class="btn btn-secondary">Add
                                                                        Education
                                                                        Information</button>
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
                        <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h6 class="">Portfolio Information</h6>
                                        <hr>
                                        <?php if(count($user_profile->user->userPortfolios) > 0): ?>
                                            <div class="my-3">
                                                <div class="row gutters-10">
                                                    <?php $__currentLoopData = $user_profile->user->userPortfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-xxl-3 col-lg-4 col-sm-6 p-2">
                                                            <div class="widget-content widget-content-area br-8">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <img class="img-fit mw-100"
                                                                                src="<?php echo e(custom_asset($portfolio->photo)); ?>"
                                                                                height="240">
                                                                            <div class="card-body border-top p-3">
                                                                                <h2 class="h6 text-truncate">
                                                                                    <?php echo e($portfolio->name); ?></h2>
                                                                                <small
                                                                                    class="d-block text-secondary"><?php echo e($portfolio->type); ?></small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="absolute-top-right">
                                                                                <a href="<?php echo e(route('user_profile.portfolio_edit', encrypt($portfolio->id))); ?>"
                                                                                    class="mt-2 edit-profile btn btn-sm btn-icon btn-outline-success rounded-circle"
                                                                                    title="Edit">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-edit-3">
                                                                                        <path d="M12 20h9"></path>
                                                                                        <path
                                                                                            d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                                                        </path>
                                                                                    </svg></a>
                                                                                <a href="<?php echo e(route('user_profile.portfolio_destroy', encrypt($portfolio->id))); ?>"
                                                                                    class="btn btn-sm btn-icon btn-outline-danger rounded-circle"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title="Delete">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash-2">
                                                                                        <polyline points="3 6 5 6 21 6">
                                                                                        </polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                        <line x1="10"
                                                                                            y1="11" x2="10"
                                                                                            y2="17"></line>
                                                                                        <line x1="14"
                                                                                            y1="11" x2="14"
                                                                                            y2="17"></line>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if($user_profile->user->userPackage->portfolio_add_limit > count($user_profile->user->userPortfolios)): ?>
                                            <form class="section general-info"
                                                action="<?php echo e(route('user_profile.portfolio_add')); ?>" method="POST"
                                                enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                                                            <div class="row gutters-10">
                                                                <div class="col-md-6 mt-3">
                                                                    <label>Title</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            name="portfolio_name"
                                                                            placeholder="Portfolio title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mt-3">
                                                                    <label>Category</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            name="portfolio_category"
                                                                            placeholder="Portfolio category">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 mt-3">
                                                                    <label class="form-label">Details</label>
                                                                    <textarea class="form-control" rows="3" name="portfolio_details" required></textarea>
                                                                </div>
                                                                <div class="col-md-6 mt-3">
                                                                    <label class="form-label">Portfolio Image</label>
                                                                    <input type="file" class="form-control"
                                                                        type="file" name="portfolio_img"
                                                                        aria-label="Sizing example input"
                                                                        aria-describedby="inputGroup">
                                                                </div>




                                                                <div class="col-md-12 mt-1 mb-3">
                                                                    <div class="form-group text-end">
                                                                        <button class="btn btn-secondary">Add
                                                                            Portfolio</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php else: ?>
                                            <div class="alert alert-info" role="alert">
                                                You have added maximum number of portfolio according to your package.
                                            </div>
                                        <?php endif; ?>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
            // FilePondPluginImageEdit
        );

        // Select the file input and use
        // create() to turn it into a pond
        FilePond.create(
            document.querySelector('.file-upload-multiple')
        );

        // generate a random color (in HSL format, which I like to use)
        function getRandomColor() {
            function rand(min, max) {
                return min + Math.random() * (max - min);
            }

            var h = rand(1, 360) | 0,
                s = rand(40, 70) | 0,
                l = rand(65, 72) | 0;

            return 'hsl(' + h + ',' + s + '%,' + l + '%)';
        }

        function transformTag(tagData) {
            tagData.color = getRandomColor();
            tagData.style = "--tag-bg:" + tagData.color;

            if (tagData.value.toLowerCase() == 'shit')
                tagData.value = 's✲✲t'
        }

        tagify.on('add', function(e) {
            console.log(e.detail)
        })

        tagify.on('invalid', function(e) {
            console.log(e, e.detail);
        })

        var clickDebounce;

        tagify.on('click', function(e) {
            const {
                tag: tagElm,
                data: tagData
            } = e.detail;

            // a delay is needed to distinguish between regular click and double-click.
            // this allows enough time for a possible double-click, and noly fires if such
            // did not occur.
            clearTimeout(clickDebounce);
            clickDebounce = setTimeout(() => {
                tagData.color = getRandomColor();
                tagData.style = "--tag-bg:" + tagData.color;
                tagify.replaceTag(tagElm, tagData);
            }, 200);
        })

        tagify.on('dblclick', function(e) {
            // when souble clicking, do not change the color of the tag
            clearTimeout(clickDebounce);
        })
    </script>

    <script type="text/javascript">
        function get_city_by_country() {
            var country_id = $('#country_id').val();
            $.post('<?php echo e(route('cities.get_city_by_country')); ?>', {
                _token: '<?php echo e(csrf_token()); ?>',
                country_id: country_id
            }, function(data) {
                $('#city_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#city_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#city_id > option").each(function() {
                    if (this.value == '<?php echo e($user_profile->user->address->city_id); ?>') {
                        $("#city_id").val(this.value).change();
                    }
                });

            });
        }

        $(document).ready(function() {
            get_city_by_country();
        });

        $('#country_id').on('change', function() {
            get_city_by_country();
        });

        $("#username").keyup(function() {
            var username = $("#username").val().trim();
            if (username != '') {
                $.post('<?php echo e(route('user_name_check')); ?>', {
                    _token: '<?php echo e(csrf_token()); ?>',
                    username: username
                }, function(data) {
                    $('#uname_response').html(data);
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/user/freelancer/setting/profile.blade.php ENDPATH**/ ?>