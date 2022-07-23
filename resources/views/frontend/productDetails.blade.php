@extends('frontend.master')
@section('pageTitle', 'Browse Offer')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="container">
    <div class="  my-account">
        <p>

            Home
            <span class="erro">></span>
            Hot Discount
            <span class="erro">></span>
            Migeez
            <span class="erro">></span>
            <span class="bg-color">HUAWEI P50 Pro</span>
        </p>
    </div>
    <div class="row">
        <div class="details-sec">
            <div class="migeez">
                <div class="col-md-6 col-sm-6">
                    <span class="migeez-logo">
                        <figure class="twin">
                            <img src="{{ asset('public/frontendAssets/images/circle.jpg')}}" alt="circle" width="100px">
                        </figure>
                        <h3>Migeez</h3>
                        <p>
                            <img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon">
                            3245 Twin House Lane, Springfield
                        </p>
                        <a>
                            <img src="{{ asset('public/frontendAssets/images/clock.png')}}" alt="icon">
                            Open Now
                        </a>
                    </span>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul>
                        <li><a href="#">
                                <img src="{{ asset('public/frontendAssets/images/added_to_favourite.png')}}" alt="icon">
                            </a></li>
                        <li><a href="#">
                                <img src="{{ asset('public/frontendAssets/images/share.png')}}" alt="icon">
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="phone-logo service-details">
                <figure>
                    <img src="{{ asset('public/frontendAssets/images/vivo.jpg')}}" alt="phone">
                </figure>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="repair-sec cell-sec">
                <p class="Cellphone">Cellphone </p>
                <h3 class="huawei-pro">HUAWEI P50 Pro
                    <span class="pull-right">
                        <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon">
                    </span>
                </h3>
                <br>
                <h3 class="huawei-pro price_sec">
                    $ 1200
                    <span class="pull-right discount-sec">
                        70% Discount
                    </span>
                </h3>
                <p class="offer-vaild">
                    Offer Valid till : 10 Oct 21
                </p>
                <br>
                <p class="Cellphone">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                </p>

            </div>
            <div class="visit-store">
                <ul>
                    <li>
                        <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" class="like-icon">
                        30
                    </li>
                    <li>
                        <img src="{{ asset('public/frontendAssets/images/message.png')}}" alt="icon">
                    </li>
                    <li>
                        <img src="{{ asset('public/frontendAssets/images/book_appointment.png')}}" alt="">
                    </li>
                    <li>

                    </li>
                </ul>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary "> Visit Store</button>
                </div>
            </div>
        </div>
        <div class="how-apply">
            <div class="col-md-12">
                <h3>How to Apply</h3>
                <ul>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </li>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </li>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="share-code">
                <figure>
                    <img src="{{ asset('public/frontendAssets/images/QR-CODE (1).png')}}" alt="icon" width="100%">
                    <p>Share this QR Code and get an award</p>

                </figure>
                <button><i><img src="{{ asset('public/frontendAssets/images/share_white.png')}}" alt="icon" width="20px"></i> Share</button>
                <div class="lorem-ipsum">
                    <span>
                        Terms & conditions
                    </span>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                    </p>

                </div>
            </div>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 col-sm-7">
            <div class="share-code">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39592.10850218666!2d77.62949152053883!3d28.705166444054072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c8e805851396d%3A0xefc5478b43db1239!2sPilkhuwa%2C%20Uttar%20Pradesh%20245304!5e0!3m2!1sen!2sin!4v1640665791270!5m2!1sen!2sin" width="100%" height="210" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <h3 class="text-left">
                    Share this location and get an award
                    <button class="pull-right btn-sec">
                        <i><img src="{{ asset('public/frontendAssets/images/share_white.png')}}" alt="icon" width="20px">
                        </i>
                        Share
                    </button>
                </h3>
                <div class="lorem-ipsum">
                    <span>
                        Terms & conditions
                    </span>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <br> industry's standard dummy text.
                    </p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <br> industry's standard dummy text.
                    </p>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop