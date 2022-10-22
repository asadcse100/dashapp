

<?php $__env->startSection('content'); ?>
    
    <div class="mt-n5">
        <div class="container layout-top-spacing p-2">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center d-block d-md-flex">

                        <div class="media-body d-lg-flex justify-content-between align-items-center">
                            <div class="mr-5 text-center text-md-left mb-4 mb-md-0">
                                <span class="avatar flex-shrink-0 mr-4">
                                    <?php if($freelancer->photo != null): ?>
                                        <img src="<?php echo e(custom_asset($freelancer->photo)); ?>" alt="<?php echo e($freelancer->name); ?>">

                                        <?php if(Cache::has('user-is-online-' . $freelancer->id)): ?>
                                            <div class="avatar avatar-xl avatar-indicators avatar-online">
                                                <img src="<?php echo e(custom_asset($freelancer->photo)); ?>"
                                                    alt="<?php echo e($freelancer->name); ?>">
                                            </div>
                                        <?php else: ?>
                                            <div class="avatar avatar-xl avatar-indicators avatar-offline">
                                                <img src="<?php echo e(custom_asset($freelancer->photo)); ?>"
                                                    alt="<?php echo e($freelancer->name); ?>">
                                            </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php if(Cache::has('user-is-online-' . $freelancer->id)): ?>
                                            <div class="avatar avatar-xl avatar-indicators avatar-online">
                                                <img alt="avatar"
                                                    src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                                    alt="<?php echo e($freelancer->name); ?>" class="rounded-circle" />
                                            </div>
                                        <?php else: ?>
                                            <div class="avatar avatar-xl avatar-indicators avatar-offline">
                                                <img alt="avatar"
                                                    src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                                    alt="<?php echo e($freelancer->name); ?>" class="rounded-circle" />
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </span>

                            </div>
                            <div class="mr-3 mb-4 mb-lg-0 ">
                                <h1 class="h5 mb-1 fw-700"><?php echo e($freelancer->name); ?></h1>
                                <?php if($freelancer->specialistAt != null): ?>
                                    <p class="opacity-60"><?php echo e($freelancer->specialistAt->name); ?></p>
                                <?php endif; ?>
                                <div
                                    class="d-flex justify-content-center justify-content-md-between text-secondary fs-12 mb-3">
                                    <div class="mr-2">
                                        <?php if(!empty(getAverageRating($freelancer->id))): ?>
                                            <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                <?php echo e(formatRating(getAverageRating($freelancer->id))); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="bg-secondary rounded text-white px-1 mr-1 fs-10">
                                                <?php echo e(formatRating(getAverageRating($freelancer->id))); ?>

                                            </span>
                                        <?php endif; ?>
                                        <span class="rating rating-sm">
                                            <?php echo e(renderStarRating(getAverageRating($freelancer->id))); ?>

                                        </span>
                                        <span>
                                            (<?php echo e(getNumberOfReview($freelancer->id)); ?> <?php echo e(translate('Reviews')); ?>)
                                        </span>
                                    </div>
                                    <div>
                                        <i class="las la-map-marker opacity-50"></i>
                                        <?php if($freelancer->address != null && $freelancer->address->city != null && $freelancer->address->country != null): ?>
                                            <?php if($freelancer->address != null && $freelancer->address->city != null && $freelancer->address->country != null): ?>
                                                <span><?php echo e($freelancer->address->city->name); ?>,
                                                    <?php echo e($freelancer->address->country->name); ?></span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="text-lg-right d-flex justify-content-between align-items-end d-lg-block">
                                <div class="mb-lg-4">
                                    <h4 class="mb-0 fw-900"><?php echo e(single_price($freelancer->profile->hourly_rate)); ?></h4>
                                    <div class="small text-secondary">
                                        <span><?php echo e(translate('per Hour')); ?></span>
                                    </div>
                                </div>
                                <a class="btn btn-primary"
                                    href="<?php echo e(route('invition_for_hire_freelancer', $freelancer->user_name)); ?>"><?php echo e(translate('Hire Me')); ?></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row gutters-10">
                <div class="col-xxl-9 col-lg-8 order-1 order-lg-0">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0"><?php echo e($freelancer->name); ?>'s <?php echo e(translate('Bio')); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="opacity-70 lh-1-8 fs-15"><?php echo e($freelancer->profile->bio); ?></div>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0"><?php echo e($freelancer->name); ?>'s <?php echo e(translate('Portfolio')); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-10">
                                <?php $__currentLoopData = $freelancer->userPortfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <a class="card border-dark mb-3 shadow-none hov-overlay overflow-hidden">
                                            <?php if(!empty($portfolio->photo)): ?>
                                                <img class="card-img-top" src="<?php echo e(custom_asset($portfolio->photo)); ?>"
                                                    alt="Image Description">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('assets/frontend/default/img/hotel/room/3.jpg')); ?>">
                                            <?php endif; ?>
                                            <div class="absolute-full overlay c-pointer" data-toggle="modal"
                                                data-target="#portfolio-modal-<?php echo e($key); ?>">
                                                <span class="absolute-center">
                                                    <i class="las la-eye text-white la-2x"></i>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <h2 class="h6 mb-0 text-truncate"><?php echo e($portfolio->name); ?></h2>
                                                <small class="text-secondary"><?php echo e($portfolio->type); ?></small>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="modal fade" id="portfolio-modal-<?php echo e($key); ?>">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h6"><?php echo e($portfolio->name); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <?php if(!empty($portfolio->photo)): ?>
                                                                <img class="img-fluid mb-3"
                                                                    src="<?php echo e(custom_asset($portfolio->photo)); ?>"
                                                                    alt="<?php echo e($portfolio->name); ?>">
                                                            <?php else: ?>
                                                                <img
                                                                    src="<?php echo e(asset('assets/frontend/default/img/hotel/room/3.jpg')); ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <h3 class="h5 mb-3"><?php echo e(translate('About the project')); ?></h3>
                                                            <div class="text-muted">
                                                                <?php echo e($portfolio->description); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0"><?php echo e($freelancer->name); ?>'s <?php echo e(translate('Services')); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-10">
                                <?php $__currentLoopData = $freelancer->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4">
                                        <div class="card border-dark">
                                            <a href="<?php echo e(route('service.show', $service->slug)); ?>">
                                                <?php if(!empty($service->image)): ?>
                                                    <img src="<?php echo e(asset('storage/uploads/services/' . $service->image)); ?>"
                                                        class="card-img-top" alt="<?php echo e($service->slug); ?>" height="212">
                                                <?php else: ?>
                                                    <img class="card-img-top"
                                                        src="<?php echo e(asset('assets/frontend/default/img/hotel/room/3.jpg')); ?>">
                                                <?php endif; ?>
                                            </a>
                                            <div class="card-body">

                                                <a href="<?php echo e(route('service.show', $service->slug)); ?>" class="text-dark">
                                                    <h5 class="card-title">
                                                        <?php echo e(\Illuminate\Support\Str::limit($service->title, 40, $end = '...')); ?>

                                                    </h5>
                                                </a>
                                            </div>
                                            <div class="card-footer justify-content-between">
                                                <span>STARTING AT
                                                    <?php echo e(single_price($service->service_packages[0]->service_price)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0"><?php echo e($freelancer->name); ?>'s <?php echo e(translate('Reviews')); ?></h4>
                        </div>
                        <div class="card-body">

                            <p class="text-muted mb-4"><?php echo e(translate('Showing')); ?>

                                <?php echo e(getNumberOfReview($freelancer->id)); ?> <?php echo e(translate('reviews')); ?></p>

                            <div class="mb-4">
                                <ul class="list-group list-group-flush">
                                    <?php $__currentLoopData = \App\Models\Review::where('published', 1)->where('reviewed_user_id', $freelancer->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <span class="avatar avatar-md m-3">

                                                        <img src="<?php echo e(custom_asset(\App\Models\User::find($review->reviewer_user_id)->photo)); ?>"
                                                            class="rounded-circle">
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <div>
                                                            <?php if($review->project): ?>
                                                                <h4 class="fw-600 fs-14 mb-1 lh-1-6">
                                                                    <?php echo e($review->project->name); ?></h4>
                                                            <?php else: ?>
                                                                <h4 class="fw-600 fs-14 mb-1 lh-1-6">
                                                                    <?php echo e(translate('N/A')); ?></h4>
                                                            <?php endif; ?>
                                                            <div class="">
                                                                <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                                    <?php echo e($review->rating); ?>

                                                                </span>
                                                                <span class="rating rating-sm">
                                                                    <?php echo e(renderStarRating($review->rating)); ?>

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ml-4">
                                                            <span
                                                                class="text-muted ml-2"><?php echo e(Carbon\Carbon::parse($review->created_at)->toFormattedDateString()); ?></span>
                                                        </div>
                                                    </div>
                                                    <p class="font-italic">
                                                        "<?php echo e($review->review); ?>"
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0"><?php echo e($freelancer->name); ?>'s <?php echo e(translate('Experiences')); ?></h4>
                        </div>

                        <div class="card-body">
                            <div class="row gutters-10">
                                <?php $__currentLoopData = $freelancer->workExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4">
                                        <div class="card border-dark">

                                            <div class="my-3 p-3">
                                                <h4 class="fw-600 fs-14 mb-1"><?php echo e($experience->designation); ?></h4>
                                                <div class="list-unstyled text-secondary mb-0">
                                                    <div>
                                                        <h6><a class="text-primary"
                                                                href="<?php echo e($experience->company_website); ?>"
                                                                target="_blank"><?php echo e($experience->company_name); ?></a>
                                                        </h6>
                                                    </div>
                                                    <?php if($experience->present == '1'): ?>
                                                        <div>
                                                            <?php echo e(Carbon\Carbon::parse($experience->start)->toFormattedDateString()); ?>

                                                            - <?php echo e(translate('Present')); ?></div>
                                                    <?php else: ?>
                                                        <div>
                                                            <?php echo e(Carbon\Carbon::parse($experience->start)->toFormattedDateString()); ?>

                                                            -
                                                            <?php echo e(Carbon\Carbon::parse($experience->end)->toFormattedDateString()); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="small"><?php echo e($experience->location); ?></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>

                    </div>
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0"><?php echo e($freelancer->name); ?>'s <?php echo e(translate('Education')); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-10">
                                <?php $__currentLoopData = $freelancer->education_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4">
                                        <div class="card border-dark">

                                            <div class="my-3 p-3">
                                                <h4 class="fw-600 mb-1 fs-15"><?php echo e($education->degree); ?></h4>
                                                <div class="list-unstyled text-secondary mb-0">
                                                    <div>
                                                        <h6 class="mb-0 text-muted"><?php echo e($education->school_name); ?>,
                                                            <?php echo e($education->country->name); ?></h6>
                                                    </div>
                                                    <div class="small"><?php echo e($education->passing_year); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <?php if($freelancer->badges != null): ?>
                                <div class="mb-5">
                                    <h6 class="separator text-left mb-4 fw-600"><span
                                            class="pr-3"><?php echo e(translate('Badges')); ?></span></h6>
                                    <div class="">
                                        <?php $__currentLoopData = $freelancer->badges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user_badge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($user_badge->badge != null): ?>
                                                <span class="avatar avatar-square avatar-xxs"
                                                    title="<?php echo e($user_badge->badge->name); ?>"><img
                                                        src="<?php echo e(custom_asset($user_badge->badge->icon)); ?>"></span>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="mb-5">
                                <h6 class="separator text-left mb-4 fw-600"><span
                                        class="pr-3"><?php echo e(translate('Skills')); ?></span></h6>
                                <div>

                                    <?php if($freelancer->profile->skills != null): ?>
                                        <?php $__currentLoopData = json_decode($freelancer->profile->skills, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skill_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $skill = \App\Models\Skill::find($skill_id);
                                            ?>
                                            <?php if($skill): ?>
                                                <div class="btn-group" role="group" aria-label="Default button group">
                                                    <button type="button"
                                                        class="btn btn-outline-dark btn-sm p-1"><?php echo e($skill->name); ?></button>
                                                </div>
                                                
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="">
                                <h6 class="separator text-left mb-4 fw-600"><span
                                        class="pr-3"><?php echo e(translate('Verifications')); ?></span></h6>
                                <div>
                                    <ul class="list-unstyled">
                                        <?php
                                            $verification = \App\Models\Verification::where('user_id', $freelancer->id)
                                                ->where('type', 'identity_verification')
                                                ->first();
                                        ?>
                                        <?php if($verification == null || !$verification->verified): ?>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-user text-secondary la-2x mr-2"></i>
                                                <span class="fs-13"><?php echo e(translate('Identity Verification')); ?></span>
                                                <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                            </li>
                                        <?php else: ?>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-user text-success la-2x mr-2"></i>
                                                <span class="fs-13"><?php echo e(translate('Identity Verified')); ?></span>
                                                <i class="las la-check text-success la-2x ml-auto"></i>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($freelancer->email_verified_at == null): ?>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-envelope text-secondary la-2x mr-2"></i>
                                                <span class="fs-13"><?php echo e(translate('Email Verification')); ?></span>
                                                <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                            </li>
                                        <?php else: ?>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-envelope text-success la-2x mr-2"></i>
                                                <span class="fs-13"><?php echo e(translate('Email Verified')); ?></span>
                                                <i class="las la-check text-success la-2x ml-auto"></i>
                                            </li>
                                        <?php endif; ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="my-2">
                        <?php if(Auth::check() &&
                            ($bookmarked_freelancer = \App\Models\BookmarkedFreelancer::where('user_id', auth()->user()->id)->where('freelancer_user_id', $freelancer->id)->first()) != null): ?>
                            <a class="btn btn-block btn-primary confirm-alert" href="javascript:void(0)"
                                data-href="<?php echo e(route('bookmarked-freelancers.destroy', $bookmarked_freelancer->id)); ?>"
                                data-target="#bookmark-remove-modal">
                                <i class="las la-bookmark"></i>
                                <span><?php echo e(translate('Remove Bookmark')); ?></span>
                            </a>
                        <?php else: ?>
                            <a class="btn btn-block btn-outline-primary"
                                href="<?php echo e(route('bookmarked-freelancers.store', encrypt($freelancer->id))); ?>">
                                <i class="las la-bookmark"></i>
                                <span><?php echo e(translate('Bookmark Freelancer')); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('frontend.default.partials.bookmark_remove_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::guest() ? 'layouts.appindex' : 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/freelancer-single.blade.php ENDPATH**/ ?>