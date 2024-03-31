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
                            <li><a href="demo-medical.html">Home</a></li>
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

                    <p>At CEF Medics, we undestand the challenges that come.</p>

                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae nunc consequat, viverra nisl eget, dictum eros. Maecenas sit amet iaculis massa. Sed dui tellus, pellentesque non enim eget, cursus sollicitudin tellus. Cras eget varius enim. Aenean ac libero finibus, varius nisi a, cursus magna. Vestibulum vitae massa purus. Etiam vulputate ullamcorper diam, a iaculis nulla placerat a. Aenean ac libero finibus, varius nisi a, cursus magna. Vestibulum vitae massa purus. Etiam vulputate ullamcorper diam, a iaculis nulla placerat a.</p>
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
                                <strong data-to="12">0</strong>
                                <label>Departments</label>
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

            <div class="row mb-5">
                <div class="col">
                    <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
                        <section class="toggle">
                            <a class="toggle-title">Payment Options</a>
                            <div class="toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. </p>
                            </div>
                        </section>
                        <section class="toggle">
                            <a class="toggle-title">Appointments</a>
                            <div class="toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                            </div>
                        </section>
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