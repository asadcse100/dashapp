@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/plugins/src/autocomplete/css/autoComplete.02.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/plugins/css/light/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/light/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/forms/switches.css">
    <link href="{{ asset('templete') }}/src/plugins/css/light/pricing-table/css/component.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/forms/switches.css">
    <link href="{{ asset('templete') }}/src/plugins/css/dark/pricing-table/css/component.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/light/pages/faq.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/pages/faq.css" rel="stylesheet" type="text/css" />
@endsection
<style>
    .pricing-table-2 .pricing-plan .pricing-header-section .pricing-header-pricing {
        max-width: 138px !important;
    }
</style>
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing" style="margin-top: 50px">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-4   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Package-Select') }}</h5>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12col-md-12 col-sm-12">
                <div class="row" id="cancel-row">
                    @foreach ($packages as $key => $package)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 layout-top-spacing">
                            <div>
                                <form action="{{ App\Http\Controllers\AamarPayController::aamarpay_payment_url() }}"
                                    method="post" enctype="multipart/form-data" name="form{{ $package->id }}"
                                    id="form{{ $package->id }}">
                                    @csrf
                                    {!! App\Http\Controllers\AamarPayController::getHiddenField($package->price, $package->id, 'package_payment') !!}
                                    <div class="pricing-table-2">
                                        <!-- Billing Cycle  -->
                                        {{-- <div class="billing-cycle-radios mt-5">

                                        <div
                                            class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show">
                                            <div class="input-checkbox">
                                                <span class="switch-chk-label label-left">Monthly</span>
                                                <input class="switch-input" type="checkbox" role="switch" id="toggle-1"
                                                    checked
                                                    onchange="this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')">
                                                <span class="switch-chk-label label-right">Yearly</span>
                                            </div>
                                        </div>
                                    </div> --}}

                                        <!-- Pricing Plans Container -->


                                        <div class="pricing-plan  recommanded" style="margin: -4px">

                                            {{-- <span class="badge badge-pill badge-warning show">0% Off</span> --}}

                                            <div class="pricing-header-section">
                                                <div class="pricing-header-pricing">
                                                    <h5 class="mb-3 h5 fw-600">
                                                        {{ $package->name }}</h5>
                                                    @if ($package->recommended != 0)
                                                        <span
                                                            class="absolute-top-right recommended-ribbon bg-success">{{ translate('Recommended') }}</span>
                                                    @endif
                                                </div>

                                                <div class="pricing-header-pricing">
                                                    <p class="pricing monthly-pricing">
                                                        @if ($package->price == '0.00')
                                                            <span>{{ translate('Free') }}</span>
                                                        @else
                                                            <span>{{ single_price($package->price) }}</span>
                                                        @endif
                                                        @if ($package->number_of_days == '0')
                                                            <span>{{ translate('Life') }}<br>{{ translate('Time') }}</span>
                                                        @else
                                                            <p>{{ $package->number_of_days }}-{{ translate('Days') }}
                                                            </p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="accordion" id="simple_faq{{ $package->id }}">
                                                <div id="fqheadingOne{{ $package->id }}">
                                                    <div class="text-center">
                                                        @if ($package->price == '0.00')
                                                            <a href="{{ route('package_purchase_free', $package->id) }}"
                                                                @if ($package->recommended == 0) class="btn btn-success"
                                                    @else
                                                    class="btn btn-success" @endif>{{ translate('Start Free Trial') }}</a>
                                                        @else
                                                            <button type="submit" id="btn_id{{ $package->id }}"
                                                                name="btn_id{{ $package->id }}"
                                                                @if ($package->recommended == 0) class="btn btn-outline-secondary"
                                                    @else
                                                    class="btn btn-success" @endif>{{ translate('Purchase This Package') }}
                                                            </button>
                                                        @endif
                                                    </div>
                                                    <div class="mb-0 text-center" data-bs-toggle="collapse"
                                                        role="navigation" data-bs-target="#fqcollapseOne"
                                                        aria-expanded="false" aria-controls="fqcollapseOne">
                                                        <span style="color: rgb(255, 6, 122)">More
                                                            Info</span>
                                                        <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>

                                                    <div id="fqcollapseOne" class="collapse"
                                                        aria-labelledby="fqheadingOne{{ $package->id }}"
                                                        data-bs-parent="#simple_faq{{ $package->id }}">
                                                        <div class="pricing-plan-features mb-4">
                                                            <ul>
                                                                @if (!empty($package->commission))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        @if ($package->commission_type == 'percent')
                                                                            {{ $package->commission }}%
                                                                        @else
                                                                            {{ single_price($package->commission) }}
                                                                        @endif
                                                                        {{ translate('Commission') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->fixed_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package->fixed_limit }}
                                                                        {{ translate('Fixed Project Bids') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->long_term_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span> {{ $package->long_term_limit }}
                                                                        {{ translate('Long Term Project Bids') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->portfolio_add_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package->portfolio_add_limit }}
                                                                        {{ translate('Portfolio Adding Limit') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->skill_add_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package->skill_add_limit }}
                                                                        {{ translate('Skills Adding Limit') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->bookmark_project_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package->bookmark_project_limit }}
                                                                        {{ translate('Project Bookmark Limit') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->job_exp_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package->job_exp_limit }}
                                                                        {{ translate('Experience Add Limit') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->service_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package->service_limit }}
                                                                        {{ translate('Service Add Limit') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @if (!empty($package->bio_text_limit))
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package->bio_text_limit }}
                                                                        {{ translate('Bio Words Limit') }}
                                                                    </li>
                                                                    <hr>
                                                                @endif
                                                                @foreach ($package->package_extra as $package_extra)
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12">
                                                                                </polyline>
                                                                            </svg></span>
                                                                        {{ $package_extra->pack_text }}
                                                                    </li>
                                                                    <hr>
                                                                @endforeach
                                                                <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg></span>
                                                                    @if ($package->following_status == 0)
                                                                        {{ translate('Client Following') }}
                                                                    @else
                                                                        {{ translate('Client Following') }}
                                                                    @endif
                                                                </li>
                                                                <hr>
                                                            </ul>
                                                        </div>
                                                        <div class="text-center">
                                                            @if ($package->price == '0.00')
                                                                <a href="{{ route('package_purchase_free', $package->id) }}"
                                                                    @if ($package->recommended == 0) class="btn btn-success"
                                                        @else
                                                        class="btn btn-success" @endif>{{ translate('Start Free Trial') }}</a>
                                                            @else
                                                                <button type="submit" id="btn_id{{ $package->id }}"
                                                                    name="btn_id{{ $package->id }}" {{-- @if (\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated) onclick="select_payment_type({{ $package->id }})"
                                                        @else
                                                            onclick="online_payment({{ $package->id }})" @endif --}}
                                                                    @if ($package->recommended == 0) class="btn btn-outline-secondary"
                                                        @else
                                                        class="btn btn-success" @endif>{{ translate('Purchase This Package') }}
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@section('modal')
    <!-- Select Payment Type Modal -->
    <div class="modal fade" id="select_payment_type_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ translate('Select Payment Type') }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="package_id" name="package_id" value="">
                    <div class="row">
                        <div class="col-md-2">
                            <label>{{ translate('Payment Type') }}</label>
                        </div>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control aiz-selectpicker" onchange="payment_type(this.value)"
                                    data-minimum-results-for-search="Infinity">
                                    <option value="">{{ translate('Select One') }}
                                    </option>
                                    <option value="online">
                                        {{ translate('Online payment') }}</option>
                                    <option value="offline">
                                        {{ translate('Offline payment') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1"
                            id="select_type_cancel" data-dismiss="modal">{{ translate('Cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Online Payment modal -->
    <div class="modal fade" id="purchase_package_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select a payment option
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="purchase_package_modal_body">

                </div>
            </div>
        </div>
    </div>


    <!-- offline payment Modal -->
    <div class="modal fade" id="offline_client_package_purchase_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ translate('Package Purchase by Offline Payment') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="offline_client_package_purchase_modal_body"></div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('templete') }}/src/assets/js/pages/faq.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
        var getSwithchInput = document.querySelector('#toggle-1');
        var pricingContainer = document.querySelector('.pricing-plans-container')

        getSwithchInput.addEventListener('change', function() {
            var isChecked = getSwithchInput.checked;
            if (isChecked) {
                pricingContainer.classList.add('billed-yearly');

                pricingContainer.querySelectorAll('.badge').forEach(element => {
                    element.classList.add('show')
                });

            } else {
                pricingContainer.classList.remove('billed-yearly')
                pricingContainer.querySelectorAll('.badge').forEach(element => {
                    element.classList.remove('show')
                });
            }
        })
    </script>


    <script type="text/javascript">
        function select_payment_type(id) {
            $('input[name=package_id]').val(id);
            $('#select_payment_type_modal').modal('show');
        }

        function payment_type(type) {
            var package_id = $('#package_id').val();
            if (type == 'online') {
                $("#select_type_cancel").click();
                online_payment(package_id);
            } else if (type == 'offline') {
                $("#select_type_cancel").click();
                $.post('{{ route('offline_package_purchase_modal') }}', {
                    _token: '{{ csrf_token() }}',
                    package_id: package_id
                }, function(data) {
                    $('#offline_client_package_purchase_modal_body').html(data);
                    $('#offline_client_package_purchase_modal').modal('show');
                });
            }
        }

        function online_payment(id) {
            $.post('{{ route('get_package_purchase_modal') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#purchase_package_modal').modal('show');
                $('#purchase_package_modal_body').html(data);
                $(".aiz-selectpicker").selectpicker();
            })
        }
    </script>
@endsection
