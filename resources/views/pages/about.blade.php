@extends('layouts.main')

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-primary page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Oncology</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row mt-5">
                <div class="col-lg-8">
                    <h2 class="font-weight-semibold mb-3">About Us</h2>

                    <p>At CEF Medics, we understand that navigating the complexities of cancer care can be overwhelming. That's why we're dedicated to providing compassionate and comprehensive telemedicine services to support patients throughout their journey.
                    </p>

                    <p class="mt-2">
                    Our mission at CEF Medics is to empower individuals facing cancer with the knowledge, resources, and emotional support they need to thrive. We believe in personalized care that goes beyond medical treatment, encompassing emotional well-being and holistic support.
                    </p>

                    <p class="mt-2">
                    Led by a team of experienced oncologists and mental health professionals, we offer specialized telemedicine consultations in oncology and psycho-oncology. Our multidisciplinary approach ensures that patients receive tailored care that addresses both the physical and emotional aspects of their diagnosis.
                    </p>

                    <p class="mt-2">
                    With our telemedicine platform, we provide convenient access to oncology and psycho-oncology support from the comfort of home. Our secure and user-friendly technology enables patients to connect with our team remotely, eliminating the barriers of distance and transportation.
                    </p>

                    <p class="mt-2">
                    We provide comprehensive services from initial diagnosis to survivorship care, CEF Medics offers a range of services to meet the diverse needs of cancer patients. Whether you're seeking medical advice, emotional support, or guidance on navigating treatment options, our team is here to help every step of the way
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
                    <div class="col-sm-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h3>"Health is the most important thing you have in life!"</h3>
                            <p class="mb-0">Contact us now to schedule an appointment.</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="demo-medical-contact.html" target="_blank" class="btn btn-lg btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection