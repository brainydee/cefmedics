<div>
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Earnings</h6>
                            <span>&#8358; 0</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Appointments</h6>
                            <span>{{auth()->user()->appointments->count()}}</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Earning</h6>
                            <span>$6,982</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</div>
