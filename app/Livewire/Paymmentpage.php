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

            if($amount == 0){
                toastr()
                ->progressBar(false)
                ->addError("Action Denied");
                return redirect()->back();
            }

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
            toastr()
            ->progressBar(false)
            ->addError('Something went wrong please try again later.');
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
