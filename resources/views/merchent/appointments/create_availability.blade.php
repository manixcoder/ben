@extends('merchent.master')
@section('pageTitle', 'Appointments')
@section('content')
@section('pageCss')
<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
@stop

<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="col-md-6 text-left">
            <p>Add Availability </p>
        </div>
    </div>
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="new-requests">
        <form method="POST" action="{{ url('/merchant/appointments-management/save-appointments') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-5 text-left">
                    <div id='full_calendar_events' class="form-control @error('appointment_start') is-invalid @enderror"></div>
                    @error('appointment_start')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-5 text-left">
                    <div class="appointment-for title">
                        <input type="hidden" class="form-control @error('appointment_start') is-invalid @enderror" name="appointment_start" id="appointment_start">
                        <input type="hidden" class="form-control @error('appointment_end') is-invalid @enderror" name="appointment_end" id="appointment_end">
                        <div class="form-group">
                            <label>Appointment Title</label>
                            <input type="text" class="form-control @error('appointment_title') is-invalid @enderror" name="appointment_title" placeholder="Write title here">
                            @error('appointment_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>From</label>
                            <input type="time" class="form-control @error('appointment_time_start') is-invalid @enderror" name="appointment_time_start" placeholder="HH:MM">
                            @error('appointment_time_start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>To</label>
                            <input type="time" class="form-control @error('appointment_time_end') is-invalid @enderror" name="appointment_time_end" placeholder="HH:MM">
                            @error('appointment_time_end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="recurring">Recurring Appointment</label>
                            <span class="pull-right">
                                <label class="switch right-click">
                                    <input type="checkbox ">
                                    <span class="slider round"></span>
                                </label>
                            </span>
                        </div>
                        <div class="Jessica-pra appointment">
                            <div class="pro-service Message">
                                <a href="#" id="myBtn">
                                    Connect with Product/Service
                                    <img src="{{ asset('public/merchemtAssets/images/arrow_view.png')}}" alt="arrow_view">
                                </a>
                            </div>
                            <span class="mobile-box">
                                <figure>
                                    <img src="{{ asset('public/merchemtAssets/images/mobile-reparing.jpeg')}}" alt="">
                                </figure>
                                <p>Mobile Repairing</p>
                            </span>
                            <span class="mobile-box">
                                <figure>
                                    <img src="{{ asset('public/merchemtAssets/images/laptop-repairing.jpeg')}}" alt="">
                                </figure>
                                <p>Laptop Repairing</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bgcolor">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                    <button type="button" class="close ConnectPclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div> -->
                    <div class="modal-body">
                        <div class="messagepopCant">
                            <h3>Appointment availibility connect with</h3>
                            <div class="offerconnect">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Products" aria-controls="home" role="tab" data-toggle="tab">Products</a></li>
                                    <li role="presentation"><a href="#Services" aria-controls="profile" role="tab" data-toggle="tab">Services</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="form-group">
                                        <input type="button" class="form-control" placeholder="Search" />
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="Products">
                                        <?php
                                        $productsData = DB::table('products')->where('product_type', '1')->where('merchent_id', Auth::user()->id)->get();
                                        ?>
                                        <table class="table">
                                            <tbody>
                                                @forelse ($productsData as $product)
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #{{ $product->id }}
                                                    </td>
                                                    <td>
                                                        {{ $product->product_name}}
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @empty
                                                <p>No product</p>
                                                @endforelse
                                                <!-- <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Services">
                                        <table class="table">
                                            <?php
                                            $servicesData = DB::table('products')->where('product_type', '2')->where('merchent_id', Auth::user()->id)->get();
                                            ?>
                                            <tbody>
                                                @forelse ($servicesData as $service)
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #{{ $service->id}}
                                                    </td>
                                                    <td>
                                                        {{ $service->product_name}}
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @empty
                                                <p>No service</p>
                                                @endforelse
                                                <!-- <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="firstimg">
                                                            <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        #89478494
                                                    </td>
                                                    <td>
                                                        HUAWEI P50 Pro
                                                    </td>
                                                    <td>
                                                        <span class="tdcheckbox">
                                                            <input type="checkbox" class="checkbox">
                                                            <small>&#10004;</small>
                                                        </span>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn comanebtn">Done</button>
                                </div>
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
<script src="{{ asset('public/merchemtAssets/js/libaury.js')}}"></script>
<script src="{{ asset('public/merchemtAssets/js/bootstrap.min.js')}}"></script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
@stop