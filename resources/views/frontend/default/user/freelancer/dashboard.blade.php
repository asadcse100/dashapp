@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/light/users/user-profile.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/dark/clipboard/custom-clipboard.css">

    <link rel="stylesheet" href="{{ asset('assets/common/css/aiz-core.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/light/clipboard/custom-clipboard.css">
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/light/apps/notes.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/apps/notes.css" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <style id="compiled-css" type="text/css">
        .calendar {
            max-width: 900px;
            margin: 0 auto;
        }

        @media (max-width: 858px) {
            #calendar {
                font-size: 8px;
            }

        }
    </style>
@endsection
@section('content')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="dash-responsive">
                <div class="row layout-top-spacing">
                    <div class="col-md-12">
                        @php
                            $verification = \App\Models\Verification::where('user_id', Auth::user()->id)
                                ->where('type', 'identity_verification')
                                ->first();
                        @endphp
                        @if ($verification == null || !$verification->verified)
                            <div class="alert alert-danger">
                                {{ translate('Please verify your identity') }}. <a href="{{ route('user.profile') }}"
                                    class="alert-link">{{ translate('Verify Now') }}</a>
                            </div>
                        @endif
                        {{-- @if (Auth::user()->email_verified_at == null)
                            <div class="alert alert-danger">
                                {{ translate('Please verify your Email') }}. <a href="{{ route('user.profile') }}"
                        class="alert-link">{{ translate('Verify Now') }}</a>
                </div>
                @endif --}}
                        @if (!empty(Auth::user()->userPackage->package_invalid_at) &&
                            Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse(Auth::user()->userPackage->package_invalid_at), false) < 8)
                            <div class="alert alert-danger">
                                {{ translate('Please renew/upgrade your package. Your current package will expire soon') }}.
                                <a href="{{ route('select_package') }}"
                                    class="alert-link">{{ translate('Upgrade Now') }}</a>
                            </div>
                        @endif
                    </div>


                    <div class="row" style="margin-top:10px">

                        <div class="col-sm-3">
                            {{-- <a href="{{ Route('user.login') }}"></a> --}}
                            <a href="{{ route('matter.index') }}">
                                <button class="btn btn-primary  mb-3 me-4 btn-lg">Share Your Matter</button>
                                {{-- <button class="btn btn-success btn-rounded mb-2 me-4">Share Matter</button> --}}
                            </a>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="input-group clipboard-input">
                                <span class="input-group-text text-primary">Refer Url</span>
                                <input type="text" class="form-control" id="copy-basic-input"
                                    value="{{ route('auth.invite', ['ref' => get_ref_code(Auth::user()->id)]) }}">
                                <div class="copy-icon jsclipboard cbBasic" data-bs-trigger="click" title="Copied"
                                    data-clipboard-target="#copy-basic-input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
                                        <rect x="9" y="9" width="13" height="13" rx="2"
                                            ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-3">
                            <div class="widget-content">
                                <div class="w-header">
                                    <div class="w-info">
                                        <div class="input-group clipboard-input">
                                            <span class="input-group-text text-primary">Z-Code</span>
                                            <input type="text" class="form-control" id="z-code"
                                                value="{{ get_ref_code(Auth::user()->id) }}">
                                            <div class="copy-icon jsclipboard cbBasic" data-bs-trigger="click"
                                                title="Copied" data-clipboard-target="#z-code">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-copy">
                                                    <rect x="9" y="9" width="13" height="13"
                                                        rx="2" ry="2"></rect>
                                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-card-three">
                            <div class="widget-content">
                                <div class="account-box">
                                    <div class="card">
                                        <div class="info text-center my-3">
                                            <div class="inv-title">
                                                <h6 class="">Current Balance</h6>
                                            </div>
                                            <hr>
                                            <div class="inv-balance-info text-primary">
                                                <h5 class="inv-balance">
                                                    @if (Auth::check())
                                                        <span class="small fw-500 text-muted">
                                                            @if (!empty(Auth::user()->profile->balance) && isset(Auth::user()->profile->balance))
                                                                {{ single_price(Auth::user()->profile->balance) }}
                                                            @else<h6>0</h6>
                                                            @endif
                                                        </span>
                                                    @endif
                                                </h5>
                                                <span class="inv-stats balance-credited"></span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="acc-action text-center">
                                        <a href="javascript:void(0);" class="btn-add-balance">Withdraw Balance</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-card-three">
                            <div class="widget-content">
                                <div class="account-box">
                                    <div class="card">
                                        <div class="info text-center  my-3">
                                            <div class="inv-title">
                                                <h6 class="">Matter List</h6>
                                            </div>
                                            <hr>
                                            <div class="inv-balance-info">
                                                <h6 class="inv-balance">
                                                    0
                                                </h6>
                                                <span class="inv-stats balance-credited"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-card-three">
                            <div class="widget-content">
                                <div class="account-box">
                                    <div class="card">
                                        <div class="info text-center my-3">
                                            <div class="inv-title">
                                                <h6 class="">Refer Details</h6>
                                            </div>
                                            <hr>
                                            <div class="inv-balance-info">
                                                <h6 class="inv-balance">
                                                    0
                                                </h6>
                                                <span class="inv-stats balance-credited"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-card-three">
                            <div class="widget-content">
                                <div class="account-box">
                                    <div class="card">
                                        <div class="info text-center my-3">
                                            <div class="inv-title">
                                                <h6 class="">Current Package</h6>
                                            </div>
                                            <hr>
                                            <div class="inv-balance-info">
                                                <a href="{{ route('select_package') }}">
                                                    <h6 class="fw-600 mb-3 text-primary">
                                                        @if (!empty(Auth::user()->userPackage->package->name))
                                                            {{ Auth::user()->userPackage->package->name }}
                                                        @endif
                                                    </h6>
                                                    <button class="btn btn-secondary btn-sm">Upgrade Package</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
                        <div class="row widget-statistic">
                            <div id="calendar"></div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>
