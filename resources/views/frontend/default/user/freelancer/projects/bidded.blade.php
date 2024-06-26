@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/widgets/modules-widgets.css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/widgets/modules-widgets.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection
@section('content')

    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <!-- Analytics -->

            <div class="layout-top-spacing ">
                <h5 class="text-center">Bidded Projects</h5>
                <hr>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-five">

                    {{-- Bidded Projects --}}
                    <div class="continer">
                        <div class="widget-heading">
                            <div class="usr-avatar">
                                <span>$500</span>
                            </div>
                            <div class="task-action">
                                <button class="btn btn-dark"> Not Hired Yet </button>
                            </div>
                        </div>
                        <div class="widget-content">
                            <a href="#">
                                <h6>I want a good banner design for my eCommerce.</h6>
                            </a>

                            <ul class="list-inline opacity-70 fs-12">
                                <li class="list-inline-item">
                                    <i class="las la-clock opacity-40"></i>
                                    <span>2 years ago</span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-inherit">
                                        <i class="las la-stream opacity-40"></i>
                                        <span> Design &amp; Creative </span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="las la-handshake"></i>
                                    <span>Fixed</span>
                                </li>
                            </ul>
                            <span>Design for my ecommerce banner and Branding. Design for my ecommerce banner and Branding
                                Design for my ecommerce banner and Branding . Design for my ecommerce banner and Branding.
                                Design for my ecommerce banner and Branding
                            </span>

                            <div class="mb-3 mt-3 me-4">
                                <span class="btn btn-light btn-xs mb-1 btn-sm">
                                    <p>Animation</p>
                                </span>
                                <span class="btn btn-light btn-xs mb-1 btn-sm">
                                    <p>Logo design</p>
                                </span>
                            </div>
                            <hr>
                            <div class="meta-info">
                                <div class="avatar--group">
                                    <div class="avatar translateY-axis">
                                        <img alt="avatar" src="{{ asset('templete') }}/src/assets/img/team-2-2.jpg" />
                                    </div>
                                    <div class="container">
                                        <div class="media-body">
                                            <h5 class="media-heading mb-1">Xavier</h5>
                                            <span>
                                                <p class="badge badge-warning ">5</p>
                                                (0 Reviews)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalbids">
                                    <span class="">Total Bids</span>
                                    <span class="">: 5</span>
                                    <br>
                                    <span class="">My Bids</span>
                                    <span class="">: 50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Bidded Projects --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/widgets/modules-widgets.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
