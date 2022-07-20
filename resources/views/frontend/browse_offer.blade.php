@extends('frontend.master')
@section('pageTitle', 'Browse Offer')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<section class="banner-search">
  <div class="container">
    <div class="text-center fw favourite-sec">
      <div class="favourite-bnt">
        <span><a href="./my_favorites.html">Favourites</a></span>
        <span><a href="./browse-offers-resturent.html">Last Searched</a></span>
      </div>
      <div class="search-filter form-group">
        <div class="multiselect-box">
          <select class="js-select2" multiple="multiple">
            <option value="O1" data-badge="">Nodia</option>
            <option value="O2" data-badge="">Pilkhuwa</option>
            <option value="O3" data-badge="">Hapur</option>
            <option value="O4" data-badge="">Modinager</option>
          </select>
        </div>
        <a href="./avail-the-offers.html" class="searchbtn">Search</a>
      </div>
    </div>
  </div>
</section>
<section class="browse-offer-sec">
  <div class="container">
    <div class="site-heading">
      <h3>Recommended Offers
        <div class="select-box">
          <select class="short-by">
            <option>Sort by</option>
          </select>
        </div>
      </h3>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="./Store_Details_Product.html">
            <figure class="store-icon">
              <span class="redtext fw">70% Discount</span>
              <img src="{{ asset('public/frontendAssets/images/phone.jpg')}}" alt="img" />
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
                  <img src="images/like.png" alt="icon">
                  30
                </span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="{{ URL::to('/browse-offers') }}">
            <figure class="store-icon">
              <span class="redtext fw">70% Discount</span>
              <img src="{{ asset('public/frontendAssets/images/apple-burd.jpeg')}}" alt="img" />
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
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="{{ URL::to('/browse-offers') }}">
            <figure class="store-icon">
              <span class="redtext fw">
                70% Discount
              </span>
              <img src="{{ asset('public/frontendAssets/images/ideapad.jpeg')}}" alt="img" />
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
                  <img src="images/like.png" alt="icon">
                  30
                </span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="./Restaurant_Details_Menu.html">
            <figure class="store-icon">
              <img src="{{ asset('public/frontendAssets/images/tabel-seat.jpg')}}" alt="img" class="fw">
            </figure>
            <div class="hotelcont-sec text-center">
              <h3>
                Emerald Bay Inn
                <span class="pull-right">
                  <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon">
                </span>
              </h3>
              <div class="mappra fw">
                <span>
                  <img src="images/full_address.png" alt="icon" />
                </span>
                3245 Twin House Lane, Springfield
              </div>
              <div class="watchpra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/clock.png')}}" alt="icon" />
                </span>
                Open Now
              </div>
              <div class="offer-off fw">
                <div class="offcont pull-left">
                  <span>$ 840 <small>Per Night</small></span>
                  <span class="fw">
                    <p>$ 1200</p> <span class="red">30% off</span>
                  </span>
                </div>
                <div class="pull-right">
                  <a href="./avail-the-offers.html" class="check-availibility-btn">Check Availibility</a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="#">
            <figure class="store-icon">
              <img src="{{ asset('public/frontendAssets/images/hotel-imgtable.jpg')}}" alt="img" class="fw">
            </figure>
            <div class="hotelcont-sec text-center">
              <h3>
                Emerald Bay Inn
                <span class="pull-right">
                  <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon">
                </span>
              </h3>
              <div class="mappra fw">
                <span><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" />
                </span>
                3245 Twin House Lane, Springfield
              </div>
              <div class="watchpra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/clock.png')}}" alt="icon" />
                </span>
                Open Now
              </div>
              <div class="offer-off fw">
                <div class="offcont pull-left">
                  <span>
                    $ 840
                    <small>
                      Per Night
                    </small>
                  </span>
                  <span class="fw">
                    <p>
                      $ 1200
                    </p>
                    <span class="red">
                      30% off
                    </span>
                  </span>
                </div>
                <div class="pull-right">
                  <a href="#" class="check-availibility-btn">
                    Check Availibility
                  </a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="#">
            <figure class="store-icon">
              <img src="{{ asset('public/frontendAssets/images/tabel-hotel-11.jpg')}}" alt="img" class="fw">
            </figure>
            <div class="hotelcont-sec text-center">
              <h3>
                Emerald Bay Inn 
                <span class="pull-right">
                  <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon">
                </span>
              </h3>
              <div class="mappra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" />
                </span> 
                3245 Twin House Lane, Springfield
              </div>
              <div class="watchpra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/clock.png')}}" alt="icon" />
                </span>
                Open Now
              </div>
              <div class="offer-off fw">
                <div class="offcont pull-left">
                  <span>
                    $ 840 
                    <small>
                      Per Night
                    </small>
                  </span>
                  <span class="fw">
                    <p>
                      $ 1200
                    </p> 
                    <span class="red">
                      30% off
                    </span>
                  </span>
                </div>
                <div class="pull-right">
                  <a href="#" class="check-availibility-btn">
                    Check Availibility
                  </a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="./hotel-detail.html">
            <figure class="store-icon">
              <img src="{{ asset('public/frontendAssets/images/hotel-img5.jpg')}}" alt="img" class="fw">
            </figure>
            <div class="hotelcont-sec text-center">
              <h3>
                Emerald Bay Inn 
                <span class="pull-right">
                  <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon">
                </span>
              </h3>
              <div class="mappra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" />
                </span> 
                3245 Twin House Lane, Springfield
              </div>
              <div class="watchpra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/clock.png')}}" alt="icon" />
                </span>
                Open Now
              </div>
              <div class="offer-off fw">
                <div class="offcont pull-left">
                  <span>
                    $ 840 
                    <small>
                      Per Night
                    </small>
                  </span>
                  <span class="fw">
                    <p>$ 1200</p> <span class="red">30% off</span>
                  </span>
                </div>
                <div class="pull-right">
                  <a href="#" class="check-availibility-btn">Check Availibility</a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="#">
            <figure class="store-icon">
              <img src="{{ asset('public/frontendAssets/images/hotel-img12.jpg')}}" alt="img" class="fw">
            </figure>
            <div class="hotelcont-sec text-center">
              <h3>Emerald Bay Inn <span class="pull-right">
                <img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon"></span></h3>
              <div class="mappra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></span> 3245 Twin House Lane, Springfield
              </div>
              <div class="watchpra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/clock.png')}}" alt="icon" />
                </span>
                Open Now
              </div>
              <div class="offer-off fw">
                <div class="offcont pull-left">
                  <span>
                    $ 840 
                    <small>
                      Per Night
                    </small>
                  </span>
                  <span class="fw">
                    <p>
                      $ 1200
                    </p> 
                    <span class="red">
                      30% off
                    </span>
                  </span>
                </div>
                <div class="pull-right">
                  <a href="#" class="check-availibility-btn">
                    Check Availibility
                  </a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="store-contbox text-center">
          <a href="#">
            <figure class="store-icon">
              <img src="{{ asset('public/frontendAssets/images/hotelnew-img2.jpg')}}" alt="img" class="fw">
            </figure>
            <div class="hotelcont-sec text-center">
              <h3>Emerald Bay Inn <span class="pull-right"><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon"></span></h3>
              <div class="mappra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" />
              </span> 
              3245 Twin House Lane, Springfield
              </div>
              <div class="watchpra fw">
                <span>
                  <img src="{{ asset('public/frontendAssets/images/clock.png')}}" alt="icon" />
                </span>
                Open Now
              </div>
              <div class="offer-off fw">
                <div class="offcont pull-left">
                  <span>$ 840 <small>Per Night</small></span>
                  <span class="fw">
                    <p>$ 1200</p> <span class="red">30% off</span>
                  </span>
                </div>
                <div class="pull-right">
                  <a href="#" class="check-availibility-btn">Check Availibility</a>
                </div>
              </div>
            </div>
          </a>
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