@endsection


@section('script')
    {{-- Calender to list --}}
    <script type='text/javascript'>
        $(document).ready(function() {
            $("<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.css' />")
                .appendTo("head");
            var Events = Backbone.Collection.extend({});
            var EventsView = Backbone.View.extend({
                el: document.getElementById("content"),
                render: function() {
                    var self = this;
                    var events = JSON.parse(localStorage.getItem('events'));
                    var events = new Events(events);
                    var jsevents = events.toJSON();
                    self.$el.fullCalendar({
                        agenda: 'h:mm{ - h:mm}',
                        '': 'h(:mm)t',
                        aspectRatio: 1.5,
                        droppable: true,
                        weekend: true,
                        editable: true,
                        eventStartEditable: true,
                        eventDurationEditable: true,
                        dragScroll: true,
                        eventDrop: function(event) {
                            console.log(event);
                        },
                        defaultView: 'month',
                        firstDay: 1,
                        handleWindowResize: true,
                        allDayDefault: false,
                        firstHour: 7,
                        columnFormat: {
                            month: 'dddd',
                            week: 'ddd, dS',
                            day: 'dddd, MMM dS'
                        },
                        header: {
                            right: 'prev,next',
                            center: 'title',
                            left: 'month,agendaWeek,agendaDay'
                        },
                        selectable: true,
                        selectHelper: true,
                        select: function(start, end) {
                            var title = prompt('Event Title:');
                            var eventData;
                            if (title) {
                                eventData = {
                                    title: title,
                                    start: start,
                                    end: end
                                };
                                self.$el.fullCalendar('renderEvent', eventData, true);
                                events.push(eventData);
                                localStorage.setItem('events', JSON.stringify(events));
                            }
                            self.$el.fullCalendar('unselect');
                        },
                        events: function(start, end, timezone, callback) {
                            callback(jsevents);
                        }
                    });
                }
            });
            var view = new EventsView({
                el: '#calendar'
            });
            view.render();
        });
    </script>
    {{-- Calender to list --}}
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    {{-- <script src="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.min.js"></script>
<script src="{{ asset('templete') }}/src/assets/js/dashboard/dash_1.js"></script>

<script src="{{ asset('templete') }}/src/assets/js/dashboard/dash_2.js"></script> --}}
    <script src="{{ asset('templete') }}/src/plugins/src/clipboard/clipboard.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/clipboard/custom-clipboard.min.js"></script>

    <script src="{{ asset('assets/common/js/vendors.js') }}"></script>
    <script src="{{ asset('assets/common/js/aiz-core.js') }}"></script>
    <script src="{{ asset('templete') }}/src/assets/js/apps/notes.js"></script>

    {{-- calender to do list --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://underscorejs.org/underscore-min.js"></script>
    <script type="text/javascript" src="https://backbonejs.org/backbone-min.js"></script>
    <script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js">
    </script>
    {{-- calender to do list --}}

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script type="text/javascript">
        < script >
            <
            />
        $(document).ready(function() {
            AIZ.plugins.chart('#graph-1', {

                type: 'line',

                data: {
                    labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV",
                        "DEC"
                    ],
                    datasets: [{
                        fill: true,
                        borderColor: '#377dff',
                        backgroundColor: 'rgba(55, 125, 255,.1)',
                        label: 'Earnings',
                        data: [{
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '01') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '02') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '03') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '04') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '05') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '06') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '07') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '08') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '09') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '10') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '11') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            },
                            {
                                {
                                    \
                                    App\ Models\ MilestonePayment::where('paid_status', 1) - >
                                        where('freelancer_user_id', Auth::user() - > id) - >
                                        whereMonth('created_at', '=', '12') - > whereYear(
                                            'created_at', '=', date('Y')) - > sum(
                                            'freelancer_profit')
                                }
                            }
                        ],

                    }]
                },

                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                color: '#f2f3f8',
                                zeroLineColor: '#f2f3f8'
                            },
                            ticks: {
                                fontColor: "#8b8b8b",
                                fontFamily: 'Montserrat',
                                fontSize: 10
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                color: '#f2f3f8'
                            },
                            ticks: {
                                fontColor: "#8b8b8b",
                                fontFamily: 'Montserrat',
                                fontSize: 10
                            }
                        }]
                    }
                }
            });
        });
    </script>
@endsection
