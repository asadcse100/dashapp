

<?php $__env->startSection('content'); ?>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo e(asset('templete')); ?>/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/dashboard/dash_2.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/users/user-profile.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
    <link rel="stylesheet" type="text/css"
    href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/clipboard/custom-clipboard.css">

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <div class="row layout-top-spacing">
                <div class="col-md-12">
                    <?php
                        $verification = \App\Models\Verification::where('user_id', Auth::user()->id)
                            ->where('type', 'identity_verification')
                            ->first();
                    ?>
                    <?php if($verification == null || !$verification->verified): ?>
                        <div class="alert alert-danger">
                            <?php echo e(translate('Please verify your identity')); ?>. <a href="<?php echo e(route('user.profile')); ?>"
                                class="alert-link"><?php echo e(translate('Verify Now')); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if(Auth::user()->email_verified_at == null): ?>
                        <div class="alert alert-danger">
                            <?php echo e(translate('Please verify your Email')); ?>. <a href="<?php echo e(route('user.profile')); ?>"
                                class="alert-link"><?php echo e(translate('Verify Now')); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty(Auth::user()->userPackage->package_invalid_at) &&
                        Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse(Auth::user()->userPackage->package_invalid_at), false) < 8): ?>
                        <div class="alert alert-danger">
                            <?php echo e(translate('Please renew/upgrade your package. Your current package will expire soon')); ?>.
                            <a href="<?php echo e(route('select_package')); ?>" class="alert-link"><?php echo e(translate('Upgrade Now')); ?></a>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="nk-refwg-invite layout-spacing">
                    <div class="nk-refwg-head g-3">
                        <div class="nk-refwg-title">
                            <h5 class="title "><?php echo e(__(sys_settings('referral_invite_title', 'Refer Us & Earn'))); ?></h5>
                            <?php if(sys_settings('referral_invite_text')): ?>
                                <div class="title-sub">
                                    <?php echo e(__(sys_settings('referral_invite_text', 'Use the below link to invite your friends.'))); ?>

                                </div><br>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                    <div class="clipboard">
                        <form class="form-horizontal">
                            <div class="clipboard-input">
                                <input type="text" class="form-control" id="copy-basic-input"
                                    value="<?php echo e(route('auth.invite', ['ref' => get_ref_code(Auth::user()->id)])); ?>">
                                <div class="copy-icon jsclipboard cbBasic" data-bs-trigger="click" title="Copied"
                                    data-clipboard-target="#copy-basic-input"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-copy">
                                        <rect x="9" y="9" width="13" height="13" rx="2"
                                            ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>



                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-header">
                                <div class="w-info">
                                    <h6 class="value">Total Completed Projects</h6>
                                </div>

                            </div>

                            <div class="w-content">

                                <div class="w-info">
                                    <p class="value"><?php
                                        $completedProjects = 0;
                                        foreach (Auth::user()->bids as $key => $projectUser) {
                                            if ($projectUser->project != null && $projectUser->project->closed) {
                                                $completedProjects++;
                                            }
                                        }
                                    ?>
                                    <div class="h3 fw-700"><?php echo e($completedProjects); ?></div>
                                </div>

                            </div>

                            <div class="w-progress-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="">
                                    <div class="w-icon">
                                        <p>0%</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-header">
                                <div class="w-info">
                                    <h6 class="value">Running Projects</h6>
                                </div>

                            </div>

                            <div class="w-content">

                                <div class="w-info">
                                    <p class="value"><?php
                                        $onGoingProjects = 0;
                                        foreach (Auth::user()->projectUsers as $key => $projectUser) {
                                            if ($projectUser->project != null && !$projectUser->project->closed) {
                                                $onGoingProjects++;
                                            }
                                        }
                                    ?></p>
                                    <div class="h3 fw-700"><?php echo e($onGoingProjects); ?></div>
                                </div>

                            </div>

                            <div class="w-progress-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="">
                                    <div class="w-icon">
                                        <p>0%</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-three">
                        <div class="widget-content">
                            <div class="account-box">
                                <div class="info">
                                    <div class="inv-title">
                                        <h5 class="">Total Balance</h5>
                                    </div>
                                    <div class="inv-balance-info">
                                        <p class="inv-balance">
                                            <?php echo e(single_price(\App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->sum('freelancer_profit'))); ?>

                                        </p>
                                        <span class="inv-stats balance-credited"></span>
                                    </div>
                                </div>
                                <div class="acc-action">

                                    <a href="javascript:void(0);" class="btn-add-balance">Withdraw Balance</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Update by Bashir -->
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">This Month Earnings</h5>
                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="renvenue"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu left" aria-labelledby="renvenue"
                                        style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">
                            <div id="revenueMonthly"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Sales by Category</h5>
                        </div>
                        <div class="widget-content">
                            <div id="chart-2" class=""></div>
                        </div>
                    </div>
                </div>

                <!-- End Update by Bashir -->

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row widget-statistic">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading">
                                    <div class="">
                                        <div class="card-header">
                                            <h6 class="mb-0"><?php echo e(translate('Current Package')); ?></h6>
                                        </div>
                                        <hr>
                                        <div class="card-body text-center">
                                            <?php if(!empty(Auth::user()->userPackage->package->badge)): ?>
                                                <img src=" <?php echo e(asset('profile/badge/' . Auth::user()->userPackage->package->badge)); ?>"
                                                    class="img-fluid mb-4 h-50px" style="width: 200px; height: 200px;">
                                            <?php endif; ?>
                                            <h4 class="fw-600 mb-3 text-primary">
                                                <?php if(!empty(Auth::user()->userPackage->package->name)): ?>
                                                    <?php echo e(Auth::user()->userPackage->package->name); ?>

                                                <?php endif; ?>
                                            </h4>
                                            <p class="mb-1 text-muted">
                                                <?php echo e(translate('Remaining Fixed Projects bids')); ?> -
                                                <?php if(!empty(Auth::user()->userPackage->fixed_limit)): ?>
                                                    <?php echo e(Auth::user()->userPackage->fixed_limit); ?>

                                                <?php endif; ?>
                                            </p>
                                            <p class="text-muted mb-1">
                                                <?php echo e(translate('Remaining Long Term Projects bids')); ?> -
                                                <?php if(!empty(Auth::user()->userPackage->long_term_limit)): ?>
                                                    <?php echo e(Auth::user()->userPackage->long_term_limit); ?>

                                                <?php endif; ?>
                                            </p>
                                            <p class="text-muted mb-4"><?php echo e(translate('Remaining Service')); ?> -
                                                <?php if(!empty(Auth::user()->userPackage->service_limit)): ?>
                                                    <?php echo e(Auth::user()->userPackage->service_limit); ?>

                                                <?php endif; ?>
                                            </p>
                                            <a href="<?php echo e(route('select_package')); ?>"
                                                class="btn btn-primary d-inline-block"><?php echo e(translate('Upgrade')); ?></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading">
                                    <div class="">
                                        <div class="card-header">
                                            <h6 class="mb-0"><?php echo e(translate('Current Package Summary')); ?></h6>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->fixed_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Fixed Projects bids')); ?> - <span class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->fixed_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->fixed_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->long_term_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Long Term Projects bids')); ?> - <span
                                                            class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->long_term_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->long_term_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->skill_add_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Skill Adding Limit')); ?> - <span class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->skill_add_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->skill_add_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->portfolio_add_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Portfolio Adding Limit')); ?> - <span
                                                            class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->portfolio_add_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->portfolio_add_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->bookmark_project_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Project Bookmark Limit')); ?> - <span
                                                            class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->bookmark_project_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->bookmark_project_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->job_exp_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Job Experience Add Limit')); ?> - <span
                                                            class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->job_exp_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->job_exp_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->bio_text_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Bio Word Limit')); ?> - <span class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->bio_text_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->bio_text_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->service_limit)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Service Limit')); ?> - <span class="fw-700">
                                                            <?php if(!empty(Auth::user()->userPackage->package->service_limit)): ?>
                                                                <?php echo e(Auth::user()->userPackage->package->service_limit); ?>

                                                            <?php endif; ?>
                                                        </span></span>
                                                </li>
                                                <li class=" py-2">
                                                    <?php if(!empty(Auth::user()->userPackage->package->following_status)): ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                            <i class="lni lni-checkmark-circle"></i>
                                                        </span>
                                                    <?php else: ?>
                                                        <span
                                                            class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                            <i class="lni lni-timer"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span><?php echo e(translate('Client Following option')); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading">
                                    <div class="">
                                        <div class="card-header">
                                            <h6 class="mb-0"><?php echo e(translate('Suggested Package')); ?></h6>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <ul class="list-group ">
                                                <?php $__currentLoopData = \App\Models\Package::freelancer()->active()->get()->except(Auth::user()->profile->package_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="list-group-item">
                                                        <a href="<?php echo e(route('select_package')); ?>"
                                                            class="d-flex align-items-center text-inherit">
                                                            <img src="<?php echo e(asset('profile/badge/' . $package->badge)); ?>"
                                                                class="img-fluid mr-4 h-70px">
                                                            <span class="">
                                                                <h4 class="h6 mb-0"><?php echo e($package->name); ?></h4>
                                                                <span
                                                                    class=" fs-15 fw-700 text-primary"><?php echo e(single_price($package->price)); ?></span>
                                                                <span
                                                                    class="fs-10 text-secondary">/<?php echo e($package->number_of_days); ?>

                                                                    <?php echo e(translate('days')); ?></span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-followers">
                        <div class="widget-heading">
                            <div class="">
                                <div class="card-header">
                                    <h6 class="mb-0"><?php echo e(translate('Running Projects')); ?></h6>
                                </div>
                                <hr>
                                <div class="c-scrollbar-light card-body overflow-auto" style="max-height: 365px">
                                    <ul class="list-group list-group-flush">
                                        <?php $__currentLoopData = Auth::user()->projectUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $projectUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($projectUser->project != null && !$projectUser->project->closed): ?>
                                                <li class="list-group-item px-0">
                                                    <a href="<?php echo e(route('project.details', $projectUser->project->slug)); ?>"
                                                        class="text-inherit d-flex align-items-center">
                                                        <span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
                                                            <?php if($projectUser->project->client->photo != null): ?>
                                                                <img
                                                                    src="<?php echo e(asset('profile/photos/' . $projectUser->project->client->photo)); ?>">
                                                            <?php else: ?>
                                                                <img
                                                                    src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>">
                                                            <?php endif; ?>
                                                        </span>
                                                        <span
                                                            class="flex-grow-1 text-truncate-2"><?php echo e($projectUser->project->name); ?></span>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-followers">
                        <div class="widget-heading">
                            <div class="">
                                <div class="card-header">
                                    <h6 class="mb-0"><?php echo e(translate('Suggested Projects')); ?></h6>
                                </div>
                                <hr>
                                <div class="card-body px-0">
                                    <div class="aiz-auto-scroll c-scrollbar-light px-3"
                                        style="max-height: 340px;overflow-y: scroll;">
                                        <ul class="list-group list-group-flush">
                                            <?php $__currentLoopData = \App\Models\Project::biddable()->notcancel()->open()->where('private', '0')->latest()->get()->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="list-group-item px-0">
                                                    <a href="<?php echo e(route('project.details', $project->slug)); ?>"
                                                        class="text-inherit d-flex align-items-center">
                                                        <span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
                                                            <?php if($project->client->photo != null): ?>
                                                                <img
                                                                    src=" <?php echo e(asset('profile/photos/' . $project->client->photo)); ?>">
                                                            <?php else: ?>
                                                                <img
                                                                    src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>">
                                                            <?php endif; ?>
                                                        </span>
                                                        <span
                                                            class="flex-grow-1 text-truncate-2"><?php echo e($project->name); ?></span>
                                                        <span class="flex-shrink-0 ml-3">
                                                            <span
                                                                class="d-block opacity-50 fs-10"><?php echo e(translate('Budget')); ?></span>
                                                            <span
                                                                class="fs-15"><?php echo e(single_price($project->price)); ?></span>
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/assets/js/dashboard/dash_1.js"></script>

    <script src="<?php echo e(asset('templete')); ?>/src/assets/js/dashboard/dash_2.js"></script>
    <script src="<?php echo e(asset('templete')); ?>/src/plugins/src/clipboard/clipboard.min.js"></script>
<script src="<?php echo e(asset('templete')); ?>/src/plugins/src/clipboard/custom-clipboard.min.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/frontend/default/user/freelancer/dashboard.blade.php ENDPATH**/ ?>