@extends('layouts.main')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern bg-color-primary page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Psyco-oncology</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Psyco-oncology</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row mt-5">
            <div class="col-lg-8">
                <h2 class="font-weight-semibold mb-3">Our Psyco-oncology Services</h2>


                <p>At CEF Medics, we recognize the profound emotional and psychological impact that a cancer diagnosis can have on individuals and their loved ones. That's why we offer a specialized online Psycho-Oncology service to provide comprehensive support throughout your cancer journey</p>

                <p class="mt-2">
                    Our team of experienced psycho-oncologists is dedicated to addressing the unique emotional and psychological challenges that arise before, during, and after cancer treatment. We understand that coping with cancer involves more than just medical treatment—it requires holistic support for mental and emotional well-being.
                </p>
            </div>
            <div class="col-lg-4">

                <div class="owl-carousel owl-theme dots-inside mt-2" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div>
                        <img src="img/demos/medical/gallery/gallery-2.jpg" alt="" class="img-fluid box-shadow-custom" />
                    </div>
                    <div>
                        <img src="img/demos/medical/gallery/gallery-3.jpg" alt="" class="img-fluid box-shadow-custom" />
                    </div>
                    <div>
                        <img src="img/demos/medical/gallery/gallery-4.jpg" alt="" class="img-fluid box-shadow-custom" />
                    </div>
                </div>

                <div class="row mt-5 mt-lg-4 mb-4 counters">
                    <div class="col-lg-12 mb-4">
                        <div class="counter counter-primary">
                            <strong data-to="20">0</strong>
                            <label>Years in Business</label>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="counter counter-primary">
                            <strong data-to="2">0</strong>
                            <label>Specialities</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="call-to-action-content">
                        <h3>"Health is the most important thing you have in life!"</h3>
                        <p class="mb-0">Contact us now to schedule an appointment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection