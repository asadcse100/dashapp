<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=El%20Messiri">

<style>
    .header-container {
        font-family: "El Messiri Bold";
        font-size: 18px !important;
    }




    /* torab start*/
    .my-drpdown-menu {
        width: 200px;

        position: absolute;
        right: 150px;
        background-color: aliceblue;

        display: none;
        z-index: 9999;
        border-radius: 3px;
        padding: 10px 0px;

    }

    .service-drpdown:hover .my-drpdown-menu {
        display: block;
    }


    .service-drpdown {

        font-size: 18px;
        padding-top: 7px;
        padding-left: 18px;
        border-radius: 3px;

    }

    .service-drpdown:hover {
        cursor: pointer;
        font-size: 18px;

    }

    .my-drpdown-item {
        display: block;
        color: black !important;
        /* padding: 0px 13px !important; */
        font-size: 18px;

    }

    .my-drpdown-item-a {
        display: inline-block !important;
        width: 100%;
        padding: 2px 13px;

    }

    .my-drpdown-item-a:hover {
        background-color: #142938;
        color: rgb(250, 250, 250) !important;
    }

    .my-drpdown-item a {
        color: black !important;
    }

    #navbars {
        overflow: unset;
        font-family: "El Messiri SemiBold";
        font-size: "18px";

    }

    .sub-menu {
        position: absolute !important;
        left: 150px;
        width: 250px;
        height: 300px;
        background-color: #193549 !important;
        /* background-color: aliceblue; */
        overflow: scroll;
        display: none;
        z-index: 9999;
        border-radius: 3px;
        padding: 10px 0px;

        /* margin-right:0px !important; */
        /* padding: 0px 13px !important; */
    }


    .my-drpdown-item:hover .sub-menu {
        display: inline-block !important;
    }

    .sub-menu a {
        color: white !important;
        font-size: 16px !important;

        display: inline-block !important;
        color: aliceblue;
        padding: 2px 13px;


    }

    .sub-menu a:hover {
        background-color: white !important;
        color: black !important;
    }

    .sub-menu-li {
        display: block;
        width: 100%;
        text-align: left;
    }

    /* .sub-menu-li a {

    } */

    @media (max-width: 490px) {
        .my-drpdown-menu {
            width: 130px;
            position: absolute;
            right: 155px;
            background-color: aliceblue;
            display: none;
            z-index: 9999;
            border-radius: 3px;
            padding: 10px 0px;
        }


        .sub-menu {
            left: 200px !important;
            width: 170px;
            margin-left: -70px !important;

        }


    }

    .flex-grows {
        width: 940px !important;
    }

    /* torab end*/



    /* torab */
