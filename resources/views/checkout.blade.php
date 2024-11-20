@push('title')
    <title>Rainchem : Checkout</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="feature-section-1">
        <div class="container">
            <div class="col-12">
                <div class="heading-section-1">
                    <h1 class="main-heading">Checkout</h1>
                    <p class="sub-heading">Fill Shipping and Billing Address and confirm the amount before placing the order!
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="career-form-section">
                    <form action="/place-order" class="career-form" method="post">
                        @csrf
                        <h1>Fill the Shipping and Billing Details</h1>
                        <h4>Shipping Details</h4>
                        <input type="text" name="shipping_street" id="" class="input-field"
                            placeholder="Enter Street Address*" required />
                        <input type="text" name="shipping_city" id="" class="input-field"
                            placeholder="Enter City*" required />
                        <input type="number" name="shipping_zipcode" id="" class="input-field"
                            placeholder="Enter Zipcode*" required />
                        <select name="shipping_state" class="input-field" required>
                            <option value="">Select State*</option>
                            <option value="Delhi">Delhi</option>
                        </select>
                        <select name="shipping_country" class="input-field" required>
                            <option value="">Select Country*</option>
                            <option value="India">India</option>
                        </select>
                        <h4>Billing Details</h4>
                        <input type="text" name="billing_street" id="" class="input-field"
                            placeholder="Enter Street Address*" required />
                        <input type="text" name="billing_city" id="" class="input-field"
                            placeholder="Enter City*" required />
                        <input type="number" name="billing_zipcode" id="" class="input-field"
                            placeholder="Enter Zipcode*" required />
                        <select name="billing_state" class="input-field" required>
                            <option value="">Select State*</option>
                            <option value="Delhi">Delhi</option>
                        </select>
                        <select name="billing_country" class="input-field" required>
                            <option value="">Select Country*</option>
                            <option value="India">India</option>
                        </select>
                        <h4>Customer Details</h4>
                        <input type="text" name="customerName" class="input-field" placeholder="Enter Full Name*"
                            required />
                        <input type="text" name="customerEmail" class="input-field" placeholder="Enter Email Address*"
                            required />
                        <input type="number" name="phone" class="input-field" placeholder="Enter Phone Number*"
                            required />
                        <input type="text" name="gst" class="input-field"
                            placeholder="Enter GST Number (optional)" />

                        <h4>Review Order Details</h4>
                        <p><strong>Note - </strong>Kindly review items in your cart before placing the order!</p>
                        <div class="order-review-section">
                            <div class="order-total-before-tax">
                                <h4>Sub Total </h4>
                                <h4>&#8377;{{ $shoppingCart['grandTotal'] }}</h4>
                            </div>
                            <div class="tax-amount">
                                <h4>Tax Calculated (at 18%) </h4>
                                <h4>&#8377;{{ round(($shoppingCart['grandTotal'] * 18) / 100) }}</h4>
                            </div>
                            <div class="order-total-after-tax">
                                <h2>Grand Total </h2>
                                <h2>&#8377;{{ $shoppingCart['grandTotal'] + round(($shoppingCart['grandTotal'] * 18) / 100) }}
                                </h2>
                            </div>
                        </div>
                        <button class="btn btn-black" type="submit">Place Order</button>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
