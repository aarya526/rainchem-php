@push('title')
    <title>Rainchem : Careers</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="hero-section" style="height: 347px;">
        <div class="hero-section-backdrop"></div>
        <div class="hero-information">
            <h1 class="hero-mainheading" style="font-size: 48px;">Careers</h1>
            <div class="navigation-bar">
                <a href="/">Home</a>
                <h4>/</h4>
                <h4>Careers</h4>
            </div>
        </div>
    </div>

    <div class="feature-section-1">
        <div class="container">
            <div class="col-6">
                <div class="feature-card-4-wrapper">
                    <div class="heading-section-2">
                        <h4>Career Opportunities.</h4>
                        <h1>Unlock Your Potential, Shape Tomorrow.</h1>
                    </div>
                    <div class="feature-card-4">
                        <p>Rainchem is an equal opportunity employer and provide immense opportunities for personal and
                            professional growth.Compensation at Rainchem is designed to attract & retain best
                            talent.Rainchem maintains a data bank of profiles that is used internally by its HR team for
                            recruitment purposes.To seek employment with Rainchem, candidates are advised to fill the
                            details as below and upload their latest resume.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="about-us-image-section-1">
                    <div class="about-us-image-section-1-backdrop"></div>
                    <img src="/img/image (1).png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="feature-section-2">
        <div class="container">
            <div class="col-12">
                <div class="heading-section-1">
                    <h1 class="main-heading">Showcase Your Talent,<br /> Start Your Journey</h1>
                    <p class="sub-heading">Upload Resume.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="career-form-section">
                    <form action="/" class="career-form" method="post">
                        <input type="text" name="full_name" id="" class="input-field"
                            placeholder="Full Name of Applicant*" />
                        <input type="email" name="email" id="" class="input-field"
                            placeholder="Email of Applicant*" />
                        <input type="number" name="phone" id="" class="input-field"
                            placeholder="Phone Number of Applicant*" />
                        <input type="text" name="position" id="" class="input-field"
                            placeholder="Position Applied*" />
                        <textarea name="message" id="" cols="30" rows="10" class="input-field"
                            placeholder="Additional Information*"></textarea>
                        <button type="submit" class="btn btn-red">Upload</button>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
