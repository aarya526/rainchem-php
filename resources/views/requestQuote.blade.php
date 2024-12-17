@push('title')
    <title>Rainchem : Request a Quote</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="hero-section" style="height: 347px; background-image : url('/img/contact us hero section image.jpg');">
        <div class="hero-section-backdrop"></div>
        <div class="hero-information">
            <h1 class="hero-mainheading" style="font-size: 48px;">Request a Quote</h1>
            <div class="navigation-bar">
                <a href="/">Home</a>
                <h4>/</h4>
                <h4>Request a Quote</h4>
            </div>
        </div>
    </div>

    <div class="feature-section-2">
        <div class="container">
            <div class="col-12">
                <div class="heading-section-1">
                    <h1 class="main-heading">Book an appointment for quotation</h1>
                    <p class="sub-heading">Our Company Executive will call you on the date booked</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-4">
                <div class="contact-details">
                    <div class="address">
                        <h4 class="contact-logo"><i class="fa-solid fa-location-dot"></i></h4>
                        <div class="state">
                            <h4>Uttar Pradesh, India</h4>
                            <p>A-35, Sector 7, Noida</p>
                        </div>
                    </div>
                    <div class="address">
                        <h4 class="contact-logo"><i class="fa-solid fa-phone"></i></h4>
                        <div class="state">
                            <h4>+91-9560177400/9810318183</h4>
                            <p>Mon-Sat, 9:00 am - 6.30pm</p>
                        </div>
                    </div>
                    <div class="address">
                        <h4 class="contact-logo"><i class="fa-solid fa-envelope"></i></h4>
                        <div class="state">
                            <h4>services@rainchem.com</h4>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="career-form-section">
                    @if (session('Success'))
                        <div class="form-message form-success" style="display: block;">
                            <div>{{ session('Success') }}</div>
                        </div>
                    @endif
                    <form action="/requestaquotePost" class="career-form" method="POST" id="contactSubmitForm">
                        @csrf
                        <div class="container" style="align-items: center;">
                            <div class="col-6"
                                style="display: flex; flex-direction: column; gap: 14px; align-items: center;">
                                <input type="text" name="full_name" id="" class="input-field"
                                    placeholder="Full Name*" required />
                                <input type="email" name="email" id="" class="input-field"
                                    placeholder="Email Address*" required />
                                <input type="number" name="phone" id="" class="input-field"
                                    placeholder="Phone Number*" required />
                                <input type="text" name="company_name" id="" class="input-field"
                                    placeholder="Company Name (optional)*" />
                            </div>
                            <div class="col-6" style="display: flex; flex-direction: column; gap: 14px;">
                                <input type="text" name="subject" id="" class="input-field"
                                    placeholder="Subject*" required />
                                <input type="text" name="appointmentDate" id="datepicker" class="input-field"
                                    placeholder="Appointment Date*" required />
                                <button type="submit" class="btn btn-red" id="contactSubmitFormButton">Book
                                    Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
