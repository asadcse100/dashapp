
<?php $__env->startSection('title', __('Referrals')); ?>
<?php $__env->startSection('content'); ?>
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('templete')); ?>/src/plugins/css/light/clipboard/custom-clipboard.css">

    <link href="<?php echo e(asset('templete')); ?>/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('templete')); ?>/src/plugins/css/dark/clipboard/custom-clipboard.css">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-md-10">
                            <ol class="breadcrumb layout-top-spacing">
                                <li class="breadcrumb-item active" aria-current="page">Referral Activity</li>
                                <li class="breadcrumb-item"><a
                                        href="#"><?php echo e(__("See who you've referred and statistic of your referrals.")); ?></a>
                                </li>
                            </ol>
                        </div>

                    </div>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            
                            <div class="seperator-header text-center">
                                <h4 class=""><?php echo e(__('Referral List')); ?></h4>
                            </div>
                            <?php if(sys_settings('referral_show_referred_users', 'no') == 'yes'): ?>
                                <table class="multi-table table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Username</th>
                                            <th>Join Date</th>
                                            <?php if(in_array('earning', sys_settings('referral_user_table_opts', []))): ?>
                                                <th>Earned</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $refers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(in_array('compact', sys_settings('referral_user_table_opts', [])) ? str_compact(data_get($refer, 'referred.username')) : data_get($refer, 'referred.username')); ?>

                                                </td>
                                                <td><?php echo e(show_date(data_get($refer, 'join_at'), true)); ?></td>
                                                <?php if(in_array('earning', sys_settings('referral_user_table_opts', []))): ?>
                                                    <td><?php echo e(isset($earnings[$refer->user_id]) ? money($earnings[$refer->user_id]->sum(), base_currency(), ['dp' => 'calc']) : money('0', base_currency())); ?>

                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                            <div class="seperator-header text-center">
                                <h4 class=""><?php echo e(__('Referral Commissions')); ?></h4>
                            </div>
                            <table class="multi-table table table-striped dt-table-hover table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Details</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Earning</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tranx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($tranx->description); ?></td>
                                            <td><?php echo e(show_date(data_get($tranx, 'created_at'), true)); ?></td>
                                            <td>
                                                <?php echo e(ucfirst(__(tnx_status_switch($tranx->status)))); ?>

                                                <?php echo $tranx->completed_at
                                                    ? '<em class="icon ni ni-info nk-tooltip text-soft" title="' .
                                                        __('At :time', ['time' => show_date($tranx->completed_at, true)]) .
                                                        '"></em> '
                                                    : ''; ?>

                                            </td>
                                            <td><?php echo e(amount_z($tranx->amount, base_currency(), ['dp' => 'calc'])); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $data['total'] = App\Models\User::where('refer', 1)->count();
                $type = 'invite';
                
                $card_id = isset($attr['id']) && !empty($attr['id']) ? ' id="' . $attr['id'] . '"' : '';
                $card_class = isset($attr['class']) && !empty($attr['class']) ? ' ' . $attr['class'] : '';
                
            ?>
            <?php if($type == 'cards'): ?>
                <div class="card card-bordered">
                    <div class="nk-refwg">
            <?php endif; ?>

            <?php if($type == 'invite' || $type == 'invite-card' || $type == 'cards'): ?>

                <?php if($type == 'invite-card'): ?>
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                <?php endif; ?>
                <div class="nk-refwg-invite<?php echo e($card_class); ?>"<?php echo e($card_id); ?>>
                    <div class="nk-refwg-head g-3">
                        <div class="nk-refwg-title">
                            <h5 class="title"><?php echo e(__(sys_settings('referral_invite_title', 'Refer Us & Earn'))); ?></h5>
                            <?php if(sys_settings('referral_invite_text')): ?>
                                <div class="title-sub">
                                    <?php echo e(__(sys_settings('referral_invite_text', 'Use the below link to invite your friends.'))); ?>

                                </div>
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
                                    </svg></div>
                            </div>
                        </form>
                    </div>

                </div>

                <?php if($type == 'invite-card'): ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($type == 'stats' || $type == 'stats-card' || $type == 'cards'): ?>
                <?php if($type == 'stats-card'): ?>
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                <?php endif; ?>

                <div class="nk-refwg-stats<?php echo e($card_class . ($type == 'cards' ? ' bg-lighter' : '')); ?>"<?php echo e($card_id); ?>>
                    <div class="nk-refwg-group g-3">
                        <div class="nk-refwg-name">
                            <h6 class="title"><?php echo e(__('My Referral')); ?> <em class="icon ni ni-info" data-toggle="tooltip"
                                    data-placement="right"
                                    title="<?php echo e(__('People who have signed up using your referral link.')); ?>"></em></h6>
                        </div>
                        <div class="nk-refwg-info g-3">
                            <div class="nk-refwg-sub">
                                <div class="title"><?php echo e($referrals['total'] ?? 0); ?></div>
                                <div class="sub-text"><?php echo e(__('Total Joined')); ?></div>
                            </div>
                            <div class="nk-refwg-sub">
                                <div class="title"><?php echo e($referrals['month'] ?? 0); ?></div>
                                <div class="sub-text"><?php echo e(__('This Month')); ?></div>
                            </div>
                        </div>
                        <?php if(has_route('referrals')): ?>
                            <div class="nk-refwg-more dropdown mt-n1 mr-n1">
                                <a href="<?php echo e(route('referrals')); ?>" class="btn btn-icon btn-trigger"><em
                                        class="icon ni ni-more-h"></em></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if(!empty($referrals['chart'])): ?>
                        <div class="nk-refwg-ck">
                            <canvas class="chart-refer-stats" id="referralchart"></canvas>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if($type == 'stats-card'): ?>
        </div>
    </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if($type == 'cards'): ?>
        </div>
        </div>
    <?php endif; ?>

    
    </div>
    </div>

    <!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="<?php echo e(asset('templete')); ?>/src/assets/js/scrollspyNav.js"></script>
<script src="<?php echo e(asset('templete')); ?>/src/plugins/src/clipboard/clipboard.min.js"></script>
<script src="<?php echo e(asset('templete')); ?>/src/plugins/src/clipboard/custom-clipboard.min.js"></script>
<!--  END CUSTOM SCRIPTS FILE  -->


<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('admin.default.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/referral/index.blade.php ENDPATH**/ ?>