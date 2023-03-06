@extends('layouts.welcome')
@section('content')
<section class="web">
    <div class="container-fluid">
        <div id="carouselExampleIndicators p-5" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- first corousel-->
                <div class="carousel-item active p-5" style="background-image:url({{url('images/doctor.jpg')}}); background-repeat: no-repeat;  background-size: cover;">
                    <div class="col-md col-xl p-5">
                        <div class="d-flex justify-content-between">
                            <div class="row mx-auto justify-content-center">
                                <div class="tile col-md-4 col-xl-4 m-3 item">
                                    <div class="m-4 p-3">
                                        <div class="item-title">
                                            <p>Blood Donation</p>
                                        </div>
                                        <div class="item-body">
                                            <p>Register as a blood donor</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tile col-md-4 col-xl-4 m-3 item">
                                    <div class="m-4 p-3">
                                        <div class="item-title">
                                            <p>Doctor Appointment</p>
                                        </div>
                                        <div class="item-body">
                                            <p>Get a doctor at your timing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second corousel-->
                <div class="carousel-item p-5" style="background-image:url({{url('images/doctor2.jpeg')}}); background-repeat: no-repeat;  background-size: cover;">
                    <div class="col-md col-xl p-5">
                        <div class="d-flex justify-content-between">
                            <div class="row mx-auto justify-content-center">
                                <div class="tile col-md-4 col-xl-4 m-3 item">
                                    <div class="m-4 p-3">
                                        <div class="item-title">
                                            <p>Contact Doctors</p>
                                        </div>
                                        <div class="item-body">
                                            <p>Message a doctor</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tile col-md-4 col-xl-4 m-3 item">
                                    <div class="m-4 p-3">
                                        <div class="item-title">
                                            <p>Chats</p>
                                        </div>
                                        <div class="item-body">
                                            <p>Get online support</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- third corousel-->
                <div class="carousel-item p-5 v-50" style="background-image:url({{url('images/doctor3.jpeg')}}); background-repeat: no-repeat;  background-size: cover;">
                    <div class="col-md col-xl p-5">
                        <div class="d-flex justify-content-between">
                            <div class="row mx-auto justify-content-center">
                                <div class="tile col-md-4 col-xl-4 m-3 item">
                                    <div class="m-4 p-3">
                                        <div class="item-title">
                                            <p>My profile</p>
                                        </div>
                                        <div class="item-body">
                                            <p>Update my online profile</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile col-md-4 col-xl-4 m-3 item">
                                    <div class="m-4 p-3">
                                        <div class="item-title">
                                            <p> Account</p>
                                        </div>
                                        <div class="item-body">
                                            <p>My Account</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--Services-->
    <div class="row tile mt-5 ml-3 mr-5 ">
        <div class="d-flex justify-content-center">
            <div class="web mr-4">
                <h3 class="display-4">Get Started now</h3>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="web ml-3">
                <div class="web">
                    <a href="{{ route('home') }}" class="btn btn-outline-dark" hr>Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <!--Services-->
    <div class="row mx-auto justify-content-center mt-4 p-3">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-6 d-flex justify-content-center">
                <h3 class="display-4">Our Services</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" col-md-6 col-xl-6 web">
                <div class="web">
                    <p>With the assistance of cutting-edge technology, Afya Bora is bringing healthcare services at the comfort of your home with your mobile phone. We enable patient’s especially pregnant mothers and women to access reliable and instant online healthcare services</p>
                </div>
            </div>
        </div>
        <div class="col col-md-4 col-xl-3  m-3 tile item">
            <div class="m-4 p-3">
                <div class="item-title">
                    <label class="title">Maternity</label>
                </div>
                <div class="item-body">
                    <p>Whether you are trying to be a mother, or you are expecting, we have just the doctors for you.</p>
                </div>
            </div>
        </div>

        <div class="col col-md-4 col-xl-3 m-3 tile item">
            <div class="m-4 p-3">
                <div class="item-title">
                    <p>Gynaecologist</p>
                </div>
                <div class="item-body">
                    <p>Get access to one of our many qualified OBGYNs with years of experience and get your health checked.</p>
                </div>
            </div>
        </div>

        <div class="col col-md-4 col-xl-3 m-3 tile item">
            <div class="m-4 p-3">
                <div class="item-title">
                    <p>Dermatologist</p>
                </div>
                <div class="item-body">
                    <p>Dont let skin and hair conditions stop you from enjoying your daily life, find your doctor today.</p>
                </div>
            </div>
        </div>

        <div class="tile col col-md-4 col-xl-3 m-3 item">
            <div class="m-4 p-3">
                <div class="item-title">
                    <p>Cardiology</p>
                </div>
                <div class="item-body">
                    <p>Talk to a cardiologist today about your heart and how to take better care of your circulatory system.</p>
                </div>
            </div>
        </div>
        <div class="tile col col-md-4 col-xl-3 m-3 item">
            <div class="m-4 p-3">
                <div class="item-title">
                    <p>History</p>
                </div>
                <div class="item-body">
                    <p>Manage your health records in a safe secure environment that assures easy and regulated access
                        Afya App does not share your health records with anyone </p>
                </div>
            </div>
        </div>
    </div>
    <!--about-->
    <section>
        <div class="row m-5">
            <div class="d-flex justify-content-center m-3">
                <h4 class="display-4">About us</h4>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="item">
                    <img class="img-fluid" src="{{ url('images/doctor.jpg') }}" style="background: cover; overflow:hidden;" alt="doctor">
                </div>
            </div>
            <div class="col-md-6 col-xl lead">
                <h2>Our Objective</h2>
                <br>
                <p>
                    Our main objective is to ensure quality healthcare is accessible to you, which is simple, transparent and available anytime/anywhere
                </p>
                <strong> {{ config('app.name') }}</strong> is an Online Doctor Consultation Platform in Kenya where one can consult a doctor via Web/App.
                <br>
                <br>
                <!--philosophy-->
                <h2>Our Philosophy</h2>
                <br>
                <p>
                    Health matters! <strong>{{ config('app.name') }}</strong> is built on the philosophy that people should live a happier, healthier and more productive life. Everyone is entitled to qualitative medical care. It should be accessible, affordable and available at all times. Our endeavor is to provide innovative solutions which are user-friendly and simplify lives.
                </p>
                <!--Our Beliefs-->
                <h2>Our Beliefs</h2>
                <br>
                <p>
                    Our beliefs extend to mutual respect, gender equity, work place transparency and openness to disruptive and sustainable solutions that will help achieve the organization’s goals and individual growth. We are simple, honest, highly approachable and healthcare services that are within everyone’s reach.
                </p>
            </div>
        </div>
    </section>
</section>
@endsection
