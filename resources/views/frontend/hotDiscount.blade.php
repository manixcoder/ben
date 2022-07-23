@extends('frontend.master')
@section('pageTitle', 'Browse Offer')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<section class="banner-search">
    <div class="container">
        <div class="site-heading">
            <h3><span class="banner-img">
                    <img src="{{ asset('public/frontendAssets/images/graphic_hot_discount.png')}}" alt="icon" />
                </span>
                Hot Discounts
            </h3>
        </div>
        <div class="text-center fw favourite-sec">
            <div class="search-filter form-group">
                <div class="multiselect-box">
                    <select class="js-select2" multiple="multiple">
                        <option value="O1" data-badge="">Nodia</option>
                        <option value="O2" data-badge="">Pilkhuwa</option>
                        <option value="O3" data-badge="">Hapur</option>
                        <option value="O4" data-badge="">Modinager</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="browse-offer-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <a href="./Store_Details_Product.html">
                        <figure class="store-icon">
                            <span class="redtext fw">70% Discount</span>
                            <img src="{{ asset('public/frontendAssets/images/arrival-img6.png')}}" alt="img" />
                        </figure>
                        <div class="store-cont text-center">
                            <div class="cellphone-sec">
                                <p>
                                    Cellphone
                                    <span>
                                        <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                    </span>
                                </p>
                            </div>
                            <h4>
                                HUAWEI P50 Pro
                            </h4>
                            <h4>
                                $ 1200
                                <span>
                                    Offer Valid till : 10 Oct 21
                                </span>
                            </h4>
                            <div class="like-iconcant">
                                <span>
                                    <small>
                                        <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                    </small>
                                    Migeez
                                </span>
                                <span class="pull-right likeicon">
                                    <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                    30
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <a href="./Store_Details_Product.html">
                        <figure class="store-icon">
                            <span class="redtext fw">70% Discount</span>
                            <img src="{{ asset('public/frontendAssets/images/apple-burd.jpeg')}}" alt="img" />
                        </figure>
                        <div class="store-cont text-center">
                            <div class="cellphone-sec">
                                <p>
                                    Earphone
                                    <span>
                                        <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                    </span>
                                </p>
                            </div>
                            <h4>
                                Apple Air buds
                            </h4>
                            <h4>
                                $ 150
                                <span>
                                    Offer Valid till : 10 Oct 21
                                </span>
                            </h4>
                            <div class="like-iconcant">
                                <span>
                                    <small>
                                        <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                    </small>
                                    Shopping Creative
                                </span>
                                <span class="pull-right likeicon">
                                    <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                    30
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <a href="./Store_Details_Product.html">
                        <figure class="store-icon">
                            <span class="redtext fw">70% Discount</span>
                            <img src="{{ asset('public/frontendAssets/images/ideapad.jpeg')}}" alt="img" />
                        </figure>
                        <div class="store-cont text-center">
                            <div class="cellphone-sec">
                                <p>
                                    Laptop
                                    <span>
                                        <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                    </span>
                                </p>
                            </div>
                            <h4>Lenovo Ideapad 5</h4>
                            <h4>
                                $ 2000
                                <span>
                                    Offer Valid till : 10 Oct 21
                                </span>
                            </h4>
                            <div class="like-iconcant">
                                <span>
                                    <small>
                                        <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                    </small>
                                    You&Me Shop
                                </span>
                                <span class="pull-right likeicon">
                                    <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                    30
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">
                            70% Discount
                        </span>
                        <img src="{{ asset('public/frontendAssets/images/ideapad.jpeg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <div class="cellphone-sec">
                            <p>
                                Laptop
                                <span>
                                    <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                </span>
                            </p>
                        </div>
                        <h4>Lenovo Ideapad 5</h4>
                        <h4>
                            $ 2000
                            <span>
                                Offer Valid till : 10 Oct 21
                            </span>
                        </h4>
                        <div class="like-iconcant">
                            <span>
                                <small>
                                    <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                </small>
                                You&Me Shop
                            </span>
                            <span class="pull-right likeicon">
                                <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                30
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">70% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/arrival-img6.png')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <div class="cellphone-sec">
                            <p>
                                Cellphone
                                <span>
                                    <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                </span>
                            </p>
                        </div>
                        <h4>HUAWEI P50 Pro</h4>
                        <h4>
                            $ 1200
                            <span>
                                Offer Valid till : 10 Oct 21
                            </span>
                        </h4>
                        <div class="like-iconcant">
                            <span>
                                <small>
                                    <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                </small>
                                Migeez
                            </span>
                            <span class="pull-right likeicon">
                                <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                30
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">70% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/apple-burd.jpeg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <div class="cellphone-sec">
                            <p>
                                Earphone
                                <span>
                                    <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                </span>
                            </p>
                        </div>
                        <h4>Apple Air buds</h4>
                        <h4>
                            $ 150
                            <span>
                                Offer Valid till : 10 Oct 21
                            </span>
                        </h4>
                        <div class="like-iconcant">
                            <span>
                                <small>
                                    <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                </small>
                                Shopping Creative
                            </span>
                            <span class="pull-right likeicon">
                                <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                30
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">70% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/arrival-img6.png')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <div class="cellphone-sec">
                            <p>
                                Cellphone
                                <span>
                                    <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                </span>
                            </p>
                        </div>
                        <h4>HUAWEI P50 Pro</h4>
                        <h4>$ 1200 <span>Offer Valid till : 10 Oct 21</span></h4>
                        <div class="like-iconcant">
                            <span>
                                <small>
                                    <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                </small>
                                Migeez
                            </span>
                            <span class="pull-right likeicon">
                                <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                30
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">
                            70% Discount
                        </span>
                        <img src="{{ asset('public/frontendAssets/images/ideapad.jpeg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <div class="cellphone-sec">
                            <p>
                                Laptop
                                <span>
                                    <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                </span>
                            </p>
                        </div>
                        <h4>Lenovo Ideapad 5</h4>
                        <h4>
                            $ 2000
                            <span>
                                Offer Valid till : 10 Oct 21
                            </span>
                        </h4>
                        <div class="like-iconcant">
                            <span>
                                <small>
                                    <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                </small>
                                You&Me Shop
                            </span>
                            <span class="pull-right likeicon">
                                <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                30
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">70% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/apple-burd.jpeg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <div class="cellphone-sec">
                            <p>
                                Earphone
                                <span>
                                    <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" />
                                </span>
                            </p>
                        </div>
                        <h4>Apple Air buds</h4>
                        <h4>
                            $ 150
                            <span>
                                Offer Valid till : 10 Oct 21
                            </span>
                        </h4>
                        <div class="like-iconcant">
                            <span>
                                <small>
                                    <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon" />
                                </small>
                                Shopping Creative
                            </span>
                            <span class="pull-right likeicon">
                                <img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon">
                                30
                            </span>
                        </div>
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