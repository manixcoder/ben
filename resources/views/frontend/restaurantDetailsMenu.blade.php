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
<section class="roomgest-detail fw">
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#roomgest-menu" aria-controls="roomgest-menu" role="tab" data-toggle="tab">
                    Menu
                </a>
            </li>
            <li role="presentation">
                <a href="#roomgest-rable" aria-controls="roomgest-rable" role="tab" data-toggle="tab">
                    Table
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="roomgest-menu">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <ul class="nav nav-tabs inner-tebs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#Category-menu" aria-controls="Category-menu" role="tab" data-toggle="tab">
                                    Category 1
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu1" aria-controls="Category-menu1" role="tab" data-toggle="tab">
                                    Category 2
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu2" aria-controls="Category-menu2" role="tab" data-toggle="tab">
                                    Category 3
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu3" aria-controls="Category-menu3" role="tab" data-toggle="tab">
                                    Category 4
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu4" aria-controls="Category-menu4" role="tab" data-toggle="tab">
                                    Category 5
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu5" aria-controls="Category-menu5" role="tab" data-toggle="tab">
                                    Category 6
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu6" aria-controls="Category-menu6" role="tab" data-toggle="tab">
                                    Category 7
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu7" aria-controls="Category-menu7" role="tab" data-toggle="tab">
                                    Category 8
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu8" aria-controls="Category-menu8" role="tab" data-toggle="tab">
                                    Category 9
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Category-menu9" aria-controls="Category-menu9" role="tab" data-toggle="tab">
                                    Category 10
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Category-menu">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.wallpaperup.com/uploads/wallpapers/2013/11/26/179038/eb88f80c52ce898ed43d71896f0bd7e4.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu1">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu2">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu3">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu4">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu5">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>
                                            Frozen Pizza
                                        </h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>
                                            cheese burst pizza
                                        </h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>
                                            Frozen Pizza
                                        </h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>
                                            cheese burst pizza
                                        </h4>
                                        <p class="lg-pra">
                                            with cheese & oregano
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">
                                                    $ 840
                                                </span>
                                                <span class="lightcolor">
                                                    $ 1200
                                                    <span class="redcolor">
                                                        30% off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu6">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu7">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu8">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Category-menu9">
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://www.recipestation.com/wp-content/uploads/sites/736/2016/06/dreamstime_s_35993453.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>Frozen Pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomgest-detailcont superior-box  fw">
                                    <div class="imgbox">
                                        <figure>
                                            <img src="https://images5.alphacoders.com/812/812234.jpg" alt="img" />
                                        </figure>
                                    </div>
                                    <div class="detailcontright">
                                        <h4>cheese burst pizza</h4>
                                        <p class="lg-pra">with cheese & oregano</p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="boldtext">$ 840</span>
                                                <span class="lightcolor">$ 1200<span class="redcolor">30% off</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane " id="roomgest-rable">
                <div class="roomgest-table-sec">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Select Date</h4>
                            <div class="calendar">
                                <div class="front">
                                    <div class="current-date">
                                        <h1>Friday 15th</h1>
                                        <h1>January 2016</h1>
                                    </div>
                                    <div class="current-month">
                                        <ul class="week-days">
                                            <li>MON</li>
                                            <li>TUE</li>
                                            <li>WED</li>
                                            <li>THU</li>
                                            <li>FRI</li>
                                            <li>SAT</li>
                                            <li>SUN</li>
                                        </ul>
                                        <div class="weeks">
                                            <div class="first">
                                                <span class="last-month">28</span>
                                                <span class="last-month">29</span>
                                                <span class="last-month">30</span>
                                                <span class="last-month">31</span>
                                                <span>01</span>
                                                <span>02</span>
                                                <span>03</span>
                                            </div>

                                            <div class="second">
                                                <span>04</span>
                                                <span>05</span>
                                                <span class="event">06</span>
                                                <span>07</span>
                                                <span>08</span>
                                                <span>09</span>
                                                <span>10</span>
                                            </div>

                                            <div class="third">
                                                <span>11</span>
                                                <span>12</span>
                                                <span>13</span>
                                                <span>14</span>
                                                <span class="active">15</span>
                                                <span>16</span>
                                                <span>17</span>
                                            </div>

                                            <div class="fourth">
                                                <span>18</span>
                                                <span>19</span>
                                                <span>20</span>
                                                <span>21</span>
                                                <span>22</span>
                                                <span>23</span>
                                                <span>24</span>
                                            </div>

                                            <div class="fifth">
                                                <span>25</span>
                                                <span>26</span>
                                                <span>27</span>
                                                <span>28</span>
                                                <span>29</span>
                                                <span>30</span>
                                                <span>31</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back">
                                    <input placeholder="What's the event?">
                                    <div class="info">
                                        <div class="date">
                                            <p class="info-date">
                                                Date: <span>Jan 15th, 2016</span>
                                            </p>
                                            <p class="info-time">
                                                Time: <span>6:35 PM</span>
                                            </p>
                                        </div>
                                        <div class="address">
                                            <p>
                                                Address: <span>129 W 81st St, New York, NY</span>
                                            </p>
                                        </div>
                                        <div class="observations">
                                            <p>
                                                Observations: <span>Be there 15 minutes earlier</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <button class="save">
                                            Save <i class="ion-checkmark"></i>
                                        </button>
                                        <button class="dismiss">
                                            Dismiss <i class="ion-android-close"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="date-select fw">
                                <h4>Table For</h4>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected>4 People</option>
                                        <option>24 People </option>
                                        <option>34 People</option>
                                        <option>44 People</option>
                                        <option>54 People</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 time-table-sec">
                            <h4>Select a Time Slot</h4>
                            <ul>
                                <li><a href="#">Lunch</a></li>
                                <li><a href="#">Dinner</a></li>
                            </ul>
                            <div class="time-table-cont">
                                <span><a href="#">6:00 pm</a></span>
                                <span><a href="#">6:30 pm</a></span>
                                <span><a href="#">7:00 pm</a></span>
                                <span><a href="#">7:30 pm</a></span>
                                <span class="disbal"><a href="#">8:00 pm</a></span>
                                <span><a href="#">8:30 pm</a></span>
                                <span><a href="#">9:00 pm</a></span>
                                <span><a href="#" class="active">9:30 pm</a></span>
                                <span class="disbal"><a href="#">10:00 pm</a></span>
                                <span><a href="#">10:30 pm</a></span>
                                <span><a href="#">11:00 pm</a></span>
                            </div>
                            <a data-toggle="modal" data-target="#successfully-request" class="request-book">Request To Book</a>
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