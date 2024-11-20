@push('title')
    <title>Rainchem : Cart</title>
@endpush
@extends('common.main')
@section('main-section')
    {{-- <div class="hero-section" style="height: 347px;">
        <div class="hero-section-backdrop"></div>
        <div class="hero-information">
            <h1 class="hero-mainheading" style="font-size: 48px;">{{ $->categoryName }}</h1>
            <div class="navigation-bar">
                <a href="/">Home</a>
                <h4>/</h4>
                <h4>{{ $c->categoryName }}</h4>
            </div>
        </div>
    </div> --}}

    @if ($cart)
        <div class="feature-section-1">
            <div class="container">
                <div class="col-12">
                    <div class="heading-section-1">
                        <h1 class="main-heading">Cart</h1>
                        <p class="sub-heading">Add/Update or Remove Cart Items</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-12">
                    <div class="cart-section">
                        @foreach ($cart['cartItems'] as $c)
                            <div class="single-cart-item">
                                <a class="btn btn-red cart-delete" href="/delete-cart-item/{{ $c['cart_id'] }}"
                                    id="deleteCart_{{ $c['cart_id'] }}"><i class="fa-solid fa-trash"></i></a>
                                <div class="container">
                                    <div class="col-4">
                                        <div class="product-image">
                                            <img src="{{ Storage::url($c['product']['imgUrl']) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="product-details">
                                            <div class="container">
                                                <div class="col-8">
                                                    <div class="product-description">
                                                        <a href="/view-product-details/{{ $c['product']['product_id'] }}"
                                                            class="product-title">{{ $c['product']['product_name'] }}</a>
                                                        <h4 class="product-category">
                                                            Category : {{ $c['product']['category']['categoryName'] }}
                                                        </h4>
                                                        <div class="single-product-price-section">
                                                            <h4 class="ourPrice">&#8377;{{ $c['product']['ourPrice'] }}</h4>
                                                            <h4 class="listPrice">&#8377;{{ $c['product']['listPrice'] }}
                                                            </h4>
                                                            <span
                                                                class="discount">({{ round((($c['product']['listPrice'] - $c['product']['ourPrice']) / $c['product']['listPrice']) * 100) }}%
                                                                Off)</span>
                                                        </div>
                                                        <form action="/update-cart-item" method="post">
                                                            @csrf
                                                            <div class="quantity-section">
                                                                <h4>Quantity : </h4>
                                                                <input type="hidden" name="cart_id"
                                                                    value="{{ $c['cart_id'] }}" />
                                                                <select name="cartItemQuantityRequested"
                                                                    class="cart-quantity"
                                                                    data-item-id="{{ $c['cart_id'] }}">
                                                                    @for ($i = 1; $i <= $c['product']['stock']; $i++)
                                                                        <option value="{{ $i }}"
                                                                            {{ $i == $c['quantity'] ? 'selected' : '' }}>
                                                                            {{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                <button type="submit" class="btn btn-black update-button"
                                                                    style="display:none;"
                                                                    data-item-id="{{ $c['cart_id'] }}">Update
                                                                    Quantity</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="product-pricing">
                                                        <h4 class="total-price">&#8377;{{ $c['subTotal'] }}</h4>
                                                        <h4 class="heading">Sub Total</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-8"></div>
                <div class="col-4">
                    <div style="display: flex; flex-direction:column; gap: 10px;">
                        <h4 class="cart-totalAmountBeforeTax">Taxable Amount :
                            <span>&#8377;{{ $cart['grandTotal'] }}</span>
                        </h4>
                        <a href="/checkout" class="btn btn-black" style="align-self: flex-start;">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="feature-section-1">
            <div class="container">
                <div class="col-12">
                    <div class="heading-section-1">
                        <h1 class="main-heading">Your Cart is Empty!</h1>
                        <p class="sub-heading">Add Something in your cart.</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($products->count() > 0)
        <div class="feature-section-2">
            <div class="container">
                <div class="col-12">
                    <div class="heading-section-1">
                        <h1 class="main-heading">Shop</h1>
                        <p class="sub-heading">Browse other products</p>
                    </div>
                </div>
            </div>
            <div class="container">
                @foreach ($products as $p)
                    <div class="col-4">
                        <div class="product-single-card">
                            <div class="img-section">
                                <img src="{{ Storage::url($p->imgUrl) }}" alt="image unavailable">
                            </div>
                            <div class="product-details-section">
                                <h4 class="product-name">{{ $p->product_name }}</h4>
                                <div class="price-section">
                                    <h4 class="product-saleprice">&#8377;{{ $p->ourPrice }}</h4>
                                    <h4 class="product-ourprice">&#8377;{{ $p->listPrice }}</h4>
                                </div>
                                @if ($p->stock >= 10)
                                    <h4 class="product-in-stock">In Stock</h4>
                                @else
                                    <h4 class="product-outofstock">only {{ $p->stock }} left</h4>
                                @endif
                                <a href="/view-product-details/{{ $p->product_id }}" class="btn btn-black">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endif
@endsection
