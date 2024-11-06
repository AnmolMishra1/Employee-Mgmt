@extends('Frontend.master')
@section('content')

<div class="space-medium bg-light">
    <div class="page-header mb-5">
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10  col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                <div class="contact-form">
                    <h1 class="contact-info-title mb40 ">How Can We Help You?</h1>
                    <div class="row">
                        <form action="{{ route('contactStore') }}" method="post">
                            @csrf
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="name"></label>
                                    <input id="name" type="text" name="name" placeholder="Name" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only " for="email"></label>
                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="phone"></label>
                                    <input id="phone" type="tel" name="phone" placeholder="Phone" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="subject"></label>
                                    <input id="subject" name="subject" type="text" placeholder="Subject"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="message"></label>
                                    <textarea class="form-control pdt20" id="message" name="message" rows="4"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="text-center w-25 mx-auto mt-3">
                                <button type="submit" class="btn btn-success p-2 text-lg  rounded col-md-10">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.contact-form-->
                <!-- contact-info-->
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Our Contact Info</h2>
                            <p class="lead">Thanks for considering our HR services. Feel free to reach out using the
                                tool below, and you'll be able to monitor the progress of your inquiry.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="contact-section">
                            <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-info">
                                <p>Varanasi UttarPradesh
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="contact-section">
                            <div class="contact-icon"><i class="fa fa-phone"></i></div>
                            <div class="contact-info">
                                <p>+917355280981
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="contact-section">
                            <div class="contact-icon  "><i class="fa fa-envelope"></i></div>
                            <div class="contact-info">
                                <p>
                                    <br>anmolmishraoins24@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.contact-info-->
            </div>
        </div>
    </div>

            </div>
        </div>
    </div>
</div>
@endsection