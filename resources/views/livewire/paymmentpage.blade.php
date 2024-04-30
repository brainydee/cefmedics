<div>
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4" style="height: 100%;">
                    <div class="card-header">
                        <h4>Pay Appointment Fee</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">First Name</label>
                                        <input type="text" value="{{auth()->user()->firstname}}" placeholder="Type here" class="form-control" id="product_name" disabled />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Last Name</label>
                                        <input type="text" value="{{auth()->user()->lastname}}" placeholder="Type here" class="form-control" id="product_name" disabled/>
                                    </div>
                                </div>
                            </div>  
                         
                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input type="text" value="{{auth()->user()->email}}" placeholder="Type here" class="form-control" id="product_name" disabled />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Date</label>
                                        <div class="row gx-2">
                                            <input placeholder="" value="{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d-m-Y') }}" type="text" class="form-control" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Time</label>
                                    <div class="row gx-2">
                                        <input placeholder="$" value="{{$appointment->appointment_time}}" type="text" class="form-control" disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Fee</label>
                                        <div class="row gx-2">
                                            <input placeholder="$" value="&#8358;50,000" type="text" class="form-control"  disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Currency</label>
                                    <input placeholder="" value="NGN" type="text" class="form-control" disabled />
                                </div>
                            </div>
                            <div>
                                <button type="button" wire:click = "pay" class="btn btn-primary text-white rounded font-sm mr-5 hover-up"><i class="fa fa-check"></i>&nbsp;Pay Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- card end// -->
              
                <!-- card end// -->
            </div>
            <div class="col-lg-6">
                <div class="card" style="height: 100%;">
                    @if (App::environment('production'))
                        <img src="{{ asset('public/assets/img/pay.jpg') }}"/>
                    @else
                        <img src="{{ asset('assets/img/pay.jpg') }}"/>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
