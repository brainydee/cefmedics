<div>
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
            </div>
        </div>
        <div class="row">
             @if(auth()->user()->user_type == 'admin')
                <div class="col-lg-6">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Earnings</h6>
                                
                                <span>&#8358; {{number_format(isset($earnings) ? $earnings->total_earnings : 0, 2)}}</span>
                            </div>
                        </article>
                    </div>
                </div>
            @endif
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Appointments</h6>
                            @if(auth()->user()->user_type == 'admin')
                                <span>{{$total_appointments}}</span>
                            @else
                                <span>{{auth()->user()->appointments->where('active', true)->count()}}</span>
                            @endif
                        </div>
                    </article>
                </div>
            </div>
            
        @if(auth()->user()->user_type != 'admin')
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Tests Result Uploaded</h6>
                            <span>{{$test_results}}</span>
                        </div>
                    </article>
                </div>
            </div>
        @endif
        </div>
    </section>
</div>