</style>
<div class="header-container container-xxl" style="box-sizing: border-box !important">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="padding-bottom: 4px">
            <header class="header navbar navbar-expand-sm expand-header">

                <a href="javascript:void(0);" class="sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </a>

                <form action="<?php echo e(route('search')); ?>" method="GET" class="flex-grows search-hide">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="I'm looking for" name="keyword">

                        &#160;
                        <select class="form-select" name="type">
                            <option value="freelancer"
                                <?php if(isset($type)): ?> <?php if($type == 'freelancer'): ?>
                            selected
                        <?php endif; ?> <?php endif; ?>>
                                Experts</option>
                            <option value="project"filter_category
                            <?php if(isset($type)): ?> <?php if($type == 'project'): ?>
                            selected
                        <?php endif; ?> <?php endif; ?>>
                            Project</option>

                            <option value="service"
                                <?php if(isset($type)): ?> <?php if($type == 'service'): ?>
                            selected
                        <?php endif; ?> <?php endif; ?>>
                                Services</option>

                            <option value="software"
                                <?php if(isset($type)): ?> <?php if($type == 'software'): ?>
                            selected
                        <?php endif; ?> <?php endif; ?>>
                                Software</option>
                        </select>
                        
                        <button type="submit" class="btn btn-bg">
                            <span class="input-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="36"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>

                <?php
                    $services = App\Models\ProductCategory::where('status', 1)
                        ->orderby('order_by')
                        ->get();
                ?>

                <ul class="navbar-item flex-row ms-lg-auto ms-0" id="pills-tab" role="tablist">
                    <?php
                        $services = App\Models\ProductCategory::where('status', 1)
                            ->orderby('order_by')
                            ->get();
                        $servicesubs = App\Models\ProductService::where('status', 1)->get();
                    ?>

                    

                    <li class="service-drpdown">
                        Services
                        <div class="my-drpdown-menu">

                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="my-drpdown-item">
                                    <a class="my-drpdown-item-a"
                                        href="<?php echo e(route('filter_category', $service->id)); ?>"><?php echo e($service->name); ?></a>
                                    <ul class="sub-menu px-0 py-3">
                                        <?php
                                            $filtereds = $servicesubs->where('category_id', $service->id);
                                        ?>
                                        <?php if(!empty($filtereds)): ?>
                                            <?php $__currentLoopData = $filtereds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $filtered): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="sub-menu-li"><a class="sub-menu-a"
                                                        href="<?php echo e(Route('filter_category_with_service', [$service->id, $filtered->id])); ?>"><?php echo e($filtered->title); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </li>
                    


                    <li class="nav-item theme-toggle-item">
                        <a href="javascript:void(0);" class="nav-link theme-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-moon dark-mode">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-sun light-mode">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </a>
                    </li>

                    <li class="nav-item dropdown notification-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg><span class="badge badge-success"></span>
                        </a>

                        <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                            <div class="drodpown-title message">

                                <?php $noti_num = \App\Utility\NotificationUtility::get_my_notifications(10,true,true); ?>
                                <?php if($noti_num != 0): ?>
                                    <h6 class="d-flex justify-content-between"><span
                                            class="align-self-center">Messages</span>
                                        <span class="badge badge-primary">
                                            
                                            <?php echo e($noti_num); ?> Unread
                                        </span>
                                    </h6>
                                <?php endif; ?>

                            </div>
                            <div class="notification-scroll">

                                <div class="dropdown-item">
                                    <div class="media server-log">
                                        <img src="<?php echo e(asset('templete')); ?>/src/assets/img/demoprofile.png"
                                            class="img-fluid me-2" alt="avatar">
                                        <div class="media-body">
                                            <div class="data-info">
                                                <h6 class="">Kara Young</h6>
                                                <p class="">1 hr ago</p>
                                            </div>

                                            <div class="icon-status">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6"
                                                        y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18"
                                                        y2="18">
                                                    </line>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="drodpown-title notification mt-2">
                                    <h6 class="d-flex justify-content-between"><span
                                            class="align-self-center">Notifications</span> <span
                                            class="badge badge-secondary">16 New</span></h6>
                                </div>

                                <?php $notification_list = \App\Utility\NotificationUtility::get_my_notifications(10,false,false,false); ?>
                                <?php $__currentLoopData = $notification_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="dropdown-item">
                                        <div class="media server-log">
                                            <a href="<?php echo e($notification_item['link']); ?>">

                                                <?php if(!empty($notification_item['sender_photo'])): ?>
                                                    <span class="avatar avatar-sm mr-3">
                                                        <img src="<?php echo e($notification_item['sender_photo']); ?>">
                                                    </span>
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/demoprofile.png"
                                                        class="img-fluid me-2" alt="avatar">
                                                <?php endif; ?>

                                                <div class="media-body">
                                                    <div class="data-info">
                                                        <h6 class="">
                                                            <?php echo e($notification_item['message'] . ' ' . $notification_item['sender_name']); ?>

                                                        </h6>
                                                        <p class=""><?php echo e($notification_item['date']); ?></p>
                                                    </div>

                                                    <div class="icon-status">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18">
                                                            </line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18">
                                                            </line>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>

                                            <?php if($notification_item['seen'] == false): ?>
                                                <button class="btn btn-success rounded p-1"
                                                    title="<?php echo e(translate('New')); ?>">
                                                    <span class="bs-tooltip"></span>
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <div class="avatar-container">
                                <div class="avatar avatar-sm avatar-indicators avatar-online mb-0">

                                    <?php if(!empty(Auth::user()->photo)): ?>
                                        <img src="<?php echo e(asset('profile/photos/' . Auth::user()->photo)); ?>"
                                            class="rounded-circle">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/frontend/default/img/demoprofile.png')); ?>"
                                            class="rounded-circle">
                                    <?php endif; ?>
                                </div>

                                <span class="ml-2 text-left d-none d-xl-inline-block">
                                    <span class="h6 d-block mb-0">
                                        <?php if(!empty(Auth::user()->name)): ?>
                                            <?php echo e(Auth::user()->name); ?>

                                        <?php endif; ?>
                                    </span>
                                    <?php if(Auth::check()): ?>
                                        <span class="small fw-500 text-muted">
                                            <?php if(!empty(Auth::user()->profile->balance) && isset(Auth::user()->profile->balance)): ?>
                                                <?php echo e(single_price(Auth::user()->profile->balance)); ?>

                                            <?php endif; ?>
                                        </span>
                                    <?php endif; ?>
                                </span>
                            </div>
                        </a>

                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <div class="media-body">
                                        <h5>
                                            <?php if(!empty(Auth::user()->name)): ?>
                                                <?php echo e(Auth::user()->name); ?>

                                            <?php endif; ?>
                                        </h5>
                                        <p>
                                            <?php if(!empty(Auth::user()->email)): ?>
                                                <?php echo e(Auth::user()->email); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <a href="<?php echo e(route('user.profile.show')); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> <span>Profile</span>
                                </a>
                            </div>

                            <div class="dropdown-item">
                                <a href="<?php echo e(route('dashboard')); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> <span>Dashboard</span>
                                </a>
                            </div>

                            <div class="dropdown-item">
                                <a href="<?php echo e(route('logout')); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12">
                                        </line>
                                    </svg> <span>Log Out</span>
                                </a>
                            </div>

                        </div>
                    </li>
                </ul>
            </header>

        </div>
    </div>
</div>
</div>
<script>
    const nav = document.querySelector('#navbars');
    let navTop = nav.offsetTop;

    function fixedNav() {
        if (document.body.scrollTop > 80 ||
            document.documentElement.scrollTop > 80) {
            nav.classList.add('fixed');
        } else {
            nav.classList.remove('fixed');
        }
    }
    window.addEventListener('scroll', fixedNav);
</script>
<!--  END NAVBAR  -->
<?php /**PATH D:\Server\Xampp\htdocs\dashapp\resources\views/layouts/inc/navbar.blade.php ENDPATH**/ ?>