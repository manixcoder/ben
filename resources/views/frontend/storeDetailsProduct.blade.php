@extends('frontend.master')
@section('pageTitle', 'Browse Offer')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<section class="hayatt-hotelbg storebg_Details_cont fw">
        <img src="{{ asset('public/frontendAssets/images/hotelbg-img.jpg')}}" alt="bg" />
        <div class="hayatt-profile">
          <div class="container">
            <div class="imgprofile">
              <img src="{{ asset('public/frontendAssets/images/header_logo.png')}}" alt="hotel">
            </div>
            <div class="hayattprofile-cont">
              <div class="pull-left">
                <h4>Migeez</h4>
                <p><span><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon"></span> 3245 Twin House Lane, Springfield</p>
                <p class="greentext"><span class="colorgreen"><img src="{{ asset('public/frontendAssets/images/open_close_status.png')}}" alt="icon"></span>Open Now</p>
              </div>
              <div class="harticon">
                <i><img src="{{ asset('public/frontendAssets/images/added_to_favourite.png')}}" alt="iconalt"/></i>
                <i><img src="{{ asset('public/frontendAssets/images/share.png')}}" alt="iconalt"/></i>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="abouthotel  fw">
      <div class="container">
        <h3>About Hotel</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        <div class="socail-cont contact-address-cont">
          <div class="row">
            <div class="col-md-6 storebg_Contact_cont">
              <h4>Contact</h4>
              <p><i><img src="{{ asset('public/frontendAssets/images/c_call.png')}}" class="phone-cion" alt="icon"></i> 96000000051</p>
              <p><i><img src="{{ asset('public/frontendAssets/images/c_mail.png')}}" class="mail-icon" alt="icon"></i>hyattdynamite@gmail.com</p>
            </div>
            <div class="col-md-6 col-sm-6 text-right">
              <h4>Social Links</h4>
              <ul>
                <li><a href="#"><img src="{{ asset('public/frontendAssets/images/l_facebook.png')}}" alt="icon" /></a></li>
                <li><a href="#"><img src="{{ asset('public/frontendAssets/images/s_instagram.png')}}" alt="icon" /></a></li>
                <li><a href="#"><img src="{{ asset('public/frontendAssets/images/s_twitter.png')}}" alt="icon" /></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="store-prodect-tabs">
      <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#product" aria-controls="product" role="tab" data-toggle="tab">Product</a></li>
          <li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Services</a></li>
        </ul>
      
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="product">
            <div class="product-tabcont fw">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="./prodect-details.html">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/vivo.jpg')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Cellphone</small></p>
                          HUAWEI P50 Pro
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 1200 <span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="./prodect-details.html">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/apple-burd.jpeg')}}" alt="img" />
                        <span >80% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Earphone</small></p>
                          Apple Air buds
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 150 <span>Offer Valid till : 10 Oct 21 </span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="./prodect-details.html">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/ideapad.jpeg')}}" alt="img"  class="leptop"  />
                        <span >65% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Laptop</small></p>
                          Lenovo Ideapad 5
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 2000<span> Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="./prodect-details.html">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/ideapad1.jpeg')}}" alt="img" class="leptop" />
                        <span >65% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Laptop</small></p>
                          Lenovo Ideapad 5
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 2000<span> Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="./prodect-details.html">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/phone.jpg')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Cellphone</small></p>
                          HUAWEI P50 Pro
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 1200 <span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="./prodect-details.html">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/arrival-img6.png')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Cellphone</small></p>
                          HUAWEI P50 Pro
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 1200 <span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="services">
            <div class="product-tabcont fw">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="./service-details.html">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/mobile.jpg')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Repair</small></p>
                          Mobile Repairing
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4<span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="images/favicon.png" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="#">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/laptop-repair.jpg')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Repair</small></p>
                          Laptop Repairing
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4<span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="images/favicon.png" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="#">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/Computer-Repair-miami.jpg')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Repair</small></p>
                          Desktop Repairing
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4<span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="#">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/mobile.jpg')}}" alt="img" />
                        <span >65% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Repair</small></p>
                          Mobile Repairing
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4><span> Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="#">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/mobile.jpg')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Repair</small></p>
                          Mobile Repairing
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 1200 <span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="discount_detailcontBox fw">
                    <a href="#">
                      <figure class="discount-img">
                        <img src="{{ asset('public/frontendAssets/images/mobile.jpg')}}" alt="img" />
                        <span >70% Discount</span>
                      </figure>
                      <div class="discount_detailcont">
                        <h3>
                          <p><small>Cellphone</small></p>
                          HUAWEI P50 Pro
                          <i><img src="{{ asset('public/frontendAssets/images/add_to_favourite.png')}}" alt="icon" /></i>
                        </h3>
                        <h4>$ 1200 <span>Offer Valid till : 10 Oct 21</span></h4>
                        <ul class="prodect-socail fw">
                          <li><span><img src="{{ asset('public/frontendAssets/images/favicon.png')}}" alt="icon" /></span>Migeez</li>
                          <li><span><img src="{{ asset('public/frontendAssets/images/like.png')}}" alt="icon" /></span>30</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
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