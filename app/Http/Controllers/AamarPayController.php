<?php

namespace App\Http\Controllers;

use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use App\Http\Controllers\MilestonePaymentController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\WalletController;
use \Shipu\Aamarpay\Aamarpay;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Translations_log;
use App\Models\Package;
use App\Models\ServicePackage;
use App\Models\PackagePayment;
use App\Models\UserPackage;
use Session;
use DB;
use Auth;
use \DateTime;
class AamarPayController extends Controller
{
    public function paymentSuccessOrFailed(Request $request)
    {
        if($request->get('pay_status') == 'Failed') {
            return redirect()->back();
        }

        Auth::loginUsingId($request->opt_b);

        // 'opt_a'=>$package_id,
        // 'opt_b'=>Auth::user()->id,
        // 'opt_c'=>'package_payment',
        // 'opt_d'=>'AamarPay'

      //  $translations_log = Translations_log::where('mer_txnid', $request->mer_txnid)->first();
      $amount = 0;
      if($request->opt_c == 'package_payment'){
        $priceData = Package::where('id', $request->opt_a)->first();
        $amount = $priceData->price;
      }elseif($request->opt_c == 'service_payment'){
        $priceData = ServicePackage::where('id', $request->opt_a)->first();
        $amount = $priceData->amount;
      }elseif($request->opt_c == 'milestone_payment'){
        //
      }
    //   $amount = $translations_log->amount;

        $payment = new Aamarpay(config('aamarpay'));
        if((int)$amount != (int)$request->amount){
            $valid =false;
        }else
        {
            $valid =true;

            DB::table('translations_logs')->where('mer_txnid', $request->mer_txnid)->updateOrInsert($request->toArray());
            DB::table('transactions')->updateOrInsert(
                [
                    'mer_txnid' => $request->mer_txnid
                ],
                [
                    'user_id' => $request->opt_b,
                    'type' => $request->opt_c,
                    'amount' => $request->amount,
                    'method' => $request->opt_d,
                    'status' => $request->status_code
                ]
            );
        }


        if($valid) {
            try{
                if ($request->opt_c == 'milestone_payment') {
                    $milestone_payment = new MilestonePaymentController;
                    $milestone_payment->aamarpay_milestone_payment_done($request->opt_a, $request->mer_txnid);
                } elseif ($request->opt_c == 'package_payment') {
                    $package_payment = new PackagePaymentController;
                    $package_payment->aamarpay_package_payment_done($request->opt_a, $request->mer_txnid);
                } elseif ($request->opt_c == 'service_payment') {
                    $package_payment = new ServicePaymentController;
                    $package_payment->aamarpay_service_package_payment_done($request->opt_a, $request->mer_txnid);
                }
            }
            catch (\Exception $e) {
                return redirect()->route('dashboard');
            }
        }else{
            echo " Payment Not Valied! ";
        }
    }

    public static function aamarpay_payment_url()
    {
        $payment = new Aamarpay(config('aamarpay'));
        return $payment->paymentUrl();
    }

    public static function getHiddenField($price, $package_id, $service_type)
    {
        $userData = Auth()->user();

        // $data['package_id'] = $package_id;
        // $data['payment_method'] = 'AamarPay';
        // $data['amount'] = $price;
        // $data['user_id'] = Auth::user()->id;
        // $data['payment_type'] = 'package_payment';

        $now = DateTime::createFromFormat('U.u', microtime(true));
        // $nanotime = system('date +%s%N');
        $nanotime = $now->format("mdYHisu");
        $data['mer_txnid'] = 'Z'.$nanotime;

       // Translations_log::create($data);

        $payment = new Aamarpay(config('aamarpay'));
            return $payment->customer([
                'cus_name'  => $userData->name, // Customer name
                'cus_email' => $userData->email, // Customer email
                'cus_phone' => $userData->phone, // Customer Phone
                'desc' => 'bill', // Customer description
                'opt_a'=>$package_id,
                'opt_b'=>Auth::user()->id,
                'opt_c'=>$service_type,
                'opt_d'=>'AamarPay'

            ])->transactionId($data['mer_txnid'])->amount($price)->hiddenValue();

    }

}
