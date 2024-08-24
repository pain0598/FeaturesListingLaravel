@extends('layouts.app')
@section('content')
<section id="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dashboard_sidebar">
                    <span class="close_icon"><i class="far fa-times" aria-hidden="true"></i></span>
                    <a href="dsahboard.html" class="dash_logo"><img src="images/user_large_img.jpg" alt="logo" class="img-fluid"></a>
                    <ul class="dashboard_link">
                        <li><a class="active" href="{{route('renter-dashboard')}}"><i class="fas fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                        <li><a href="{{ route('my-favorites') }}"><i class="far fa-heart" aria-hidden="true"></i> My Favorites </a></li>
                        <li><a href="{{ route('notes-messages') }}"><i class="far fa-comments-alt" aria-hidden="true"></i> Message</a></li>
                        <li><a href="#"><i class="far fa-sign-out-alt" aria-hidden="true"></i> Logo</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard_content">
                    <div class="my_listing">
                        <h4>basic information</h4>
                        <form>
                            <div class="row">
                                <div class="col-xl-8 col-md-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="my_listing_single">
                                                <label>Name</label>
                                                <div class="input_area">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="my_listing_single">
                                                <label>phone</label>
                                                <div class="input_area">
                                                    <input type="text" placeholder="1234">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="my_listing_single">
                                                <label>email</label>
                                                <div class="input_area">
                                                    <input type="Email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="my_listing_single">
                                                <label>About Me</label>
                                                <div class="input_area">
                                                    <textarea cols="3" rows="3" placeholder="Your Text"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-5">
                                    <div class="profile_pic_upload">
                                        <img src="images/user_large_img.jpg" alt="img" class="imf-fluid w-100">
                                        <input type="file">
                                    </div>
                                </div>
                            </div>
                            <div id="medicine_row3">
                                <div class="row">
                                    <div class="col-xl-5 col-md-5">
                                        <label for="name">icon</label>
                                        <div class="medicine_row_input">
                                            <input type="text" name="name[]" id="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-5">
                                        <label for="name">link</label>
                                        <div class="medicine_row_input">
                                            <input type="text" name="name[]" id="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-2">
                                        <div class="medicine_row_input">
                                            <button type="button" id="add_row3"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="read_btn">upload</button>
                            </div>
                        </form>
                    </div>
                    <div class="my_listing list_mar">
                        <h4>change password</h4>
                        <form>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>current password</label>
                                        <div class="input_area">
                                            <input type="password" placeholder="Current Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>new password</label>
                                        <div class="input_area">
                                            <input type="password" placeholder="New Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="my_listing_single">
                                        <label>confirm password</label>
                                        <div class="input_area">
                                            <input type="password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="read_btn">upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
