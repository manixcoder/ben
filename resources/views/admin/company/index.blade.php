@extends('admin.master')
@section('pageTitle', 'Comapany')
@section('content')
@section('pageCss')
<style></style>
@stop
<div class="company-sec">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="ti-user"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6 ">
            <p>Companies</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('admin/company-management/create') }}">
                Add New Companies
            </a>
        </div>
    </div>
</div>
<?php
// dd($merchant);
?>
<div class="sub-category">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                Registration Requests
            </a>
        </li>
        <li role="presentation">
            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                Registered ompany
            </a>
        </li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="table-responsive requests-table">
                <table border="0" class="company-name Companies">
                    <tbody>

                        @foreach($inmerchants as $merchant)
                        <?php
                        $categorydata = DB::table('categories')->where('id', $merchant->company_type)->first();
                        $subcategorydata = DB::table('categories')->where('id', $merchant->sub_restaurant_type)->first();
                        $usercategorydata = DB::table('categories')->where('id', $merchant->user_type)->first();
                        ?>
                        <tr>
                            <td>
                                <p>#{{ $merchant->uid_number }}</p>
                                <h3>{{ $merchant->company_name }}</h3>
                                <p>{{ $categorydata->name }}</p>
                                <p>{{ $merchant->address }} , {{ $merchant->city }} , {{ $merchant->zip_code }} </p>
                                <h3>VAT/UID Numb<er h3="">
                                    </er>
                                    {{ $merchant->uid_number }}
                                </h3>
                            </td>
                            <td>
                                <p class="text-right">@if($merchant->last_login) {{ date('d M Y | H:i a', strtotime($merchant->last_login)) }} @endif </p>
                                <span class=" pull-right view-all"><a href="{{ url('admin/company-management') . '/' . $merchant->id.'/show' }}">View Details</a>
                                    <button type="submit" class="btn btn-primary">Decline</button>
                                    <button type="submit" class="btn btn-primary bgcolor">Accept</button>
                                </span>
                                <span class="pull-right">
                                    <img src="{{ asset('public/adminAssets/images/timer.png')}}" alt="timer" width="15px">
                                    Auto Accept In :
                                    <span class="min-timer">
                                        03:00 min
                                    </span>
                                </span>
                            </td>
                        </tr>
                        @endforeach


                        <!--tr>
                            <td>
                                <p>#NUD5449595</p>
                                <h3>Company Name</h3>
                                <p>Hotel</p>
                                <p>2700 Cliffside Drive, Syracuse, 13202</p>
                                <h3>VAT/UID Numb<er h3="">
                                    </er>
                                </h3>
                            </td>
                            <td>
                                <p class="text-right">10 Jun 21 | 10:30 am</p>
                                <span class=" pull-right view-all"><a href="#">View Details</a>
                                    <button type="submit" class="btn btn-primary">Decline</button>
                                    <button type="submit" class="btn btn-primary bgcolor">Accept</button>
                                </span>
                                <span class="pull-right">
                                    <img src="{{ asset('public/adminAssets/images/timer.png')}}" alt="timer" width="15px">
                                    Auto Accept In :
                                    <span class="min-timer">
                                        03:00 min
                                    </span>
                                </span>
                            </td>
                        </tr-->
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="table-responsive requests-table">
                <table border="0" class="company-name Companies">

                    <tbody>
                        @foreach($merchants as $merchant)
                        <?php
                        $categorydata = DB::table('categories')->where('id', $merchant->company_type)->first();
                        $subcategorydata = DB::table('categories')->where('id', $merchant->sub_restaurant_type)->first();
                        $usercategorydata = DB::table('categories')->where('id', $merchant->user_type)->first();
                        ?>
                        <tr>
                            <td>
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/circle.jpg')}}" alt="icon">
                                </figure>
                                <span class="company-profile">
                                    <p>#{{ $merchant->uid_number }}</p>
                                    <h3>{{ $merchant->company_name }}</h3>
                                    <p>{{ $categorydata->name }}</p>
                                    <p>{{ $merchant->address }} , {{ $merchant->city }} , {{ $merchant->zip_code }}</p>
                                    <h3>VAT/UID Numb<er h3="">
                                        </er>
                                        {{ $merchant->uid_number }}
                                    </h3>
                                </span>
                            </td>
                            <td>
                                <p class="text-right"><span class="grytext-cont">Last Login :</span>@if($merchant->last_login) {{ date('d M Y | H:i a', strtotime($merchant->last_login)) }} @endif</p>
                                <ul class="calldetail-box">
                                    <li>
                                        Active
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                                <span class=" pull-right view-all">
                                    <a href="{{ url('admin/company-management') . '/' . $merchant->id.'/show' }}">
                                        View Details
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @endforeach


                        <!-- tr>
                            <td>
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/circle.jpg')}}" alt="icon">
                                </figure>
                                <span class="company-profile">
                                    <p>#NUD5449595</p>
                                    <h3>Company Name</h3>
                                    <p>Restaurant Mexican</p>
                                    <p>2700 Cliffside Drive, Syracuse, 13202</p>
                                    <h3>VAT/UID Numb<er h3="">
                                        </er>
                                    </h3>
                                </span>
                            </td>
                            <td>
                                <p class="text-right">
                                    <span class="grytext-cont">
                                        Last Login :
                                    </span>
                                    10 Jun 21 | 10:30 am
                                </p>
                                <ul class="calldetail-box">
                                    <li>
                                        Active
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                                <span class=" pull-right view-all"><a href="#">View Details</a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/circle.jpg')}}" alt="icon">
                                </figure>
                                <span class="company-profile">
                                    <p>#NUD5449595</p>
                                    <h3>Company Name</h3>
                                    <p>Restaurant Mexican</p>
                                    <p>2700 Cliffside Drive, Syracuse, 13202</p>
                                    <h3>VAT/UID Numb<er h3="">
                                        </er>
                                    </h3>
                                </span>
                            </td>
                            <td>
                                <p class="text-right">
                                    <span class="grytext-cont">
                                        Last Login :
                                    </span>
                                    10 Jun 21 | 10:30 am
                                </p>
                                <ul class="calldetail-box">
                                    <li>
                                        Active
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                                <span class=" pull-right view-all">
                                    <a href="#">
                                        View Details
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/circle.jpg')}}" alt="icon">
                                </figure>
                                <span class="company-profile">
                                    <p>#NUD5449595</p>
                                    <h3>Company Name</h3>
                                    <p>Restaurant Mexican</p>
                                    <p>2700 Cliffside Drive, Syracuse, 13202</p>
                                    <h3>VAT/UID Numb<er h3="">
                                        </er>
                                    </h3>
                                </span>
                            </td>
                            <td>
                                <p class="text-right">
                                    <span class="grytext-cont">
                                        Last Login :
                                    </span>
                                    10 Jun 21 | 10:30 am
                                </p>
                                <ul class="calldetail-box">
                                    <li>
                                        Active
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('public/adminAssets/images/call.png')}}" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                                <span class=" pull-right view-all"><a href="#">View Details</a>
                                </span>
                            </td>
                        </tr -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop