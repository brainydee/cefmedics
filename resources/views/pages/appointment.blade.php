@extends('layouts.main')

@section('content')
<div role="main" class="main">
        <section class="page-header page-header-modern bg-color-primary page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Book an Appointment</h1>
                        <span class="sub-title">Our Doctors are available on Saturdays 2pm - 5pm</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="offset-md-2 col-md-8 offset-md-2">
                <div class="shadow-sm p-5">
                    <form class="contact-form" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">First Name</label>
                                <input type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control text-3 h-auto py-2" name="firstname" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Last Name</label>
                                <input type="text" value="" data-msg-required="" data-msg-email="Please enter your last name." maxlength="100" class="form-control text-3 h-auto py-2" name="lastname" required>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Appointment Type</label>
                                <div class="custom-select-1">
                                    <select name = "speciality"class="form-select form-control h-auto py-2" data-msg-required="Please select a speciality." required>
                                        <option value="">- SELECT -</option>
                                        <option value="oncology">Oncology</option>
                                        <option value="psyco-oncology">Psyco-oncology</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-2">Appointment Date</label>
                                <input type="date" id="saturdayDate" data-msg-required="Please select a Saturday." class="form-control text-3 h-auto py-2" required disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Start Time</label>
                                <input type="time" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control text-3 h-auto py-2" name="firstname" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">End Time</label>
                                <input type="time" value="" data-msg-required="" data-msg-email="Please enter your last name." maxlength="100" class="form-control text-3 h-auto py-2" name="lastname" required>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Upload Test Result (Max: 2MB)</label>
                                <input type="file" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="file" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Address</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Reason for appointment</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="reason" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="agree" id="tabContent9Checkbox" data-msg-required="You must agree before submiting." required>
                                    <label class="form-check-label" for="tabContent9Checkbox">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Submit Form" class="btn btn-primary" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
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