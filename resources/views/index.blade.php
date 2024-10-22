@push('title')
    <title>Rainchem : Home</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="hero-section">
        <div class="hero-section-backdrop"></div>
        <div class="hero-information">
            <h4 class="hero-subheading">INDUSTRY-LEADING CLEANING SOLUTIONS</h4>
            <h1 class="hero-mainheading">Ensuring Safety and Hygiene in Every Environment</h1>
            <p class="hero-para">Rainchem provides high-performance cleaning and hygiene solutions tailored to
                ensure a
                cleaner, safer
                environment.</p>
            <a href="#" class="btn btn-red">Explore Our Products</a>
        </div>
    </div>
    <div class="feature-section-1">
        <div class="container">
            <div class="col-4">
                <div class="feature-card-1">
                    <img src="/img/Group 1.png" alt="">
                    <h4>Caring for the Planet</h4>
                    <p>Rainchem is committed to maintain safety of environment, ecology and society at large.All our
                        products and processes are aligned to the needs for care of this planet.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="feature-card-1">
                    <img src="/img/Group 2.png" alt="">
                    <h4>Wide Range of Industrial Solutions</h4>
                    <p>Rainchem provides versatile cleaning solutions designed to address the specific requirements of
                        various industries, ensuring safety, hygiene and operational efficiency.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="feature-card-1">
                    <img src="/img/Group 3.png" alt="">
                    <h4>Commitment Towards Stakeholders</h4>
                    <p>At Rainchem, we prioritize long-term relationships with our stakeholders by delivering consistent
                        quality, maintaining transparency, and driving sustainable growth that benefits everyone.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-section-2">
        <div class="container">
            <div class="col-12">
                <div class="heading-section-1">
                    <h1 class="main-heading">Our Capturing Market Sectors</h1>
                    <p class="sub-heading">Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-4">
                <div class="feature-card-2">
                    <img src="/img/image 5.png" alt="">
                    <a href="#">Food Safety & Kitchen Hygiene</a>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        women face higher conduct.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="feature-card-2">
                    <img src="/img/image 6-1.png" alt="">
                    <a href="#">House Keeping & Building Care</a>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        women face higher conduct.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="feature-card-2">
                    <img src="/img/image 6.png" alt="">
                    <a href="#">Commercial Laundering & Fabric Care</a>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        women face higher conduct.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-section-3">
        <div class="backdrop"></div>
        <div class="container">
            <div class="col-3">
                <div class="feature-card-3">
                    <div class="counter-section">
                        <div class="inner-counter">
                            <h1>24k</h1>
                        </div>
                    </div>
                    <h4>Projects Completed</h4>
                </div>
            </div>
            <div class="col-3">
                <div class="feature-card-3">
                    <div class="counter-section">
                        <div class="inner-counter">
                            <h1>5k</h1>
                        </div>
                    </div>
                    <h4>Factories Served</h4>
                </div>
            </div>
            <div class="col-3">
                <div class="feature-card-3">
                    <div class="counter-section">
                        <div class="inner-counter">
                            <h1>12k</h1>
                        </div>
                    </div>
                    <h4>Total Enquiries</h4>
                </div>
            </div>
            <div class="col-3">
                <div class="feature-card-3">
                    <div class="counter-section">
                        <div class="inner-counter">
                            <h1>15k</h1>
                        </div>
                    </div>
                    <h4>Happy Clients</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-section-4">
        <div class="container">
            <div class="col-7">
                <div class="feature-card-4-wrapper">
                    <div class="heading-section-2">
                        <h4>Customized Manufacturing Partnerships</h4>
                        <h1>Expert Solutions in Contract Manufacturing</h1>
                    </div>
                    <div class="feature-card-4">
                        <h4>We are here to listen from you deliver exellence</h4>
                        <p>Rainchem has large manufacturing infrastructure based at Baddi Himachal Pradesh. Rainchem has
                            capacity to undertake third party manufacture/private labeling for any large corporation.
                            Currently the existing plants are being utilized at 60% capacity utilization, hence a wider
                            scope for private labeling.Companies interested in private labeling/manufacturing
                            arrangement
                            may write at enquiry@rainchem.com</p>
                        <a href="#" class="btn btn-red">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="form-section-1">
                    <h4>Contact Now for Contract Manufacturing</h4>
                    <form action="/contractManufacturing" class="contact-form-1" method="post">
                        <input type="text" name="company_name" class="input-field" placeholder="Company Name..."
                            required />
                        <input type="text" name="full_name" class="input-field" placeholder="Full Name..." required />
                        <input type="number" name="phone" class="input-field" placeholder="Phone Number..." required />
                        <input type="email" name="email" class="input-field" placeholder="Email..." required />
                        <input type="text" name="subject" class="input-field" placeholder="Subject..." required />
                        <textarea name="message" class="input-field" cols="30" rows="10" placeholder="Message..." required></textarea>
                        <button type="submit" class="btn btn-red">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-section-1">
        <div class="container">
            <div class="col-12">
                <div class="heading-section-1">
                    <h1 class="main-heading">Latest posts from our Blog</h1>
                    <p class="sub-heading">Stay updated with our latest insights, tips, and trends – explore the
                        freshest content from our blog!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-4">
                <div class="blog-card-1">
                    <div class="image-section">
                        <img src="/img/image 6.png" alt="">
                        <div class="blog-owner-details">
                            <h4>Mark Weins</h4>
                            <div class="blog-data">
                                <h4 class="blog-date">13th Dec, 2024</h4>
                                <h4 class="blog-likes"><i class="fa-regular fa-heart"></i> 5</h4>
                                <h4 class="blog-comments"><i class="fa-regular fa-comment"></i> 10</h4>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="blog-heading">Automotive Engineering</a>
                    <p class="blog-intro-para">inappropriate behavior is often laughed off as “boys will be boys,”
                        women face higher conduct
                        women face higher conduct.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="blog-card-1">
                    <div class="image-section">
                        <img src="/img/image 6.png" alt="">
                        <div class="blog-owner-details">
                            <h4>Mark Weins</h4>
                            <div class="blog-data">
                                <h4 class="blog-date">13th Dec, 2024</h4>
                                <h4 class="blog-likes"><i class="fa-regular fa-heart"></i> 5</h4>
                                <h4 class="blog-comments"><i class="fa-regular fa-comment"></i> 10</h4>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="blog-heading">Automotive Engineering</a>
                    <p class="blog-intro-para">inappropriate behavior is often laughed off as “boys will be boys,”
                        women face higher conduct
                        women face higher conduct.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="blog-card-1">
                    <div class="image-section">
                        <img src="/img/image 6.png" alt="">
                        <div class="blog-owner-details">
                            <h4>Mark Weins</h4>
                            <div class="blog-data">
                                <h4 class="blog-date">13th Dec, 2024</h4>
                                <h4 class="blog-likes"><i class="fa-regular fa-heart"></i> 5</h4>
                                <h4 class="blog-comments"><i class="fa-regular fa-comment"></i> 10</h4>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="blog-heading">Automotive Engineering</a>
                    <p class="blog-intro-para">inappropriate behavior is often laughed off as “boys will be boys,”
                        women face higher conduct
                        women face higher conduct.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
