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
                        <li><a href="dsahboard.html"><i class="fas fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                        <li><a href="dsahboard_listing.html"><i class="fas fa-list-ul" aria-hidden="true"></i> My Listing</a></li>
                        <li><a class="active" href="dsahboard_create_listing.html"><i class="fal fa-plus-circle" aria-hidden="true"></i> Create
                                Listing</a></li>
                        <li><a href="dsahboard_review.html"><i class="far fa-star" aria-hidden="true"></i> Reviews</a></li>
                        <li><a href="dsahboard_wishlist.html"><i class="far fa-heart" aria-hidden="true"></i> Wishlist</a></li>
                        <li><a href="dsahboard_profile.html"><i class="far fa-user" aria-hidden="true"></i> My Profile</a></li>
                        <li><a href="dsahboard_order.html"><i class="fal fa-notes-medical" aria-hidden="true"></i> Orders</a></li>
                        <li><a href="dsahboard_package.html"><i class="fal fa-gift-card" aria-hidden="true"></i> Package</a></li>
                        <li><a href="dsahboard_message.html"><i class="far fa-comments-alt" aria-hidden="true"></i> Message</a></li>
                        <li><a href="#"><i class="far fa-sign-out-alt" aria-hidden="true"></i> Logo</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard_content">
                    <div class="my_listing">
                        <form>
                            <h4> Add Property </h4>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Property Name <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="text" placeholder="Enter Property Name ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Manage Company <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="text" placeholder="Enter Company Name ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Propety Conatct <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="number" placeholder="Property Contact ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label> Year Built <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="date" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Year Remodeled </label>
                                        <div class="input_area">
                                            <input type="date" placeholder="Enter Company Name ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Leasing Email <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="email" placeholder="Leasing Email">
                                        </div>
                                    </div>
                                </div>




                                <div class="col-xl-6 col-md-6">
                                    <div class="my_listing_single">
                                        <label>State <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <div class="wsus__search_area">
                                                <select class="select_2 select2-hidden-accessible" name="state" data-select2-id="select2-data-1-7ewi" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="select2-data-3-fwl6">categories</option>
                                                    <option value="">categories 1</option>
                                                    <option value="">categories 2</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-rkk0" style="width: 110px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-lh-container" aria-controls="select2-state-lh-container"><span class="select2-selection__rendered" id="select2-state-lh-container" role="textbox" aria-readonly="true" title="categories">categories</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="my_listing_single">
                                        <label>City <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <div class="wsus__search_area">
                                                <select class="select_2 select2-hidden-accessible" name="city" data-select2-id="select2-data-4-ojo2" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="select2-data-6-hpn7">location</option>
                                                    <option value="">location 1</option>
                                                    <option value="">location 2</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-72m2" style="width: 93px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-my-container" aria-controls="select2-state-my-container"><span class="select2-selection__rendered" id="select2-state-my-container" role="textbox" aria-readonly="true" title="location">location</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="my_listing_single mar_bottom">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <textarea cols="3" rows="5" placeholder="Map *" name="address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Number of Units <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="number" placeholder="Enter Number of Units ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Area <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="text" placeholder="Enter Area ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Zip Code <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="text" placeholder="Enter Zip Code ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Contact Number <span class="text-danger"> * </span></label>
                                        <div class="input_area">
                                            <input type="number" placeholder="Enter Contact Number ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Zone</label>
                                        <div class="input_area">
                                            <input type="text" placeholder="Zone">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Fax <span class="text-danger">*</span></label>
                                        <div class="input_area">
                                            <input type="text" placeholder="Enter Fax Number ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-6">
                                    <div class="my_listing_single">
                                        <label>Website </label>
                                        <div class="input_area">
                                            <input type="text" placeholder="Enter  you Website ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="my_listing_single mar_bottom">
                                        <label>Office Hours</label>
                                        <div class="input_area">
                                            <textarea cols="3" rows="3" placeholder="Enter Office Hours" name="officehours"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="my_listing list_mar list_padding">
                        <h4>Video and Image</h4>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>Logo</label>
                                    <div class="input_area input_area_2">
                                        <input type="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>Thumbnail Image</label>
                                    <div class="input_area input_area_2">
                                        <input type="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>inner images</label>
                                    <div class="input_area input_area_2">
                                        <input type="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>PDF</label>
                                    <div class="input_area input_area_2">
                                        <input type="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div id="medicine_row">
                                    <label for="name">images <span>(Maximum images-10)</span></label>
                                    <div class="medicine_row_input">
                                        <input type="file" name="name[]" id="name">
                                        <button type="button" id="add_row"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div id="medicine_row2">
                                    <label for="name">videos <span>(Maximum videos-10)</span></label>
                                    <div class="medicine_row_input inpiut_pad">
                                        <input type="text" placeholder="www.youtube.com" name="name[]" id="name">
                                        <button type="button" id="add_row2"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my_listing list_mar list_padding">
                        <h4>Listing Details Information</h4>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="my_listing_single list_mar">
                                    <label>Short Description</label>
                                    <div class="input_area input_area_2">
                                        <textarea cols="3" rows="5" placeholder="Description *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="my_listing_single">
                                    <label>Description</label>
                                    <textarea class="form-control summer_note" style="display: none;"></textarea>
                                    <div class="note-editor note-frame panel panel-default">
                                        <div class="note-dropzone">
                                            <div class="note-dropzone-message"></div>
                                        </div>
                                        <div class="panel-heading note-toolbar" role="toolbar">
                                            <div class="note-btn-group btn-group note-style">
                                                <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-bs-original-title="Style"><i class="note-icon-magic"></i> <span class="note-icon-caret"></span></button>
                                                    <ul class="note-dropdown-menu dropdown-menu dropdown-style" aria-label="Style">
                                                        <li aria-label="p"><a href="#" data-value="p">
                                                                <p>Normal</p>
                                                            </a></li>
                                                        <li aria-label="blockquote"><a href="#" data-value="blockquote">
                                                                <blockquote>Quote</blockquote>
                                                            </a></li>
                                                        <li aria-label="pre"><a href="#" data-value="pre">
                                                                <pre>Code</pre>
                                                            </a></li>
                                                        <li aria-label="h1"><a href="#" data-value="h1">
                                                                <h1>Header 1</h1>
                                                            </a></li>
                                                        <li aria-label="h2"><a href="#" data-value="h2">
                                                                <h2>Header 2</h2>
                                                            </a></li>
                                                        <li aria-label="h3"><a href="#" data-value="h3">
                                                                <h3>Header 3</h3>
                                                            </a></li>
                                                        <li aria-label="h4"><a href="#" data-value="h4">
                                                                <h4>Header 4</h4>
                                                            </a></li>
                                                        <li aria-label="h5"><a href="#" data-value="h5">
                                                                <h5>Header 5</h5>
                                                            </a></li>
                                                        <li aria-label="h6"><a href="#" data-value="h6">
                                                                <h6>Header 6</h6>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-bs-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-bs-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-bs-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div>
                                            <div class="note-btn-group btn-group note-fontname">
                                                <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Font Family" data-bs-original-title="Font Family"><span class="note-current-fontname" style="font-family: &quot;Nunito Sans&quot;;">Nunito Sans</span> <span class="note-icon-caret"></span></button>
                                                    <ul class="note-dropdown-menu dropdown-menu note-check dropdown-fontname" aria-label="Font Family">
                                                        <li aria-label="Arial"><a href="#" data-value="Arial"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial'">Arial</span></a></li>
                                                        <li aria-label="Courier New"><a href="#" data-value="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family: 'Courier New'">Courier New</span></a></li>
                                                        <li aria-label="Helvetica"><a href="#" data-value="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family: 'Helvetica'">Helvetica</span></a></li>
                                                        <li aria-label="Nunito Sans"><a href="#" data-value="Nunito Sans" class="checked"><i class="note-icon-menu-check"></i> <span style="font-family: 'Nunito Sans'">Nunito Sans</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="note-btn-group btn-group note-color">
                                                <div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" tabindex="-1" title="" aria-label="Recent Color" data-bs-original-title="Recent Color" data-backcolor="#FFFF00" data-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-bs-original-title="More Color"> <span class="note-icon-caret"></span></button>
                                                    <ul class="note-dropdown-menu dropdown-menu">
                                                        <div class="note-palette">
                                                            <div class="note-palette-title">Background Color</div>
                                                            <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="backColor" data-value="transparent">Transparent</button></div>
                                                            <div class="note-holder" data-event="backColor"><!-- back colors -->
                                                                <div class="note-color-palette">
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-bs-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-bs-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-bs-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-bs-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-bs-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-bs-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-bs-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-bs-original-title="White"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-bs-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-bs-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-bs-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-bs-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-bs-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-bs-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-bs-original-title="Magenta"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-bs-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-bs-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-bs-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-bs-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-bs-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-bs-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-bs-original-title="Twilight"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-bs-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-bs-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-bs-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-bs-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-bs-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-bs-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-bs-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-bs-original-title="Careys Pink"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-bs-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-bs-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-bs-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-bs-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-bs-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-bs-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-bs-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-bs-original-title="Puce"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-bs-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-bs-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-bs-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-bs-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-bs-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-bs-original-title="Cadillac"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-bs-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-bs-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-bs-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-bs-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-bs-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-bs-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-bs-original-title="Claret"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-bs-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-bs-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-bs-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-bs-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-bs-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-bs-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-bs-original-title="Loulou"></button></div>
                                                                </div>
                                                            </div>
                                                            <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="backColorPicker">Select</button><input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette"></div>
                                                            <div class="note-holder-custom" id="backColorPalette" data-event="backColor">
                                                                <div class="note-color-palette">
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-palette">
                                                            <div class="note-palette-title">Text Color</div>
                                                            <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="removeFormat" data-value="foreColor">Reset to default</button></div>
                                                            <div class="note-holder" data-event="foreColor"><!-- fore colors -->
                                                                <div class="note-color-palette">
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-bs-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-bs-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-bs-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-bs-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-bs-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-bs-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-bs-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-bs-original-title="White"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-bs-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-bs-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-bs-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-bs-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-bs-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-bs-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-bs-original-title="Magenta"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-bs-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-bs-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-bs-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-bs-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-bs-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-bs-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-bs-original-title="Twilight"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-bs-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-bs-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-bs-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-bs-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-bs-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-bs-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-bs-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-bs-original-title="Careys Pink"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-bs-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-bs-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-bs-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-bs-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-bs-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-bs-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-bs-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-bs-original-title="Puce"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-bs-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-bs-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-bs-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-bs-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-bs-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-bs-original-title="Cadillac"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-bs-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-bs-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-bs-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-bs-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-bs-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-bs-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-bs-original-title="Claret"></button></div>
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-bs-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-bs-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-bs-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-bs-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-bs-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-bs-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-bs-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-bs-original-title="Loulou"></button></div>
                                                                </div>
                                                            </div>
                                                            <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="foreColorPicker">Select</button><input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette"></div>
                                                            <div class="note-holder-custom" id="foreColorPalette" data-event="foreColor">
                                                                <div class="note-color-palette">
                                                                    <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-bs-original-title="#FFFFFF"></button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Unordered list (CTRL+SHIFT+NUM7)" data-bs-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Ordered list (CTRL+SHIFT+NUM8)" data-bs-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button>
                                                <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Paragraph" data-bs-original-title="Paragraph"><i class="note-icon-align-left"></i> <span class="note-icon-caret"></span></button>
                                                    <ul class="note-dropdown-menu dropdown-menu">
                                                        <div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Align left (CTRL+SHIFT+L)" data-bs-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)" data-bs-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)" data-bs-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)" data-bs-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div>
                                                        <div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Outdent (CTRL+[)" data-bs-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Indent (CTRL+])" data-bs-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="note-btn-group btn-group note-table">
                                                <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Table" data-bs-original-title="Table"><i class="note-icon-table"></i> <span class="note-icon-caret"></span></button>
                                                    <ul class="note-dropdown-menu dropdown-menu note-table" aria-label="Table">
                                                        <div class="note-dimension-picker">
                                                            <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                                                            <div class="note-dimension-picker-highlighted"></div>
                                                            <div class="note-dimension-picker-unhighlighted"></div>
                                                        </div>
                                                        <div class="note-dimension-display">1 x 1</div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Link (CTRL+K)" data-bs-original-title="Link (CTRL+K)"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Picture" data-bs-original-title="Picture"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Video" data-bs-original-title="Video"><i class="note-icon-video"></i></button></div>
                                            <div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen note-codeview-keep" tabindex="-1" title="" aria-label="Full Screen" data-bs-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-codeview note-codeview-keep" tabindex="-1" title="" aria-label="Code View" data-bs-original-title="Code View"><i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Help" data-bs-original-title="Help"><i class="note-icon-question"></i></button></div>
                                        </div>
                                        <div class="note-editing-area">
                                            <div class="note-handle">
                                                <div class="note-control-selection">
                                                    <div class="note-control-selection-bg"></div>
                                                    <div class="note-control-holder note-control-nw"></div>
                                                    <div class="note-control-holder note-control-ne"></div>
                                                    <div class="note-control-holder note-control-sw"></div>
                                                    <div class="note-control-sizing note-control-se"></div>
                                                    <div class="note-control-selection-info"></div>
                                                </div>
                                            </div><textarea class="note-codable" aria-multiline="true"></textarea>
                                            <div class="note-editable" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
                                                <p><br></p>
                                            </div>
                                        </div><output class="note-status-output" role="status" aria-live="polite"></output>
                                        <div class="note-statusbar" role="status">
                                            <div class="note-resizebar" aria-label="Resize">
                                                <div class="note-icon-bar"></div>
                                                <div class="note-icon-bar"></div>
                                                <div class="note-icon-bar"></div>
                                            </div>
                                        </div>
                                        <div class="modal note-modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Insert Link</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group note-form-group"><label for="note-dialog-link-txt-17239911047471" class="note-form-label">Text to display</label><input id="note-dialog-link-txt-17239911047471" class="note-link-text form-control note-form-control note-input" type="text"></div>
                                                        <div class="form-group note-form-group"><label for="note-dialog-link-url-17239911047471" class="note-form-label">To what URL should this link go?</label><input id="note-dialog-link-url-17239911047471" class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div>
                                                        <div class="checkbox sn-checkbox-open-in-new-window"><label><input type="checkbox" checked="" aria-checked="true">Open in new window</label></div>
                                                        <div class="checkbox sn-checkbox-use-protocol"><label><input type="checkbox" checked="" aria-checked="true">Use default protocol</label></div>
                                                    </div>
                                                    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-popover popover in note-link-popover bottom">
                                            <div class="arrow"></div>
                                            <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
                                                <div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Edit" data-bs-original-title="Edit"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Unlink" data-bs-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Insert Image</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group note-form-group note-group-select-from-files"><label for="note-dialog-image-file-17239911047471" class="note-form-label">Select from files</label><input id="note-dialog-image-file-17239911047471" class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div>
                                                        <div class="form-group note-group-image-url"><label for="note-dialog-image-url-17239911047471" class="note-form-label">Image URL</label><input id="note-dialog-image-url-17239911047471" class="note-image-url form-control note-form-control note-input" type="text"></div>
                                                    </div>
                                                    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-popover popover in note-image-popover bottom">
                                            <div class="arrow"></div>
                                            <div class="popover-content note-children-container">
                                                <div class="note-btn-group btn-group note-resize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Resize full" data-bs-original-title="Resize full"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Resize half" data-bs-original-title="Resize half"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Resize quarter" data-bs-original-title="Resize quarter"><span class="note-fontsize-10">25%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Original size" data-bs-original-title="Original size"><i class="note-icon-rollback"></i></button></div>
                                                <div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Float Left" data-bs-original-title="Float Left"><i class="note-icon-float-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Float Right" data-bs-original-title="Float Right"><i class="note-icon-float-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Remove float" data-bs-original-title="Remove float"><i class="note-icon-rollback"></i></button></div>
                                                <div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" aria-label="Remove Image" data-bs-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="note-popover popover in note-table-popover bottom">
                                            <div class="arrow"></div>
                                            <div class="popover-content note-children-container">
                                                <div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" aria-label="Add row below" data-bs-original-title="Add row below"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" aria-label="Add row above" data-bs-original-title="Add row above"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" aria-label="Add column left" data-bs-original-title="Add column left"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" aria-label="Add column right" data-bs-original-title="Add column right"><i class="note-icon-col-after"></i></button></div>
                                                <div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" aria-label="Delete row" data-bs-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" aria-label="Delete column" data-bs-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title="" aria-label="Delete table" data-bs-original-title="Delete table"><i class="note-icon-trash"></i></button></div>
                                            </div>
                                        </div>
                                        <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Insert Video</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group note-form-group row-fluid"><label for="note-dialog-video-url-17239911047471" class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input id="note-dialog-video-url-17239911047471" class="note-video-url form-control note-form-control note-input" type="text"></div>
                                                    </div>
                                                    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Help</h4>
                                                    </div>
                                                    <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo the last command</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo the last command</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                                        <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.18</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my_listing list_mar list_padding">
                        <h4>Amenities <span>(Maximum Aminities-20)</span></h4>
                        <div class="row">
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Accepts Credit Cards
                                            </label>
                                        </div>
                                    </div>
                                    <i class="far fa-cannabis" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate2">
                                            <label class="form-check-label" for="flexCheckIndeterminate2">
                                                Alcohol
                                            </label>
                                        </div>
                                    </div>
                                    <i class="fas fa-cocktail" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate3">
                                            <label class="form-check-label" for="flexCheckIndeterminate3">
                                                Bike Parking
                                            </label>
                                        </div>
                                    </div>
                                    <i class="fab fa-codiepie" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate4">
                                            <label class="form-check-label" for="flexCheckIndeterminate4">
                                                Elevator in building
                                            </label>
                                        </div>
                                    </div>
                                    <i class="fab fa-cloudscale" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate5">
                                            <label class="form-check-label" for="flexCheckIndeterminate5">
                                                Free coffee and tea
                                            </label>
                                        </div>
                                    </div>
                                    <i class="fab fa-cloudversify" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate6">
                                            <label class="form-check-label" for="flexCheckIndeterminate6">
                                                Good for kids
                                            </label>
                                        </div>
                                    </div>
                                    <i class="fal fa-clouds-sun" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate7">
                                            <label class="form-check-label" for="flexCheckIndeterminate7">
                                                Reservations
                                            </label>
                                        </div>
                                    </div>
                                    <i class="far fa-claw-marks" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                <div class="amenities_check_area">
                                    <div class="wsus__pro_check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate8">
                                            <label class="form-check-label" for="flexCheckIndeterminate8">
                                                Accepts Credit Cards
                                            </label>
                                        </div>
                                    </div>
                                    <i class="far fa-campfire" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my_listing list_mar list_padding">
                        <h4>Social Link</h4>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>facebook</label>
                                    <div class="input_area">
                                        <input type="text" placeholder="www.facebook.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>twitter</label>
                                    <div class="input_area">
                                        <input type="text" placeholder="www.twitter.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>instagram</label>
                                    <div class="input_area">
                                        <input type="text" placeholder="www.instagram.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>youtube</label>
                                    <div class="input_area">
                                        <input type="text" placeholder="www.youtube.com">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="my_listing list_mar">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>Allow Feature</label>
                                    <div class="input_area">
                                        <div class="wsus__search_area">
                                            <select class="select_2 select2-hidden-accessible" name="state" data-select2-id="select2-data-7-rhix" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="select2-data-9-i6w9">yes</option>
                                                <option value="" data-select2-id="select2-data-13-unmu">no </option>
                                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="select2-data-8-akie" style="width: 47px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-19-container" aria-controls="select2-state-19-container"><span class="select2-selection__rendered" id="select2-state-19-container" role="textbox" aria-readonly="true" title="yes">yes</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="my_listing_single">
                                    <label>Seo Title</label>
                                    <div class="input_area">
                                        <div class="input_area">
                                            <input type="text" placeholder="Seo Title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="my_listing_single">
                                    <label>Seo Description</label>
                                    <div class="input_area">
                                        <textarea cols="3" rows="5" placeholder="Your Text"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="read_btn">save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
