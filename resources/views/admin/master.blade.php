<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="{{ asset('public/adminAssets/images/header_logo.png')}}" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('public/adminAssets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/adminAssets/Fonts/font.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('public/adminAssets/css/style.css')}}">


  <title> Dashboard </title>
</head>

<body>
  <header>
    <div class="benefitme">
      <div class="col-md-6 col-sm-6 ">
        <a href="#"><img src="{{ asset('public/adminAssets/images/header_logo.png')}}" alt="header_logo" width="220px"></a>

      </div>
      <div class="col-md-6 col-sm-6 text-right">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <img src="{{ asset('public/adminAssets/images/logout.png')}}" alt="logout" width="20px"> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
  </header>
  <div class="side-bar text-left">
    <ul>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_dashboard.png')}}" alt="Dashboard"> Dashboard</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_users.png')}}" alt="users"> Users</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_companies.png')}}" alt="Companies"> Companies</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_advertising.png')}}" alt="Advertising"> Advertising</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_awards.png')}}" alt="awards"> Awards</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_subscriptions.png')}}" alt="Subscriptions"> Subscriptions</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_payments.png')}}" alt="Payments"> Payments</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_messages.png')}}" alt="Messages"> Messages</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_business_category.png')}}" alt="sp_business_category"> Business Category</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_role_access.png')}}" alt="sp_role_access"> Role Access Company Category Wise</a></li>
      <li><a href="#"> <img src="{{ asset('public/adminAssets/images/sp_role_access.png')}}" alt="role"> Role Access Company Category Wise</a></li>
    </ul>
  </div>
  <div class="add-newuser-add">
    @yield('content')
  </div>

  <script src="{{ asset('public/adminAssets/js/libaury.js') }}"></script>
  <script src="{{ asset('public/adminAssets/js/bootstrap.min.js') }}"></script>
</body>

</html>