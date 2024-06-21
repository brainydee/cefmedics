<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentConfirmedMail;
use App\Mail\NewAppointment;
use App\Models\Appointment;
use App\Models\Payment;
use Paystack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function handlePaymentData()
    {
        try {
            DB::beginTransaction();


            $paymentDetails       = Paystack::getPaymentData();
            $paymentstatus        = $paymentDetails['status'];
            $status               = $paymentDetails['status'] ?? null;
            $message              = $paymentDetails['message'] ?? null;
            $paymentdata_id       = $paymentDetails['data']['id'];
            $domain               = $paymentDetails['data']['domain'];
            $status               = $paymentDetails['data']['status'];
            $reference            = $paymentDetails['data']['reference'];
            $paid_at              = $paymentDetails['data']['paid_at'];
            $channel              = $paymentDetails['data']['channel'];
            $currency             = $paymentDetails['data']['currency'];
            $receipt_number       = $paymentDetails['data']['receipt_number'];
            $amount               = $paymentDetails['data']['amount'];
            $gateway_response     = $paymentDetails['data']['gateway_response'];
            $ip_address           = $paymentDetails['data']['ip_address'];
            $appointment_id       = $paymentDetails['data']['metadata']['appointment_id'];
            $fees                 = $paymentDetails['data']['fees'];
            $authorization_code   = $paymentDetails['data']['authorization']['authorization_code'];
            $bin                  = $paymentDetails['data']['authorization']['bin'];
            $last4                = $paymentDetails['data']['authorization']['last4'];
            $exp_month            = $paymentDetails['data']['authorization']['exp_month'];
            $exp_year             = $paymentDetails['data']['authorization']['exp_year'];
            $card_type            = $paymentDetails['data']['authorization']['card_type'];
            $bank                 = $paymentDetails['data']['authorization']['bank'];
            $country_code         = $paymentDetails['data']['authorization']['country_code'];
            $brand                = $paymentDetails['data']['authorization']['authorization_code'];
            $reusable             = $paymentDetails['data']['authorization']['reusable'];
            $signature            = $paymentDetails['data']['authorization']['signature'];
            $brand                = $paymentDetails['data']['authorization']['authorization_code'];
            $account_name         = $paymentDetails['data']['authorization']['account_name'];
            $receiver_bank_account_number =  $paymentDetails['data']['authorization']['receiver_bank_account_number'];
            $receiver_bank      =  $paymentDetails['data']['authorization']['receiver_bank'];
            $customer_firstname =  $paymentDetails['data']['customer']['first_name'];
            $customer_lastname  =  $paymentDetails['data']['customer']['last_name'];
            $customer_email     =  $paymentDetails['data']['customer']['email'];
            $customer_code      =  $paymentDetails['data']['customer']['customer_code'];
            $phone              =  $paymentDetails['data']['customer']['phone'];
            $transaction_date   =  $paymentDetails['data']['transaction_date'];



            if ($paymentstatus == true && $amount == 5000000) {

                $payment = new Payment([
                    'payment_status' => $paymentstatus,
                    'status' => $status,
                    'message' => $message,
                    'payment_data_id' => $paymentdata_id,
                    'domain' => $domain,
                    'status' => $status,
                    'reference' => $reference,
                    'paid_at' => $paid_at,
                    'channel' => $channel,
                    'currency' => $currency,
                    'receipt_number' => $receipt_number,
                    'amount' => $amount / 100,
                    'gateway_response' => $gateway_response,
                    'ip_address' => $ip_address,
                    'fees' => $fees,
                    'authorization_code' => $authorization_code,
                    'bin' => $bin,
                    'last4' => $last4,
                    'exp_month' => $exp_month,
                    'exp_year' => $exp_year,
                    'card_type' => $card_type,
                    'bank' => $bank,
                    'country_code' => $country_code,
                    'brand' => $brand,
                    'reusable' => $reusable,
                    'signature' => $signature,
                    'brand' => $brand,
                    'account_name' => $account_name,
                    'receiver_bank_account_number' => $receiver_bank_account_number,
                    'receiver_bank' => $receiver_bank,
                    'customer_firstname' => $customer_firstname,
                    'customer_lastname' => $customer_lastname,
                    'customer_email' => $customer_email,
                    'customer_code' => $customer_code,
                    'phone' => $phone,
                    'transaction_date' => $transaction_date,
                    'user_id' => auth()->user()->id,
                    'appointment_id' => intval($appointment_id),
                ]);


                $appointment = Appointment::find($appointment_id);
                $appointment->active = true;
                $appointment->status = 'ongoing';
                $appointment->save();
                $payment->save();

                DB::commit();

                if ($appointment->active) {
                    Mail::to(auth()->user()->email)->send(new AppointmentConfirmedMail(auth()->user(), $appointment));
                    Mail::to('info@cefmedics.com')->send(new NewAppointment(auth()->user(), $appointment));

                    toastr()
                        ->persistent()
                        ->closeButton()
                        ->addSuccess('Your appointment has been approved successfully.');
                } else {
                    toastr()
                        ->progressBar(false)
                        ->addError('Oops Appointment was not apporved');
                }

                return redirect(route('userdashboard'));
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            toastr()
                ->progressBar(false)
                ->addError('Something went wrong please try again later.');
            return redirect()->back();
        }
    }
}
