<div>
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Payments</h2>
            </div>
        </div>
        <div class="card-body bg-white">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle" scope="col">S/N</th>
                                <th class="align-middle" scope="col">Status</th>
                                <th class="align-middle" scope="col">Reference</th>
                                <th class="align-middle" scope="col">Transaction Date</th>
                                <th class="align-middle" scope="col">Channel</th>
                                <th class="align-middle" scope="col">Currency</th>
                                <th class="align-middle" scope="col">Amount</th>
                                <th class="align-middle" scope="col">Gateway Response</th>
                                <th class="align-middle" scope="col">IP Address</th>
                                <th class="align-middle" scope="col">Card Type</th>
                                <th class="align-middle" scope="col">Bank</th>
                                <th class="align-middle" scope="col">Customer Email</th>
                                <th class="align-middle" scope="col">Appointment Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $n=0;
                            @endphp
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{++$n}}</td>
                                    <td>{{$payment->payment_status == 1 ? 'successful' : 'failed'}}</td>
                                    <td>{{$payment->reference}}</td>
                                    <td>{{$payment->transaction_date}}</td>
                                    <td>{{$payment->channel}}</td>
                                    <td>{{$payment->currency}}</td>
                                    <td>{{$payment->amount}}</td>
                                    <td>{{$payment->gateway_response}}</td>
                                    <td>{{$payment->ip_address}}</td>
                                    <td>{{$payment->card_type}}</td>
                                    <td>{{$payment->bank}}</td>
                                    <td>{{$payment->customer_email}}</td>
                                    <td>{{$payment->appointment->appointment_type}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-responsive end// -->
            {{ $payments->links() }}
        </div>
    </section>
   
</div>
