@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Freelnacer Payments') }}</h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="" id="sort_projects" action="" method="GET">
                            <div class="card-header row gutters-5" style="justify-content:center">
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
                    <th>Payment By</th>
                    <th>Payment To</th>
                    <th>Paid Amount</th>
                    <th>Paid Method</th>
                    <th>Paid Status</th>
                    <th>Paid At</th>
                    <th>Reciept</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pay_to_freelancers as $key => $pay_to_freelancer)
                    <tr>
                        <td>{{ $key + 1 + ($pay_to_freelancers->currentPage() - 1) * $pay_to_freelancers->perPage() }}
                        </td>
                        @if ($pay_to_freelancer->admin != null)
                            <td>
                                {{ $pay_to_freelancer->admin->name }}
                            </td>
                        @else
                            <td>
                                {{ translate('Not Found') }}
                            </td>
                        @endif
                        <td>
                            @if ($pay_to_freelancer->user != null)
                                {{ $pay_to_freelancer->user->name }}
                            @else
                                {{ translate('Not Found') }}
                            @endif
                        </td>
                        <td>
                            {{ single_price($pay_to_freelancer->paid_amount) }}
                        </td>
                        <td>
                            {{ strtoupper($pay_to_freelancer->payment_method) }}
                        </td>
                        <td>
                            @if ($pay_to_freelancer->paid_status != 0)
                                <span
                                    class="badge badge-inline badge-primary">{{ translate('Paid') }}</span>
                            @else
                                <span
                                    class="badge badge-inline badge-danger">{{ translate('Non-Paid') }}</span>
                            @endif
                        </td>
                        <td>
                            {{ $pay_to_freelancer->created_at }}
                        </td>
                        <td class="text-right">
                            @if ($pay_to_freelancer->reciept != null)
                                <a href="{{ custom_asset($pay_to_freelancer->reciept) }}" target="_blank"
                                    class="badge badge-inline badge-primary">{{ translate('Show Reciept') }}</a>
                            @elseif(!$pay_to_freelancer->paid_status)
                                <span class="badge badge-inline badge-secondary">N/A</span>
                            @else
                                <span
                                    class="badge badge-inline badge-secondary">{{ translate('No Reciept') }}</span>
                            @endif
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

<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
    function update_review_published(el) {
        if (el.checked) {
            var status = 1;
        } else {
            var status = 0;
        }
        $.post('{{ route('reviews.published') }}', {
            _token: '{{ csrf_token() }}',
            id: el.value,
            status: status
        }, function(data) {
            if (data == 1) {
                AIZ.plugins.notify('success', 'Review status updated successfully');
            } else {
                AIZ.plugins.notify('danger', 'Something went wrong');
            }
        });
    }
</script>
@endsection
