@push('title')
    <title>Rainchem : Vendor Registration</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="hero-section" style="height: 347px;">
        <div class="hero-section-backdrop"></div>
        <div class="hero-information">
            <h1 class="hero-mainheading" style="font-size: 48px;">Vendor Registration</h1>
            <div class="navigation-bar">
                <a href="/">Home</a>
                <h4>/</h4>
                <h4>Vendor Registration</h4>
            </div>
        </div>
    </div>

    <div class="feature-section-2">
        <div class="container">
            <div class="col-12">
                <div class="heading-section-1">
                    <h1 class="main-heading">For Vendors or Suppliers Desirous of Associating with Rainchem!</h1>
                    <p class="sub-heading">Fill all the mandatory Details</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="career-form-section">
                    <form action="/vendorRegistration" class="career-form" method="post">
                        <input type="text" name="company_name" id="" class="input-field"
                            placeholder="Name of Company*" required />
                        <select name="company_name" class="input-field" required>
                            <option value="">Type of Company*</option>
                            <option value="Proprietorship">Proprietorship</option>
                            <option value="private_limited">Private Limited</option>
                            <option value="wholly_owned_subsidairy">Wholly Owned Subsidairy</option>
                        </select>
                        <input type="text" name="company_status" id="" class="input-field"
                            placeholder="Company Status*" required />
                        <input type="text" name="gst_number" id="" class="input-field" placeholder="GST Number*"
                            required />
                        <input type="text" name="pan_number" id="" class="input-field"
                            placeholder="PAN Number (optional)" />
                        <input type="text" name="contact_person" id="" class="input-field"
                            placeholder="Contact Person*" required />
                        <input type="number" name="phone" id="" class="input-field" placeholder="Phone Number*"
                            required />
                        <input type="text" name="city" id="" class="input-field" placeholder="City*"
                            required />
                        <select name="state" class="input-field" required>
                            <option value="">state*</option>
                            <option value="Delhi">Delhi</option>
                        </select>
                        <input type="number" name="pincode" id="" class="input-field" placeholder="Pincode*"
                            required />
                        <select name="country" class="input-field" required>
                            <option value="">Country*</option>
                            <option value="india">India</option>
                        </select>
                        <input type="text" name="website_url" id="" class="input-field"
                            placeholder="Website Url (optional)" />
                        <input type="text" name="company_address" id="" class="input-field"
                            placeholder="Company Address*" required />
                        <textarea name="description" id="" cols="30" rows="10" class="input-field"
                            placeholder="Brief Description of the Company*" required></textarea>
                        <button type="submit" class="btn btn-red">Register</button>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
