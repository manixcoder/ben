@extends('frontend.master')
@section('pageTitle', 'Browse Offer')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<section class="hayatt-hotelbg fw">
    <img src="{{ asset('public/frontendAssets/images/hotelbg-img.jpg')}}" alt="bg" />
    <div class="hayatt-profile">
        <div class="container">
            <div class="imgprofile">
                <img src="{{ asset('public/frontendAssets/images/header_logo.png')}}" alt="hotel">
            </div>
            <div class="hayattprofile-cont">
                <div class="pull-left">
                    <h4>Huyatt Dynamite</h4>
                    <p>
                        <span>
                            <img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon">
                        </span> 
                        3245 Twin House Lane, Springfield
                    </p>
                    <p class="greentext">
                        <span>
                            <img src="{{ asset('public/frontendAssets/images/open_close_status.png')}}" alt="icon">
                        </span>
                        Open Now
                    </p>
                </div>
                <div class="harticon">
                    <i>
                        <img src="{{ asset('public/frontendAssets/images/added_to_favourite.png')}}" alt="iconalt" />
                    </i>
                    <i>
                        <img src="{{ asset('public/frontendAssets/images/share.png')}}" alt="iconalt" />
                    </i>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="abouthotel fw">
    <div class="container">
        <h3>About Hotel</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        <div class="socail-cont">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact</h4>
                    <p>
                        <i>
                            <img src="{{ asset('public/frontendAssets/images/c_call.png')}}" class="phone-cion" alt="icon">
                        </i> 
                        96000000051
                    </p>
                    <p>
                        <i>
                            <img src="{{ asset('public/frontendAssets/images/c_mail.png')}}" class="mail-icon" alt="icon">
                        </i>
                        hyattdynamite@gmail.com
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <h4>Social Links</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{ asset('public/frontendAssets/images/l_facebook.png')}}" alt="icon" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('public/frontendAssets/images/s_instagram.png')}}" alt="icon" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('public/frontendAssets/images/s_twitter.png')}}" alt="icon" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hotelroom-sec fw">
    <div class="container">
        <h3>Rooms</h3>
        <div class="roomsbox-sec">
            <div class="row">
                <div class="col-md-4 bdr-right">
                    <p>Check-in</p>
                    <h4>SAT, 27 Sep 21</h4>
                    <p><small>Until 3:00 pm 12:00 pm</small></p>
                </div>
                <div class="col-md-4 bdr-right">
                    <p>Check-out</p>
                    <h4>WED 3 OCT 21</h4>
                    <p><small>3 Night Stay</small></p>
                </div>
                <div class="col-md-4">
                    <p>Guest</p>
                    <h4><span>2 Adults</span><span>0 Children</span><span>1 Room</span></h4>
                    <p><small>2 Guest</small></p>
                </div>
                <div class="fw text-center">
                    <a data-toggle="modal" data-target="#myModal" class="updatebnt">
                        Want to Update Search 
                        <i>
                            <img src="{{ asset('public/frontendAssets/images/arrow_update_search.png')}}" alt="icon" />
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="roomgest-detail newdetailsec1 fw">
    <div class="container">
        <div class="roomgest-detailcont fw">
            <a href="{{ URL::to('/room-details') }}" class="imgbox">
                <figure>
                    <img src="{{ asset('public/frontendAssets/images/roomnew-img1.jpg')}}" alt="img" />
                </figure>
            </a>
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
                <div class="row">
                    <div class="col-md-8">
                        <span class="boldtext">$ 840<small>Per Night</small></span>
                        <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                        <div class="fw">
                            <span class="boldtext">$ 2520<small>3 Night Stay</small></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="check-availibility-btn pull-right" href="{{ URL::to('/room-details') }}">
                            Request To Book
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="roomgest-detailcont newsdetail-sec fw">
            <a href="{{ URL::to('/room-details') }}" class="imgbox">
                <figure>
                    <img src="{{ asset('public/frontendAssets/images/hotel-img1.jpg')}}" alt="img" />
                </figure>
            </a>
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
                <div class="row">
                    <div class="col-md-8">
                        <span class="boldtext">$ 840<small>Per Night</small></span>
                        <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                        <div class="fw">
                            <span class="boldtext">$ 2520<small>3 Night Stay</small></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="check-availibility-btn pull-right" href="{{ URL::to('/room-details') }}">Request To Book</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="roomgest-detailcont fw">
            <a href="{{ URL::to('/room-details') }}" class="imgbox">
                <figure>
                    <img src="{{ asset('public/frontendAssets/images/roomnew-img1.jpg')}}" alt="img" />
                </figure>
            </a>
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
                <div class="row">
                    <div class="col-md-8">
                        <span class="boldtext">$ 840<small>Per Night</small></span>
                        <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                        <div class="fw">
                            <span class="boldtext">$ 2520<small>3 Night Stay</small></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="check-availibility-btn pull-right" href="{{ URL::to('/room-details') }}">Request To Book</a>
                    </div>
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