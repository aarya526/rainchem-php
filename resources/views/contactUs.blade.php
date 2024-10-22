@push('title')
    <title>Rainchem : Contact Us</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="hero-section" style="height: 347px;">
        <div class="hero-section-backdrop"></div>
        <div class="hero-information">
            <h1 class="hero-mainheading" style="font-size: 48px;">Contact Us</h1>
            <div class="navigation-bar">
                <a href="/">Home</a>
                <h4>/</h4>
                <h4>Contact Us</h4>
            </div>
        </div>
    </div>

    <div class="feature-section-2">
        <div class="container">
            <div class="col-12">
                <div class="heading-section-1">
                    <h1 class="main-heading">We’re Just a Message Away!</h1>
                    <p class="sub-heading">CONNECT WITH US EASILY</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-4">
                <div class="contact-details">
                    <div class="address">
                        <h4 class="contact-logo"><i class="fa-solid fa-house"></i></h4>
                        <div class="state">
                            <h4>Uttar Pradesh, India</h4>
                            <p>14-238, Noida</p>
                        </div>
                    </div>
                    <div class="address">
                        <h4 class="contact-logo"><i class="fa-solid fa-phone"></i></h4>
                        <div class="state">
                            <h4>+91-999999999</h4>
                            <p>Mon-Sat, 9:00 am - 6.30pm</p>
                        </div>
                    </div>
                    <div class="address">
                        <h4 class="contact-logo"><i class="fa-solid fa-envelope"></i></h4>
                        <div class="state">
                            <h4>rainchem@gmail.com</h4>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="career-form-section">
                    <form action="/" class="career-form" method="post">
                        <div class="container" style="align-items: center;">
                            <div class="col-6"
                                style="display: flex; flex-direction: column; gap: 14px; align-items: center;">
                                <input type="text" name="full_name" id="" class="input-field"
                                    placeholder="Full Name*" />
                                <input type="email" name="email" id="" class="input-field"
                                    placeholder="Email Address*" />
                                <input type="number" name="phone" id="" class="input-field"
                                    placeholder="Phone Number*" />
                                <input type="text" name="company_name" id="" class="input-field"
                                    placeholder="Company Name (optional)*" />
                            </div>
                            <div class="col-6" style="display: flex; flex-direction: column; gap: 14px;">
                                <input type="text" name="subject" id="" class="input-field"
                                    placeholder="Subject*" />
                                <textarea name="message" id="" cols="30" rows="4" class="input-field" placeholder="Message*"></textarea>
                                <button type="submit" class="btn btn-red">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
