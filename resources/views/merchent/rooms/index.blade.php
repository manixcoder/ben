@extends('merchent.master')
@section('pageTitle', 'Merchent')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="col-md-6 text-left">
            <p>Rooms</p>
        </div>
    </div>
    <div class="new-requests">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">
                    New Booking
                </a>
            </li>
            <li role="presentation" class="">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                    Accepted
                </a>
            </li>
            <li role="presentation" class="active">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="true">
                    My Room
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="home">
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3> Room Name 1</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <span>
                                <button>
                                    Decline
                                </button>
                            </span>
                            <span>
                                <button class="accept-bg">
                                    Accept
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <span>
                                <button>
                                    Decline
                                </button>
                            </span>
                            <span>
                                <button class="accept-bg">
                                    Accept
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3>Room Name 1</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <span>
                                <button>
                                    Decline
                                </button>
                            </span>
                            <span>
                                <button class="accept-bg">
                                    Accept
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <span>
                                <button>
                                    Decline
                                </button>
                            </span>
                            <span>
                                <button class="accept-bg">
                                    Accept
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3>Room Name 1</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>

                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p><i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i> 4 People 2 Room</p>

                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3>Room Name 1</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="images/circle.jpg" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p><i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i> 4 People 2 Room</p>

                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p> Booking for : <span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</span></p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane active" id="messages">
                <a href="{{ url('merchant/room-management/create') }}" class="addproduct-btn pull-right">Add New Room</a>
                <div class="new-booking">
                    <div class="row">
                        <div class="col-md-4 text-left">
                            <div class="number-table">
                                <figure>
                                    <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon" width="90px">
                                </figure>
                                <div class="Jessica-pra">
                                    <p> <span>Table for</span> <b>2</b></p>
                                    <p> <span> Number of Table</span> <b>3</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="number-table table-box">
                                <figure class="small-img">
                                    <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon" width="80%">
                                </figure>
                                <div class="Jessica-pra">
                                    <p> <span>Table for</span> <b>4</b></p>
                                    <p> <span> Number of Table</span> <b>6</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="number-table table-box">
                                <figure class="small-img">
                                    <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon" width="80%">
                                </figure>
                                <div class="Jessica-pra">
                                    <p> <span>Table for</span> <b>4</b></p>
                                    <p> <span> Number of Table</span> <b>6</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure class="avarage-box">
                                <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon">
                            </figure>
                            <div class="Jessica-pra">
                                <h3>Table Name 1</h3>
                                <p> <span>Avarage Booking Time :</span> 2 hours</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">

                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure class="avarage-box">
                                <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon">
                            </figure>
                            <div class="Jessica-pra">
                                <h3>Table Name 2</h3>
                                <p> <span>Avarage Booking Time :</span> 2 hours</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">

                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure class="avarage-box">
                                <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon">
                            </figure>
                            <div class="Jessica-pra">
                                <h3>Table Name 2</h3>
                                <p> <span>Avarage Booking Time :</span> 2 hours</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">

                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="16px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="16px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="16px">
                                    </a>
                                </li>
                            </ul>
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