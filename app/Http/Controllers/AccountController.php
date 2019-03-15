<?php

namespace App\Http\Controllers;
use App\Account;
use App\User;
use Illuminate\Http\Request;
use App\Transaction;
use Paystack;
use Alert;
use Auth;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generateKey(){
        $number =uniqid();
        if($this->genKeyExists($number)){
            return $this->generateKey();
        }else{
            return $number;
        }
    }
    public function genKeyExists($number){
        return Transaction::whereTransaction_code($number)->exists();
    }
    public function  LoadAccount(Request $request)
        {
          $account=Account::whereAccount_number($request->account_number)->first();
          $account->balance=$request->amount +$account->balance;
          if($account->save()){
              $transaction=new Transaction;
              $transaction->receiver_id=$account->id;
              $transaction->sender_id=$account->id;
              $transaction->amount=$request->amount;
              $transaction->reason_payment=$request->gateway;
              $transaction->status=1;
              $transaction->transaction_code=$request->transaction_code;
              if($transaction->save())
              {
                  return response()->json([
                        "status"=>201,
                        "message"=>"Units added"
                  ]);
              }


          }
          else{
              return response()->json([
                  "status"=>405,
                  "message"=>"Opps an error just occured"
              ]);
          }
        } 
        public function redirectToGateWay()   
        {
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        public function handleGatewayCallback()
        {
            $paymentDetails=Paystack::getPaymentData();
            $status=$paymentDetails['status'];
            $amount=$paymentDetails['data']['amount'];
            $amt=$amount/100;
            $id=$paymentDetails['data']['id'];
            $reference=$paymentDetails['data']['reference'];
            $customerEmail=$paymentDetails['data']['customer']['email'];
            // dd($paymentDetails);
            if($status=='true')
            {
                $user=User::whereEmail($customerEmail)->first();
                $id=$user->id;
                $account=Account::whereUser_id($id)->first();
                $account->balance=$account->balance+$amt;
                if($account->save()){
                $transaction=new Transaction;
                $transaction->sender_id=$account->id;
                $transaction->receiver_id=$account->id;
                $transaction->amount=$account->balance;
                $transaction->reason_payment='paystack personal payment';
                $transaction->status=1;
                $transaction->transaction_code=$reference;
                if($transaction->save()){
                    Alert::success('Success','Account has been updated');
                    redirect()->back()->with('status','Account has been updated');
                }else{
                    Alert::error('Error','Opps error occured transaction');
                    redirect()->back()->with('Error','Opps error occured transaction');
                }
            }else{
                Alert::error('Error','Opps error occured account');
                    redirect()->back()->with('Error','Opps error occured transaction');
            }
                

                

            }else{
                Alert::error('Error','Error from paystack');
                    redirect()->back()->with('Error','Opps error occured transaction');
            }
        }
}
