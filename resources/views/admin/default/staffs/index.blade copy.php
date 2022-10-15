@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.css">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css">

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('All Staffs') }}</h5>
            </div>

            <div class="widget-content widget-content-area layout-top-spacing">
                <form class="" id="sort_projects" action="" method="GET">
                    <div class="card-header row gutters-5" style="justify-content:center">
                        <div class="col-md-3 ml-auto">
                            @can('show create staff')
                                <a href="{{ route('staffs.create') }}" class="btn btn-outline-primary mb-2 me-4">
                                    <span>Add Staff</span>
                                </a>
                            @endcan
                        </div>
                        <div class="col-md-3 ml-auto">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                data-live-search="true" onchange="sort_projects()">
                                <option value="">{{ translate('Filter by Client') }}</option>
                                @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                    @if ($client->user != null)
                                        <option value="{{ $client->id }}"
                                            @if ($client->id == $client_id) selected @endif>
                                            {{ $client->name }}
                                        </option>
                                    @endif
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
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($staffs as $key => $staff)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $staff->user->name }}</td>
                <td>{{ $staff->user->email }}</td>
                <td>
                    @if ($staff->role != null)
                        {{ $staff->role->name }}
                    @endif
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                        <div class="dropdown-menu my-5" aria-labelledby="dropdownMenuLink20">
                            <a class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#bd-view-modal-lg{{ $staff->id }}">View</a>

                            <a href="{{ route('staffs.edit', encrypt($staff->id)) }}"
                                class="dropdown-item">Edit</a>



                            <a class="dropdown-item" href="{{ route('staffs.destroy', $staff->id) }}"
                                onclick="deleteFn()">Delete</a>

                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
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
<script src="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.js"></script>
<script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/jszip.min.js"></script>
<script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="{{ asset('templete') }}/src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
