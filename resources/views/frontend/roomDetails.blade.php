@extends('frontend.master')
@section('pageTitle', 'Browse Offer')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<section class="hayatt-hotelbg room-hayatt-bnr fw">
    <div class="hayatt-profile">
        <div class="container">
            <div class="imgprofile">
                <img src="{{ asset('public/frontendAssets/images/header_logo.png')}}" alt="hotel">
            </div>
            <div class="hayattprofile-cont">
                <div class="pull-left">
                    <h4>Huyatt Dynamite</h4>
                    <p><span><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon"></span> 3245 Twin House Lane, Springfield</p>
                    <p class="greentext"><span><img src="{{ asset('public/frontendAssets/images/open_close_status.png')}}" alt="icon"></span>Open Now</p>
                </div>
                <div class="harticon">
                    <i><img src="{{ asset('public/frontendAssets/images/added_to_favourite.png')}}" alt="iconalt" /></i>
                    <i><img src="{{ asset('public/frontendAssets/images/share.png')}}" alt="iconalt" /></i>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="roomgest-detail roompg-gest fw">
    <div class="container">
        <div class="roomgest-detailcont fw">
            <div class="imgbox">
                <figure>
                    <img src="{{ asset('public/frontendAssets/images/hotel-img1.jpg')}}" alt="img" />
                </figure>
            </div>
            <div class="detailcontright">
                <h4>Superior Double or Twin Room</h4>
                <p>
                    <i>
                        <img src="{{ asset('public/frontendAssets/images/guest.png')}}" alt="icon">
                    </i>
                    2 Guest
                </p>
                <p>
                    <span>
                        <i>
                            <img src="{{ asset('public/frontendAssets/images/amt_sqft.png')}}" alt="icon">
                        </i>
                        10 Sq Ft
                    </span>
                    <span>
                        <i>
                            <img src="{{ asset('public/frontendAssets/images/amt_single_beds.png')}}" alt="icon">
                        </i>
                        2 Single Beds
                    </span>
                    <span>
                        <i>
                            <img src="{{ asset('public/frontendAssets/images/amt_free_wifi.png')}}" alt="icon">
                        </i>
                        Free WiFi
                    </span>
                    <span>
                        <i>
                            <img src="{{ asset('public/frontendAssets/images/amt_air_condition.png')}}" alt="icon">
                        </i>
                        Air Condition
                    </span>
                </p>
                <p class="sitepra-inner">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                </p>
            </div>
        </div>
    </div>
</section>
<section class="amenities-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4>Amenities</h4>
            </div>
            <div class=" col-sm-6 col-md-6">
                <ul class="amenities-left">
                    <li><span>&#10004;</span>Shower</li>
                    <li><span>&#10004;</span>Balcony</li>
                    <li><span>&#10004;</span>Hairdryer</li>
                    <li><span>&#10004;</span>Tile/marble floor</li>
                    <li><span>&#10004;</span>Ironing facilities</li>
                    <li><span>&#10004;</span>Toilet</li>
                    <li><span>&#10004;</span>Satellite channels</li>
                    <li><span>&#10004;</span>Additional toilet</li>
                    <li><span>&#10004;</span>Desk</li>
                    <li><span>&#10004;</span>Electric kettle</li>
                    <li><span>&#10004;</span>Tumble dryer</li>
                    <li><span>&#10004;</span>Socket near the bed</li>
                    <li><span>&#10004;</span>Clothes rack</li>
                </ul>
                <div class="location-sec">
                    <h4>Locations</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.214826809688!2d77.4117516145573!3d28.53326189531884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce9772074757d%3A0x6372df84e1d1247c!2sARK%20NEWTECH!5e0!3m2!1sen!2sin!4v1640594106666!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="things-now-sec">
                    <h4>Things to know</h4>
                    <p><span>Check in - 12:00 pm</span><span>Check out - 3:00 pm</span><span>Self Check-in</span><span>No Parties</span><span>No Pets</span><span>No Smoking</span></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <div class="helth-safety fw">
                        <span class="img-left">
                            <img src="{{ asset('public/frontendAssets/images/health_&_safety.png')}}" alt="icon">
                        </span>
                        <h4>Health & Safety</h4>
                        <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="checkinbox col-md-6 col-sm-6 col-xs-12">
                        <h5>Check-in</h5>
                        <h4>SAT, 27 Sep 21</h4>
                        <p><small>Until 3:00 pm 12:00 pm</small></p>
                    </div>
                    <div class="checkinbox col-md-6 col-sm-6 col-xs-12">
                        <h5>Check-out</h5>
                        <h4>WED 3 OCT 21</h4>
                        <p><small>3 Night Stay</small></p>
                    </div>
                    <div class="checkinbox col-md-8 col-sm-8 col-xs-12">
                        <h5>Guest</h5>
                        <h4><span>2 Adults</span><span>0 Children</span></h4>
                        <p><small>2 Guest</small></p>
                    </div>
                    <div class="checkinbox col-md-4 col-sm-4 col-xs-12">
                        <a href="#" class="greenbtn">Update Search <img src="{{ asset('public/frontendAssets/images/arrow_update_search.png')}}" alt="icon"></a>
                    </div>
                </div>
                <div class="fw form-group roomselect">
                    <select class="form-control">
                        <option>1 Room</option>
                        <option>2 Room</option>
                        <option>3 Room</option>
                    </select>
                </div>
                <div class="search-filter ">
                    <a data-toggle="modal" data-target="#booking-request" class="searchbtn">Request To Book</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagejs')
<script>

</script>
@stop