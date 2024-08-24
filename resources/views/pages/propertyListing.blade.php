@extends('layouts.app')
@section('content')
<div id="breadcrumb_part">
    <div class="bread_overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center text-white">
                    <h4>listing</h4>
                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> Home </a></li>
                            <li class="breadcrumb-item active" aria-current="page"> listing </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="listing_grid" class="grid_view">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <form>
                    <div class="listing_grid_sidbar">
                        <div class="sidebar_line">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="far fa-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="sidebar_line_select">
                            <select class="select_2 select2-hidden-accessible" name="state" data-select2-id="select2-data-1-9rqf" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="select2-data-3-e0jb">categorys</option>
                                <option value="">category 1</option>
                                <option value="">category 2</option>
                                <option value="">category 3</option>
                                <option value="">category 4</option>
                                <option value="">category 5</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-y0dn" style="width: 99px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-nc-container" aria-controls="select2-state-nc-container"><span class="select2-selection__rendered" id="select2-state-nc-container" role="textbox" aria-readonly="true" title="categorys">categorys</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="sidebar_line_select">
                            <select class="select_2 select2-hidden-accessible" name="state" data-select2-id="select2-data-4-xz8p" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="select2-data-6-b1pw">location</option>
                                <option value="">location 1</option>
                                <option value="">location 2</option>
                                <option value="">location 3</option>
                                <option value="">location 4</option>
                                <option value="">location 5</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-yki6" style="width: 93px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-1y-container" aria-controls="select2-state-1y-container"><span class="select2-selection__rendered" id="select2-state-1y-container" role="textbox" aria-readonly="true" title="location">location</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="wsus__pro_check">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate4">
                                <label class="form-check-label" for="flexCheckIndeterminate4">
                                    Heating
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate5">
                                <label class="form-check-label" for="flexCheckIndeterminate5">
                                    Smoking Allow
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate6">
                                <label class="form-check-label" for="flexCheckIndeterminate6">
                                    Icon
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate7">
                                <label class="form-check-label" for="flexCheckIndeterminate7">
                                    Parking
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Air Condition
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate1">
                                <label class="form-check-label" for="flexCheckIndeterminate1">
                                    Internet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate2">
                                <label class="form-check-label" for="flexCheckIndeterminate2">
                                    Terrace
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate3">
                                <label class="form-check-label" for="flexCheckIndeterminate3">
                                    Wi-Fi
                                </label>
                            </div>
                        </div>
                        <button class="read_btn" type="submit">search</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="wsus__featured_single">
                            <div class="wsus__featured_single_img">
                                <img src="images/location_1.jpg" alt="images" class="img-fluid w-100">
                                <a href="#" class="love"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                <a href="#" class="small_text">market</a>
                            </div>
                            <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><i class="fas fa-info" aria-hidden="true"></i></a>
                            <div class="wsus__featured_single_text">
                                <p class="list_rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    <span>(5 review)</span>
                                </p>
                                <a href="#">school and child care</a>
                                <p class="address"> Washington, Illinois</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="wsus__featured_single">
                            <div class="wsus__featured_single_img">
                                <img src="images/location_2.jpg" alt="images" class="img-fluid w-100">
                                <a href="#" class="love"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                <a href="#" class="small_text">school</a>
                            </div>
                            <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><i class="fas fa-info" aria-hidden="true"></i></a>
                            <div class="wsus__featured_single_text">
                                <p class="list_rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    <span>(5 review)</span>
                                </p>
                                <a href="#">school and child care</a>
                                <p class="address"> Washington, Illinois</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="wsus__featured_single">
                            <div class="wsus__featured_single_img">
                                <img src="images/location_3.jpg" alt="images" class="img-fluid w-100">
                                <a href="#" class="love"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                <a href="#" class="small_text">shopping mall</a>
                            </div>
                            <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><i class="fas fa-info" aria-hidden="true"></i></a>
                            <div class="wsus__featured_single_text">
                                <p class="list_rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    <span>(5 review)</span>
                                </p>
                                <a href="#">school and child care</a>
                                <p class="address"> Washington, Illinois</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="wsus__featured_single">
                            <div class="wsus__featured_single_img">
                                <img src="images/location_4.jpg" alt="images" class="img-fluid w-100">
                                <a href="#" class="love"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                <a href="#" class="small_text">park</a>
                            </div>
                            <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><i class="fas fa-info" aria-hidden="true"></i></a>
                            <div class="wsus__featured_single_text">
                                <p class="list_rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    <span>(5 review)</span>
                                </p>
                                <a href="#">school and child care</a>
                                <p class="address"> Washington, Illinois</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="wsus__featured_single">
                            <div class="wsus__featured_single_img">
                                <img src="images/location_5.jpg" alt="images" class="img-fluid w-100">
                                <a href="#" class="love"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                <a href="#" class="small_text">school and college</a>
                            </div>
                            <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><i class="fas fa-info" aria-hidden="true"></i></a>
                            <div class="wsus__featured_single_text">
                                <p class="list_rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    <span>(5 review)</span>
                                </p>
                                <a href="#">school and child care</a>
                                <p class="address"> Washington, Illinois</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="wsus__featured_single">
                            <div class="wsus__featured_single_img">
                                <img src="images/location_2.jpg" alt="images" class="img-fluid w-100">
                                <a href="#" class="love"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                <a href="#" class="small_text">school</a>
                            </div>
                            <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><i class="fas fa-info" aria-hidden="true"></i></a>
                            <div class="wsus__featured_single_text">
                                <p class="list_rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    <span>(5 review)</span>
                                </p>
                                <a href="#">school and child care</a>
                                <p class="address"> Washington, Illinois</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div id="pagination">
                            <nav aria-label="">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-chevron-left" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item" aria-current="page">
                                        <a class="page-link" href="#">02</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                                    <li class="page-item"><a class="page-link" href="#">05</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
