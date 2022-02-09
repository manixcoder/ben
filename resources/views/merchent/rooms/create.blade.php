@extends('merchent.master')
@section('pageTitle', 'Merchent')
@section('content')
@section('pageCss')
<style>
</style>
@stop


<div class="add-newoffer">
    <div class="pra-sec">
        <p>Add New Room</p>
    </div>
    <div class="form-box">
        <div class="row">
            <div class="generate  Customer-journey">
                <form>
                    <div class="col-md-12">
                        <h3>Basic Room Details</h3>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group ">
                            <div class="coutome-uploadbtn">
                                <input type="file" class="form-control upload-file" placeholder="Mobile Number">
                                <span>
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/upload_img.png')}}" alt="upload_img " width="40px">
                                    </figure>
                                    Upload an image
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Room For</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img">
                                <option> 2</option>
                                <option>s</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Number Of Room</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img">
                                <option>2</option>
                                <option>s</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Min. Booking For (Nights)</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img">
                                <option>2</option>
                                <option>s</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Price/Night</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="$      500">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Discount</label>
                        <div class="form-group">
                            <input type="text" class="form-control discount-sale" placeholder="20">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">

                    </div>

                    <div class="col-md-12">
                        <label>Discount</label>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Write Description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>Amenities</h3>
                    </div>
                    <div class="col-md-6">
                        <label>Room Sq Ft</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img">
                                <option>2</option>
                                <option>s</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Single Beds</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img">
                                <option>2</option>
                                <option>s</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Free WiFi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Air Condition</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Balcony</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Ironing facilities</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Tumble dryer</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Electric kettle</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Toilet</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Desk</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Shower</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Tile/marble floor</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Hairdryer</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Satellite channels</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Socket near the bed</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Additional toilet</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Clothes rack</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <span class="box-input">
                                        <input type="checkbox" >
                                        <small></small>
                                    </span>
                                    <label class="menu-text">Desk</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>Locations</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Hotel Address</label>
                            <input type="name" class="form-control" placeholder="3245 Twin House Lane, Springfield 84575">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>Hours Rules</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Check in</label>
                            <input type="time" class="form-control" placeholder="12:00 pm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Check out</label>
                            <input type="time" class="form-control" placeholder="3:00 pm">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="No Smoking">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="name" class="form-control close-icon" placeholder="No Smoking">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class="add-new"> 
                            <img src="{{ asset('public/merchemtAssets/images/add-icon.png')}}" alt=""> Add new raw</span>
                    </div>
                    <div class="col-md-12">
                        <h3>Health & Safety</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Hotel Address</label>
                            <input type="name" class="form-control" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry.">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class="add-new"> <img src="{{ asset('public/merchemtAssets/images/add-icon.png')}}" alt=""> Add new raw</span>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
@section('pagejs')
<script>
</script>
@stop