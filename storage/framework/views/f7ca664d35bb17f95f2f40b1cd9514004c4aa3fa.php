

<?php $__env->startSection('content'); ?>
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xxl-9 col-xl-8 col-lg-7">
                    <div class="card project-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between ">
                                <a href="" class="text-reset"><?php echo e($service->category->name); ?></a>
                            </div>
                            <h5 class="my-3 lh-1-5"><?php echo e($service->title); ?></h5>

                            <div class="row align-items-center no-gutters">
                                <div class="media mt-4 mb-0 pt-1">
                                    <?php if(!empty($service->user->photo)): ?>
                                        <img src="<?php echo e(asset('storage/uploads/services/' . $service->user->photo)); ?>"
                                            class="card-img-top" alt="<?php echo e(asset($service->slug)); ?>.">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                            class="card-media-image me-3" alt="">
                                    <?php endif; ?>
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1"><?php echo e($service->user->name); ?></h4>
                                        <p class="media-text text-warning">
                                            <?php if(!empty(getAverageRating($service->user->id))): ?>
                                                <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                    <?php echo e(formatRating(getAverageRating($service->user->id))); ?>

                                                </span>
                                            <?php else: ?>
                                                <span class="bg-secondary rounded text-white px-1 mr-1 fs-10">
                                                    <?php echo e(formatRating(getAverageRating($service->user->id))); ?>

                                                </span>
                                            <?php endif; ?>
                                            <span class="rating rating-sm">
                                                <?php echo e(renderStarRating(getAverageRating($service->user->id))); ?>

                                            </span>
                                            <span>
                                                (<?php echo e(getNumberOfReview($service->user->id)); ?> <?php echo e(translate('Reviews')); ?>)
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-image mt-3">
                                <?php if(!empty($service->image)): ?>
                                    <img src="<?php echo e(asset('storage/uploads/services/' . $service->image)); ?>"
                                        class="card-img-top" alt="<?php echo e(asset($service->slug)); ?>.">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/frontend/default/img/avatar-place.png')); ?>"
                                        class="card-media-image me-3" alt="">
                                <?php endif; ?>

                            </div>
                            <div class="text-center">
                                <h6 class="separator mb-4 mt-4"><span
                                        class="px-3"><?php echo e(translate('About This Service')); ?></span></h6>
                                <div class="text-muted lh-2 mb-5 fw-200">
                                    <?php echo $service->about_service; ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-5 account-settings-container">
                    <div class="sticky-top z-3 ">
                        <div class="card">
                            
                            <ul class="nav nav-tabs mb-3" id="animateLine" role="tablist">

                                <?php $__currentLoopData = $service_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($loop->iteration == 1): ?> active <?php endif; ?>"
                                            id="<?php echo e($service_package->service_type); ?>-tab" data-bs-toggle="tab"
                                            href="#<?php echo e($service_package->service_type); ?>" role="tab"
                                            aria-controls="<?php echo e($service_package->service_type); ?>"
                                            aria-selected="<?php if($loop->iteration == 1): ?> true <?php else: ?> false <?php endif; ?>">
                                            <?php echo e(ucfirst($service_package->service_type)); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                            <div id="animateLineContent-4" class="tab-content">

                                <?php $__currentLoopData = $service_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade show <?php if($loop->iteration == 1): ?> active <?php endif; ?>"
                                        id="<?php echo e($service_package->service_type); ?>" role="tabpanel"
                                        aria-labelledby="<?php echo e($service_package->service_type); ?>-tab">
                                        <div class="container">

                                            <span class="mb-4">
                                                <?php if($service_package->service_type == 'basic'): ?>
                                                    <?php echo e(translate('BASIC Package - Popular')); ?>

                                                <?php elseif($service_package->service_type == 'standard'): ?>
                                                    <?php echo e(translate('STANDARD Package - Recommended')); ?>

                                                <?php elseif($service_package->service_type == 'premium'): ?>
                                                    <?php echo e(translate('PREMIUM Package - Must for Pro')); ?>

                                                <?php endif; ?>
                                            </span>
                                            <span
                                                class="font-weight-bold"><?php echo e(single_price($service_package->service_price)); ?></span>
                                            <div class="d-flex align-items-center mt-3">
                                                <span class="mr-3">
                                                    <i class="la la-clock"></i>
                                                    <?php echo e($service_package->delivery_time); ?> <?php echo e(translate('Days Delivery')); ?>

                                                </span>

                                                <span>
                                                    <i class="las la-sync-alt"></i>
                                                    <?php if($service_package->revision_limit < 0): ?>
                                                        <?php echo e(translate('Unlimited Revisions')); ?>

                                                    <?php else: ?>
                                                        <?php echo e($service_package->revision_limit); ?>

                                                        <?php echo e(translate('Revisions')); ?>

                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                            <hr>
                                            <div class="mt-3">
                                                <h5 class="mb-0 d-flex justify-content-between c-pointer"
                                                    data-toggle="collapse" data-target="#collapseBasic" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <button class="btn btn-outline-info p-1">
                                                        <?php echo e(translate('Whats Included')); ?>

                                                    </button>
                                                </h5>
                                                <ul class="list-unstyled ml-4 mt-3">
                                                    <?php $__currentLoopData = json_decode($service_package->feature_description); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $features): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="mb-2">
                                                            <i class="la la-check text-success mr-2" aria-hidden="true"></i>
                                                            <?php echo e($features); ?>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>

                                            <?php if(isClient()): ?>
                                                <button class="btn btn-primary btn-block mt-4"
                                                    <?php if(\App\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                                        \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated): ?> onclick="select_payment_type(<?php echo e($service_package->id); ?>)"
                                                <?php else: ?>
                                                    onclick="show_online_purchase_service_modal(<?php echo e($service_package->id); ?>)" <?php endif; ?>>
                                                    <?php echo e(translate('Continue')); ?>

                                                    (<?php echo e(single_price($service_package->service_price)); ?>)
                                                </button>
                                            <?php elseif(auth::check()): ?>
                                                <div class="alert alert-warning mt-4">
                                                    <?php echo e(translate('You need be a client to order services')); ?>

                                                </div>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('register')); ?>"
                                                    class="btn btn-primary btn-block mt-4"><?php echo e(translate('Join to order this service')); ?></a>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <!-- Select Payment Type Modal -->
    <div class="modal fade" id="select_payment_type_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(translate('Select Payment Type')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="service_package_id" name="service_package_id" value="">
                    <div class="row">
                        <div class="col-md-2">
                            <label><?php echo e(translate('Payment Type')); ?></label>
                        </div>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control aiz-selectpicker" onchange="payment_type(this.value)"
                                    data-minimum-results-for-search="Infinity">
                                    <option value=""><?php echo e(translate('Select One')); ?></option>
                                    <option value="online"><?php echo e(translate('Online payment')); ?></option>
                                    <option value="offline"><?php echo e(translate('Offline payment')); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1"
                            id="select_type_cancel" data-dismiss="modal"><?php echo e(translate('Cancel')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- online Payment Modal -->
    <div class="modal fade" id="online_purchase_service_package_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(translate('Select a payment option')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="online_purchase_service_package_modal_body">

                </div>
            </div>
        </div>
    </div>

    <!-- offline payment Modal -->
    <div class="modal fade" id="offline_service_purchase_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php echo e(translate('Service Package Purchase by Offline Payment')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="offline_service_purchase_modal_body"></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function select_payment_type(id) {
            $('input[name=service_package_id]').val(id);
            $('#select_payment_type_modal').modal('show');
        }

        function payment_type(type) {
            var service_package_id = $('#service_package_id').val();
            if (type == 'online') {
                $("#select_type_cancel").click();
                show_online_purchase_service_modal(service_package_id);
            } else if (type == 'offline') {
                $("#select_type_cancel").click();
                $.post('<?php echo e(route('offline_service_package_purchase_modal')); ?>', {
                    _token: '<?php echo e(csrf_token()); ?>',
                    service_package_id: service_package_id
                }, function(data) {
                    $('#offline_service_purchase_modal_body').html(data);
                    $('#offline_service_purchase_modal').modal('show');
                });
            }
        }

        function show_online_purchase_service_modal(id) {
            $.post('<?php echo e(route('get_package_service_modal')); ?>', {
                _token: '<?php echo e(csrf_token()); ?>',
                id: id
            }, function(data) {
                $('#online_purchase_service_package_modal').modal('show');
                $('#online_purchase_service_package_modal_body').html(data);
                $(".aiz-selectpicker").selectpicker();
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::guest() ? 'layouts.appindex' : 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/services-single.blade.php ENDPATH**/ ?>