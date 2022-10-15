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

                <form action="{{ route('search') }}" method="GET" class="flex-grow-1 search-hide">
                    <div class="input-group">
                        {{-- <input type="text" class="form-control" placeholder="I'm looking for" name="keyword"> --}}
                        {{-- <select class="form-select" name="type">
                                <option>DigiHealth</option>
                                <option>DigiOfice</option>
                                <option>EduCare</option>
                            </select> --}}
                        &#160;
                        <select class="form-select" name="type">
                            <option value="freelancer"
                                @isset($type) @if ($type == 'freelancer')
                            selected
                        @endif @endisset>
                                Experts</option>

                            <option value="project"filter_category
                                @isset($type) @if ($type == 'project')
                            selected
                        @endif @endisset>
                                Project</option>

                            <option value="service"
                                @isset($type) @if ($type == 'service')
                            selected
                        @endif @endisset>
                                Services</option>

                            <option value="app"
                                @isset($type) @if ($type == 'app')
                            selected
                        @endif @endisset>
                                App</option>

                        </select>
                        {{-- <button type="submit" class="btn" style="background: #052440"> --}}
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

                @php
                    $services = App\Models\ProductCategory::where('status', 1)->get();
                @endphp

                <ul class="navbar-item flex-row ms-lg-auto ms-0" id="pills-tab" role="tablist">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-current="page">Services</a>
                        <div class="dropdown-menu">
                            @foreach ($services as $service)
                                <a class="dropdown-item" href="{{ route('filter_category', $service->id) }}"
                                    role="tab" aria-selected="false">{{ $service->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ Route('service') }}">Services</a>
                        </li> --}}


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

                                @php $noti_num = \App\Utility\NotificationUtility::get_my_notifications(10,true,true); @endphp
                                @if ($noti_num != 0)
                                    <h6 class="d-flex justify-content-between"><span
                                            class="align-self-center">Messages</span>
                                        <span class="badge badge-primary">
                                            {{-- get numbers of unseen notification --}}
                                            {{ $noti_num }} Unread
                                        </span>
                                    </h6>
                                @endif

                            </div>
                            <div class="notification-scroll">

                                <div class="dropdown-item">
                                    <div class="media server-log">
                                        <img src="{{ asset('templete') }}/src/assets/img/profile-16.jpeg"
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

                                @php $notification_list = \App\Utility\NotificationUtility::get_my_notifications(10,false,false,false); @endphp
                                @foreach ($notification_list as $notification_item)
                                    <div class="dropdown-item">
                                        <div class="media server-log">
                                            <a href="{{ $notification_item['link'] }}">

                                                @if (!empty($notification_item['sender_photo']))
                                                    <span class="avatar avatar-sm mr-3">
                                                        <img src="{{ $notification_item['sender_photo'] }}">
                                                    </span>
                                                @else
                                                    <img src="{{ asset('templete') }}/src/assets/img/avatar-place.png"
                                                        class="img-fluid me-2" alt="avatar">
                                                @endif

                                                <div class="media-body">
                                                    <div class="data-info">
                                                        <h6 class="">
                                                            {{ $notification_item['message'] . ' ' . $notification_item['sender_name'] }}
                                                        </h6>
                                                        <p class="">{{ $notification_item['date'] }}</p>
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

                                            @if ($notification_item['seen'] == false)
                                                <button class="btn btn-success rounded p-1"
                                                    title="{{ translate('New') }}">
                                                    <span class="bs-tooltip"></span>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <div class="avatar-container">
                                <div class="avatar avatar-sm avatar-indicators avatar-online mb-0">

                                    @if (!empty(Auth::user()->photo))
                                        <img src="{{ asset('profile/photos/' . Auth::user()->photo) }}"
                                            class="rounded-circle">
                                    @else
                                        <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                            class="rounded-circle">
                                    @endif
                                </div>

                                <span class="ml-2 text-left d-none d-xl-inline-block">
                                    <span class="h6 d-block mb-0">
                                        @if (!empty(Auth::user()->name))
                                            {{ Auth::user()->name }}
                                        @endif
                                    </span>
                                    @if (Auth::check())
                                        <span class="small fw-500 text-muted">
                                            @if (!empty(Auth::user()->profile->balance) && isset(Auth::user()->profile->balance))
                                                {{ single_price(Auth::user()->profile->balance) }}
                                            @endif
                                        </span>
                                    @endif
                                </span>
                            </div>
                        </a>

                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <div class="media-body">
                                        <h5>
                                            @if (!empty(Auth::user()->name))
                                                {{ Auth::user()->name }}
                                            @endif
                                        </h5>
                                        <p>
                                            @if (!empty(Auth::user()->email))
                                                {{ Auth::user()->email }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <a href="{{ route('user.profile.show') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> <span>Profile</span>
                                </a>
                            </div>

                            <div class="dropdown-item">
                                <a href="{{ route('dashboard') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> <span>Dashboard</span>
                                </a>
                            </div>

                            <div class="dropdown-item">
                                <a href="{{ route('logout') }}">
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

<!--  END NAVBAR  -->
