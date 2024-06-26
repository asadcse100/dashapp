@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="aiz-titlebar mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="layout-top-spacing ">
                            <h1 class="h3">{{ translate('General Activation') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Project Approval') }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ translate('Enable project approval feature?') }}</label>
                                <div>
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox" onchange="updateSettings(this, 'project_approval')"
                                            @if (\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1) checked @endif>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="alert alert-info mb-0">
                                {{ translate('If you enable this feature all client projects will be pending after adding by clients. You need to approve each project to make those projects public for bidding.') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Force HTTPS') }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ translate('Enable Force HTTPS feature?') }}</label>
                                <div>
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox" onchange="updateSettings(this, 'FORCE_HTTPS')"
                                            @if (env('FORCE_HTTPS') == 'On') checked @endif>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="alert alert-info mb-0">
                                {{ translate('If you enable this feature all requests will be redirect via https.') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
        function updateSettings(el, type) {
            if ($(el).is(':checked')) {
                var value = 1;
            } else {
                var value = 0;
            }
            $.post('{{ route('system_configuration.update.activation') }}', {
                _token: '{{ csrf_token() }}',
                type: type,
                value: value
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Setting has been updated.');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
