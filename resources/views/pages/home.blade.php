@extends('layouts.app')
@section('content')
<div class="container-fluid slider-header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">
                Find A <span class="text-primary text-lg" style="font-size:3.8rem;">Perfect Home</span> To Live With
                Your Family
            </h1>
            <p class="animated fadeIn mb-4 pb-2">
                Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
                Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
            </p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/blog_1.jpg')}}" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/blog_2.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected="">Property Type</option>
                                <option value="1">Property Type 1</option>
                                <option value="2">Property Type 2</option>
                                <option value="3">Property Type 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected="">Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn bg-secondary text-white border-0 w-100 py-3">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Property Listing</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="images/blog_6.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="images/blog_7.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="images/blog_8.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property List End -->

<section id="wsus__features">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 m-auto">
                <div class="wsus__heading_area">
                    <h2>Our Features</h2>
                    <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola estut
                        clita dolorem ei est mazim fuisset scribentur.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="wsus__feature_single">
                    <div class="icon">
                        <i class="fal fa-atom" aria-hidden="true"></i>
                    </div>
                    <h5>Choose a Category</h5>
                    <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut,
                        convallis eros.</p>
                    <span>1</span>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="wsus__feature_single active">
                    <div class="icon">
                        <i class="fal fa-map-marked-alt" aria-hidden="true"></i>
                    </div>
                    <h5>Find Location</h5>
                    <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut,
                        convallis eros.</p>
                    <span>2</span>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="wsus__feature_single">
                    <div class="icon">
                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                    </div>
                    <h5>Contact a Few Owners</h5>
                    <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut,
                        convallis eros.</p>
                    <span>3</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==========================
        COUNTER PART START
    ===========================-->
<section id="wsus__counter">
    <div class="wsus__counter_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">120</span>
                        <p>Our Team</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">1,189</span>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">399</span>
                        <p>All Categories</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">400</span>
                        <p>Total Listing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==========================
        COUNTER PART END
    ===========================-->


<!-- <section id="wsus__categoryes">
    <div class="wsus__categorye_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>Our Categories</h2>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola
                            estut clita dolorem ei est mazim fuisset scribentur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <a href="#" class="wsus__category_single">
                        <div class="wsus__category_img">
                            <img src="{{asset('images/user_small.jpg')}}" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="wsus__category_text">
                            <div class="wsus__category_text_center">
                                <i class="fab fa-atlassian"></i>
                                <p>hoter and resort</p>
                                <span class="green">2 listing</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <a href="#" class="wsus__category_single">
                        <div class="wsus__category_img">
                            <img src="{{asset('images/user_small2.jpg')}}" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="wsus__category_text">
                            <div class="wsus__category_text_center">
                                <i class="fas fa-briefcase"></i>
                                <p>business</p>
                                <span class="red">9 listing</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <a href="#" class="wsus__category_single">
                        <div class="wsus__category_img">
                            <img src="{{asset('images/user_small3.jpg')}}" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="wsus__category_text">
                            <div class="wsus__category_text_center">
                                <i class="fal fa-utensils-alt"></i>
                                <p>restaurent</p>
                                <span class="purple">140 listing</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <a href="#" class="wsus__category_single">
                        <div class="wsus__category_img">
                            <img src="{{asset('images/user_small5.jpg')}}" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="wsus__category_text">
                            <div class="wsus__category_text_center">
                                <i class="far fa-club"></i>
                                <p>event and club</p>
                                <span class="purple">53 listing</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <a href="#" class="wsus__category_single">
                        <div class="wsus__category_img">
                            <img src="{{asset('images/user_small4.jpg')}}" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="wsus__category_text">
                            <div class="wsus__category_text_center">
                                <i class="fas fa-trees"></i>
                                <p>home and garden</p>
                                <span class="green">20 listing</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <a href="#" class="wsus__category_single">
                        <div class="wsus__category_img">
                            <img src="{{asset('images/user_small6.jpg')}}" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="wsus__category_text">
                            <div class="wsus__category_text_center">
                                <i class="fas fa-user-graduate"></i>
                                <p>education</p>
                                <span class="red">300 listing</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

















<!-- Latest Property Section -->

<!-- Latest Property Section End  -->





















<section id="wsus__location">
    <div class="wsus__location_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>Our location </h2>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola
                            estut clita dolorem ei est mazim fuisset scribentur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="wsus__location_filter">
                        <button class="active" data-filter="*">All City</button>
                        <button data-filter=".newyork">New York</button>
                        <button data-filter=".london">London</button>
                        <button data-filter=".parish">Paris</button>
                        <button data-filter=".hongkong">HongKong</button>
                        <button data-filter=".moscow">Moscow</button>
                        <button data-filter=".tokyo">Tokyo</button>
                    </div>
                </div>
            </div>
            <div class="row grid" style="position: relative; height: 680px;">
                <div class="col-xl-3 col-sm-6 col-lg-4 newyork hongkong tokyo" style="position: absolute; left: 0px; top: 0px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_1.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>new york</p>
                            <span>2 listing</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow" style="position: absolute; left: 330px; top: 0px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_2.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>thailand</p>
                            <span>10 listing</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 newyork hongkong tokyo" style="position: absolute; left: 660px; top: 0px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_3.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>parish</p>
                            <span>31 listing</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow" style="position: absolute; left: 990px; top: 0px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_7.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>singapore</p>
                            <span>28 listing</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 london hongkong moscow" style="position: absolute; left: 0px; top: 340px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_4.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>japan</p>
                            <span>25 listing</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 newyork parish tokyo" style="position: absolute; left: 330px; top: 340px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_5.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>korea</p>
                            <span>15 listing</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow" style="position: absolute; left: 660px; top: 340px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_6.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>singapore</p>
                            <span>28 listing</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow" style="position: absolute; left: 990px; top: 340px;">
                    <a href="#" class="wsus__single_location">
                        <div class="img">
                            <img src="images/location_8.jpg" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="wsus__location_text">
                            <p>singapore</p>
                            <span>28 listing</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="wsus__location">
    <div class="wsus__location_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>Our location</h2>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="wsus__location_filter">
                        <form id="locationFilterForm">
                            <select id="stateSelect" class="form-control" name="state">
                                <option value="" selected disabled>Select State</option>
                                @foreach($states as $state)
                                <option class="" value=""> {{$state->StateName}}</option>
                                @endforeach
                            </select>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="wsus__location_filter">
                                        <button class="active" data-filter="*">All City</button>
                                        <button data-filter=".newyork">New York</button>
                                        <button data-filter=".london">London</button>
                                        <button data-filter=".parish">Paris</button>
                                        <button data-filter=".hongkong">HongKong</button>
                                        <button data-filter=".moscow">Moscow</button>
                                        <button data-filter=".tokyo">Tokyo</button>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary mt-3">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row grid" id="locationGrid">
                <!-- Location items will be dynamically populated here based on the search and filters -->
            </div>
        </div>
    </div>
</section>

@endsection
