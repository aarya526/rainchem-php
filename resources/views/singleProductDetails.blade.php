@push('title')
    <title>Rainchem : {{ $singleProduct->product_name }}</title>
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


    <div class="feature-section-1">
        <div class="container">
            <div class="col-6">
                <div class="single-product-details-image-section">
                    <img src="{{ Storage::url($singleProduct->imgUrl) }}" alt="image not available" />
                </div>
            </div>
            <div class="col-6">
                <div class="single-product-card-wrapper">
                    <div class="heading-section-2">
                        <h4>Category : {{ $singleProduct->category->categoryName }}</h4>
                        <h1>{{ $singleProduct->product_name }}</h1>
                    </div>
                    <div class="feature-card-4">
                        <div class="single-product-price-section">
                            <h4 class="ourPrice">&#8377;{{ $singleProduct->ourPrice }}</h4>
                            <h4 class="listPrice">&#8377;{{ $singleProduct->listPrice }}</h4>
                            <span
                                class="discount">({{ round((($singleProduct->listPrice - $singleProduct->ourPrice) / $singleProduct->listPrice) * 100) }}%
                                Off)</span>
                        </div>
                        @if ($singleProduct->stock >= 10)
                            <h4 class="product-in-stock">In Stock</h4>
                        @else
                            <h4 class="product-outofstock">only {{ $singleProduct->stock }} left</h4>
                        @endif
                        <p>{{ $singleProduct->description }}
                        </p>
                        <div class="career-form-section">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <div>{{ session('success') }}</div>
                                </div>
                            @endif
                            <form action="/add-to-cart" class="career-form" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $singleProduct->product_id }}" />
                                <select name="quantityRequested" class="input-field" required>
                                    <option value="">Select Quantity</option>
                                    @for ($i = 1; $i <= $singleProduct->stock; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <div class="feature-card-links-section">
                                    <button type="submit" class="btn btn-black">Add To Cart</button> <a href="/contactUs"
                                        class="btn btn-black">Bulk Quote</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
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
