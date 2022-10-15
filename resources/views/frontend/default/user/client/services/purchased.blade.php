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
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Purchased Services') }}</h5>
            </div>
            <div class="widget-content widget-content-area layout-top-spacing">
                <form class="" id="sort_projects" action="" method="GET">
                    <div class="card-header row gutters-5" style="justify-content:center">
                        {{-- <div class="col-md-3  text-md-left">
                            <h5 class="mb-md-0 h6">{{ translate('All Projects') }}</h5>
                        </div> --}}
                        <div class="col-md-3 ml-auto">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                data-live-search="true" onchange="sort_projects()">
                                <option value="">{{ translate('Filter by Client') }}</option>
                                @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                    {{-- @if ($client->user != null) --}}
                                    {{-- <option value="{{ $client->id }}" @if ($client->id == $client_id) selected @endif>
                                        {{ $client->name }}
                                    </option> --}}
                                    {{-- @endif --}}
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="type" id="type"
                                onchange="sort_projects()">
                                <option value="">{{ translate('Sort by') }}</option>
                                <option value="created_at,asc"
                                    @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'asc') selected @endif
                                @endisset>
                                {{ translate('Time (Old > New)') }}</option>
                            <option value="created_at,desc"
                                @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'desc') selected @endif
                            @endisset>
                            {{ translate('Time (New > Old)') }}</option>
                        <option value="price,desc"
                            @isset($col_name, $query) @if ($col_name == 'price' && $query == 'desc') selected @endif
                        @endisset>
                        {{ translate('Price (High > Low)') }}</option>
                    <option value="price,asc"
                        @isset($col_name, $query) @if ($col_name == 'price' && $query == 'asc') selected @endif
                    @endisset>
                    {{ translate('Price (Low > High)') }}</option>
            </select>
        </div>

    </div>
</form>


<table id="individual-col-search" class="table dt-table-hover">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Title</th>
            <th>Project Category</th>
            <th>Type</th>
            <th>Client</th>
            <th>Budget</th>
            @if (\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1)
                <th data-breakpoints="md">{{ translate('Approval') }}</th>
            @endif
            <th>Posted at</th>
            <th class="text-center dt-no-sorting">Options</th>
        </tr>
    </thead>
    <tbody>


    </tbody>
</table>
</div>
</div>
</div>

<!--  END CONTENT AREA  -->
@endsection
@section('modal')
<!-- cancel Modal -->
<div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h4 class="modal-title h6">{{ translate('Cancel Confirmation') }}</h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body text-center">
    <p class="lead">{{ translate('Are you sure to cancel this?') }}</p>
    <button type="button" class="btn btn-link mt-2"
        data-dismiss="modal">{{ translate('Cancel') }}</button>
    <a id="cancel-link" class="btn btn-primary mt-2">{{ translate('Confirm') }}</a>
</div>
</div>
</div>
</div>

@include('admin.default.partials.delete_modal')
@endsection
@section('script')
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
