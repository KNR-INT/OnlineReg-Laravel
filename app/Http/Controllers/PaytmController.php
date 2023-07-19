<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use PaytmWallet;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;


class PaytmController extends Controller
{
    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function PaytmPayment(Request $request)
    {
        $appli_id = $request->input('appli_id');
        // $session = session()->get('login.email');
      //   $ses_email = $session[0];
      //   $users = DB::select("SELECT * FROM `students` WHERE `email_id` = '$ses_email' ORDER BY `id` DESC LIMIT 1");
      //   $user_id = $users[0]->id;
        $payment = PaytmWallet::with('receive');
        // $registrationFee = DB::connection('secondary')->table('application_fee')->value('amount');
        $payment->prepare([
          'order' => $appli_id,
          'user' => rand(10,1000),
          'mobile_number' => '123456789',
          'email' => 'paytmtest@gmail.com',
          'amount' => 1,
          'callback_url' => route('paytm.callback'),
        ]);
        return $payment->receive();
    }

    

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paytmCallback(Request $request)
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful())
        {
          //Transaction Successful
          $payment = new PaytmWallet();
          $order_id = $response['ORDERID'];
          $txn_id = $response['TXNID'];
          $bank_name = $response['BANKNAME'];
          $txn_amount = $response['TXNAMOUNT'];
          $txn_date = $response['TXNDATE'];
          $status = $response['STATUS'];
          // Update other relevant fields based on your requirements
          $data=array("order_id"=>$order_id,"txn_id"=>$txn_id,"bank_name"=>$bank_name,"txn_amount"=>$txn_amount,"txn_date"=>$txn_date,"status"=>$status);
          DB::table('payment')->insert($data);
          $data1=array("appli_id"=>$order_id);
          DB::table('fee_receipt_number')->insert($data1);
          $users = DB::select("SELECT * FROM `fee_receipt_number` WHERE `appli_id` = '$order_id' ORDER BY `receipt_number` DESC LIMIT 1");
          $fee_receipt_no = "NPSYPR/APPLICATION/000".$users[0]->receipt_number;
          DB::table('students')->where("id",$order_id)->update(["fee_receipt_no"=>$fee_receipt_no,"status"=>"Submitted"]);

          
          return redirect('fee_receipt/a?appli_id='.$order_id);
        }

        else if($transaction->isFailed())
        {
          //Transaction Failed
          $payment = new PaytmWallet();
          $order_id = $response['ORDERID'];
          $txn_amount = $response['TXNAMOUNT'];
          $status = $response['STATUS'];
          // Update other relevant fields based on your requirements
          $data=array("order_id"=>$order_id,"txn_amount"=>$txn_amount,"status"=>$status);
          DB::table('payment')->insert($data);
          return view('paytm.paytm-fail');
        }

        else if($transaction->isOpen())
        {
          //Transaction Open/Processing
          $payment = new PaytmWallet();
          $order_id = $response['ORDERID'];
          $txn_amount = $response['TXNAMOUNT'];
          $status = $response['STATUS'];
          // Update other relevant fields based on your requirements
          $data=array("order_id"=>$order_id,"txn_amount"=>$txn_amount,"status"=>$status);
          DB::table('payment')->insert($data);
          return view('paytm.paytm-fail');
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }

    /**
     * Paytm Payment Page
     *
     * @return Object
     */
    public function paytmPurchase()
    {
        return view('paytm.payment-page');
    } 
}