<?php

namespace App\Livewire;

use App\Models\Appointment;
use Paystack;
use Livewire\Component;
use Illuminate\Support\Str;

class Paymmentpage extends Component
{

    public $appointment;

    public function pay()
    {
        try{
            $reference =  $this->generateReference();
            $email     =  auth()->user()->email;
            $amount    =  intval(50000) * 100;

            $data = array(
                "amount"    =>  $amount,
                "reference" =>  $reference,
                "email"     =>  $email,
                "currency"  => "NGN",
                "metadata"  => [
                    "email"  =>  $email,
                    "appointment_id" => $this->appointment->id
                ]
            );
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            // return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
            toastr()
            ->progressBar(false)
            ->addError($e->getMessage());
            return redirect()->back();
        }  
    }

    public function mount()
    {
        $this->appointment = Appointment::where('user_id', auth()->user()->id)->first();
    }

    private function generateReference()
    {
        $length = 20;
        $reference = Str::random($length);
        return $reference;
    }

    public function render()
    {
        return view('livewire.paymmentpage')->layout('dashboard.layout.app');
    }

  
}
