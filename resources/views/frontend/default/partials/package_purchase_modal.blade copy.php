<h6>{{ $package->name }} ({{ single_price($package->price) }})</h6>
<form class="form-horizontal mt-2" action="{{ route('purchase_package') }}" id="myform" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" class="form-control form-control-sm" name="package_id" value="{{ $package->id }}">
    <div class="form-group">
        <label class="form-label">
            {{ translate('Payment System') }}
            <span class="text-danger">*</span>
        </label>
        <div class="form-group">
            <select class="form-control form-control-sm aiz-selectpicker" id="method_id" name="payment_option">
                @if (\App\Models\SystemConfiguration::where('type', 'aamarpay')->first()->value)
                    <option value="aamarpay">{{ translate('AamarPay') }}</option>
                @endif
                @if (\App\Models\SystemConfiguration::where('type', 'zcode')->first()->value)
                    <option value="zcode">{{ translate('Z Code') }}</option>
                @endif
                @if (\App\Models\SystemConfiguration::where('type', 'paypal_activation_checkbox')->first()->value)
                    <option value="paypal">{{ translate('PayPal') }}</option>
                @endif
                @if (\App\Models\SystemConfiguration::where('type', 'stripe_activation_checkbox')->first()->value)
                    <option value="stripe">{{ translate('Stripe') }}</option>
                @endif
                @if (\App\Models\SystemConfiguration::where('type', 'sslcommerz_activation_checkbox')->first()->value)
                    <option value="sslcommerz">{{ translate('SSlcommerz') }}</option>
                @endif
                @if (\App\Models\SystemConfiguration::where('type', 'paystack_activation_checkbox')->first()->value)
                    <option value="paystack">{{ translate('PayStack') }}</option>
                @endif
                @if (\App\Models\SystemConfiguration::where('type', 'instamojo_activation_checkbox')->first()->value)
                    <option value="instamojo">{{ translate('Instamojo') }}</option>
                @endif
                @if (\App\Models\SystemConfiguration::where('type', 'paytm_activation_checkbox')->first()->value)
                    <option value="paytm">{{ translate('Paytm') }}</option>
                @endif
            </select>
        </div>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">{{ translate('Pay') }}</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        // Function to change form action.
        $("#method_id").change(function() {
            var selected = $(this).children(":selected").text();
            switch (selected) {
                case "AamarPay":
                    $("#myform").attr('action', {{ App\Http\Controllers\PaymentController::aamarpay_payment_url() }});
                    alert("Form Action is Changed to 'mysql.html'n Press Submit to Confirm");
                    break;
                case "Z Code":
                    $("#myform").attr('action', '');
                    alert("Form Action is Changed to 'mysql.html'n Press Submit to Confirm");
                    break;
                default:
                    $("#myform").attr('action', {{ route('purchase_package') }});
            }
        });
        // Function For Back Button
        $(".back").click(function() {
            parent.history.back();
            return false;
        });
    });
</script>
