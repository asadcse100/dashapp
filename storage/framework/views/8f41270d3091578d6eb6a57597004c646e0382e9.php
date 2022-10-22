

<?php $__env->startSection('content'); ?>
    <section class="py-4 py-lg-5">

        <div class="container">
            <div class="">
                <div class="middle-content container-xxl p-0">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <?php if($keyword != null): ?>
                            <div class="row">
                                <div class="col-xl-8 offset-xl-2 text-center">
                                    <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400"><?php echo e(translate('Total')); ?> <span
                                            class="fw-600"><?php echo e($total); ?></span>
                                        <?php echo e(translate('freelancers found for')); ?>

                                        <span class="fw-600"><?php echo e($keyword); ?></span>
                                    </h1>
                                </div>
                            </div>
                        <?php endif; ?>
                        <form id="freelancer-filter-form" action="" method="GET">
                            <div class="row gutters-10">
                                <div class="col-xl-3 col-lg-4">
                                    <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
                                        <div class="card rounded-0 rounded-lg collapse-sidebar c-scrollbar-light">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6"><?php echo e(translate('Filter By')); ?></h5>
                                                <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb"
                                                    data-toggle="class-toggle" data-target=".aiz-filter-sidebar"
                                                    type="button">
                                                    <i class="las la-times la-2x"></i>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                
                                                <div class="">
                                                    <h6
                                                        class="separator text-left mb-3 fs-12 text-uppercase text-secondary">
                                                        <span class="pr-3"><?php echo e(translate('Rating')); ?></span>
                                                    </h6>
                                                    <div class="aiz-radio-list">
                                                        <label class="aiz-radio">
                                                            <input type="radio" name="rating" value=""
                                                                onchange="applyFilter()"
                                                                <?php if($rating == ''): ?> checked <?php endif; ?>>
                                                            <?php echo e(translate('Any rating')); ?>

                                                            <span class="aiz-rounded-check"></span>
                                                            <span class="float-right text-secondary fs-12"></span>
                                                        </label>
                                                        <br>
                                                        <label class="aiz-radio">
                                                            <input type="radio" name="rating" value="4+"
                                                                onchange="applyFilter()"
                                                                <?php if($rating == '4+'): ?> checked <?php endif; ?>>
                                                            <?php echo e(translate('4 star +')); ?>

                                                            <span class="aiz-rounded-check"></span>
                                                            <span class="float-right text-secondary fs-12"></span>
                                                        </label>
                                                        <br>
                                                        <label class="aiz-radio">
                                                            <input type="radio" name="rating" value="3-4"
                                                                onchange="applyFilter()"
                                                                <?php if($rating == '3-4'): ?> checked <?php endif; ?>>
                                                            <?php echo e(translate('3 to 4 star')); ?>

                                                            <span class="aiz-rounded-check"></span>
                                                            <span class="float-right text-secondary fs-12"></span>
                                                        </label>
                                                        <br>
                                                        <label class="aiz-radio">
                                                            <input type="radio" name="rating" value="2-3"
                                                                onchange="applyFilter()"
                                                                <?php if($rating == '2-3'): ?> checked <?php endif; ?>>
                                                            <?php echo e(translate('2 to 3 star')); ?>

                                                            <span class="aiz-rounded-check"></span>
                                                            <span class="float-right text-secondary fs-12"></span>
                                                        </label>
                                                        <br>
                                                        <label class="aiz-radio">
                                                            <input type="radio" name="rating" value="1-2"
                                                                onchange="applyFilter()"
                                                                <?php if($rating == '1-2'): ?> checked <?php endif; ?>>
                                                            <?php echo e(translate('1 to 2 star')); ?>

                                                            <span class="aiz-rounded-check"></span>
                                                            <span class="float-right text-secondary fs-12"></span>
                                                        </label>
                                                        <br>
                                                        <label class="aiz-radio">
                                                            <input type="radio" name="rating" value="0-1"
                                                                onchange="applyFilter()"
                                                                <?php if($rating == '0-1'): ?> checked <?php endif; ?>>
                                                            <?php echo e(translate('0 to 1 star')); ?>

                                                            <span class="aiz-rounded-check"></span>
                                                            <span class="float-right text-secondary fs-12"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                            data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8">
                                    <div class=" mb-lg-0">
                                        <input type="hidden" name="type" value="freelancer">
                                        <div class="card-body p-0">
                                            <?php $__currentLoopData = $freelancers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $freelancer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="">
                                                    <div class="card">
                                                        <?php if($freelancer->user != null): ?>
                                                            <a href="<?php echo e(route('freelancer.details', $freelancer->user->user_name)); ?>"
                                                                class="d-block d-xl-flex card-project text-inherit px-3 py-4">

                                                                <span class="avatar flex-shrink-0 mr-4">

                                                                    <?php if($freelancer->user->photo != null): ?>
                                                                        <img src="<?php echo e(custom_asset($freelancer->user->photo)); ?>"
                                                                            alt="<?php echo e($freelancer->user->name); ?>">

                                                                        <?php if(Cache::has('user-is-online-' . $freelancer->user->id)): ?>
                                                                            <div
                                                                                class="avatar avatar-lg avatar-indicators avatar-online">
                                                                                <img src="<?php echo e(custom_asset($freelancer->user->photo)); ?>"
                                                                                    alt="<?php echo e($freelancer->user->name); ?>">
                                                                            </div>
                                                                        <?php else: ?>
                                                                            <div
                                                                                class="avatar avatar-lg avatar-indicators avatar-offline">
                                                                                <img src="<?php echo e(custom_asset($freelancer->user->photo)); ?>"
                                                                                    alt="<?php echo e($freelancer->user->name); ?>">
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if(Cache::has('user-is-online-' . $freelancer->user->id)): ?>
                                                                            <div
                                                                                class="avatar avatar-lg avatar-indicators avatar-online">
                                                                                <img alt="avatar"
                                                                                    src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                                                                    alt="<?php echo e($freelancer->user->name); ?>"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                        <?php else: ?>
                                                                            <div
                                                                                class="avatar avatar-lg avatar-indicators avatar-offline">
                                                                                <img alt="avatar"
                                                                                    src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                                                                    alt="<?php echo e($freelancer->user->name); ?>"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>


                                                                </span>

                                                                <div class="container flex-grow-1">
                                                                    <h5 class="fw-600 mb-1"><?php echo e($freelancer->user->name); ?>

                                                                    </h5>
                                                                    <?php if($freelancer->specialistAt != null): ?>
                                                                        <p class="opacity-50">
                                                                            <?php echo e($freelancer->specialistAt->name); ?>

                                                                        </p>
                                                                    <?php endif; ?>
                                                                    <div class="text-muted lh-1-8">
                                                                        <p class="text-truncate-3"><?php echo e($freelancer->bio); ?>

                                                                        </p>
                                                                    </div>
                                                                    <div class="d-flex text-secondary fs-12 mb-3">
                                                                        <div class="mr-2">
                                                                            <span
                                                                                class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                                                <?php echo e(formatRating(getAverageRating($freelancer->user->id))); ?>

                                                                            </span>
                                                                            <span class="rating rating-sm">
                                                                                <?php echo e(renderStarRating(getAverageRating($freelancer->user->id))); ?>

                                                                            </span>
                                                                            <span>
                                                                                (<?php echo e(count($freelancer->user->reviews)); ?>

                                                                                <?php echo e(translate('Reviews')); ?>)
                                                                            </span>
                                                                        </div>
                                                                        <?php if($freelancer->user->address->city_id != null && $freelancer->user->address->country_id != null): ?>
                                                                            <div>
                                                                                <i
                                                                                    class="las la-map-marker opacity-50"></i>
                                                                                <span><?php echo e($freelancer->user->address->city->name); ?>,
                                                                                    <?php echo e($freelancer->user->address->country->name); ?></span>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <?php if($freelancer->skills != null): ?>
                                                                        <div>
                                                                            <?php $__currentLoopData = json_decode($freelancer->skills); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skill_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php
                                                                                    $skill = \App\Models\Skill::find($skill_id);
                                                                                ?>
                                                                                <?php if($skill != null): ?>
                                                                                    <span
                                                                                        class="btn btn-light btn-xs mb-1"><?php echo e($skill->name); ?></span>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div
                                                                    class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 d-flex flex-row flex-xl-column justify-content-between align-items-center">
                                                                    <div class="text-right">
                                                                        <h4 class="mb-0">
                                                                            <?php echo e(single_price($freelancer->hourly_rate)); ?>

                                                                        </h4>
                                                                        <div class="mt-xl-2 small text-secondary">
                                                                            <span><?php echo e(translate('per Hour')); ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span
                                                                            class="btn btn-primary btn-sm"><?php echo e(translate('Hire Me')); ?></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <br>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>

                                    </div>

                                </div>


                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>


    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function applyFilter() {
            $('#freelancer-filter-form').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::guest() ? 'layouts.appindex' : 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/freelancers-listing.blade.php ENDPATH**/ ?>