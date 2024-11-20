@push('title')
    <title>Rainchem : {{ $c->categoryName }}</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="hero-section" style="height: 347px;">
        <div class="hero-section-backdrop"></div>
        <div class="hero-information">
            <h1 class="hero-mainheading" style="font-size: 48px;">{{ $c->categoryName }}</h1>
            <div class="navigation-bar">
                <a href="/">Home</a>
                <h4>/</h4>
                <h4>{{ $c->categoryName }}</h4>
            </div>
        </div>
    </div>


    <div class="feature-section-1">
        <div class="container">
            <div class="col-6">
                <div class="feature-card-4-wrapper">
                    <div class="heading-section-2">
                        <h4>{{ $c->categoryPageSubHeading }}</h4>
                        <h1>{{ $c->categoryPageMainHeading }}</h1>
                    </div>
                    <div class="feature-card-4">
                        <p>{{ $c->categoryDescription }}
                        </p>
                        <div class="feature-card-links-section">
                            <a href="#" class="btn btn-black">Product Catalogue</a> <a href="/contactUs"
                                class="btn btn-black">Request a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="about-us-image-section-1">
                    <div class="about-us-image-section-1-backdrop"></div>
                    <img src="/img/image 11 (1).png" alt="" />
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
                        <p class="sub-heading">Browse products under {{ $c->categoryName }}</p>
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
