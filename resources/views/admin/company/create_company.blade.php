@extends('admin.master')
@section('pageTitle', 'Create Company')
@section('content')
<div class="add-newuser">
    <p>
        <span class="user-color">Companies</span>
        <span>> Add New Company</span>
    </p>
</div>
<div class="user-name">
    <div class="row">
        <form method="POST" action="{{ url('/admin/company-management/save-company') }}" enctype="multipart/form-data">
            @csrf
            <section>
                <div class="col-md-12" style="margin-bottom: 15px;">
                    <h3>Company Info</h3>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control" placeholder="Standard Fort" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        @php
                        $business_categories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','Business')->get();
                        @endphp
                        <label>Category</label>
                        <select class="form-control @error('category') form-control-danger @enderror givepoint-img" id="category" placeholder="category" name="category" onChange="getCategory(this);" required>
                            <option value="">Select</option>
                            @foreach($business_categories as $key =>$categories)
                            <option value="{{ $categories->id }}">{{ ucfirst($categories->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Subcategory</label>
                        @php
                        $business_subcategories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','Business')->get();
                        @endphp
                        <select class="form-control @error('sub_category') form-control-danger @enderror" id="sub_category" placeholder="sub_category" name="sub_category" required>
                            <option value=""> --Select Options-- </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="2700 Cliffside Drive" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" placeholder="Syracuse" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" name="zip_code" class="form-control" placeholder="13202" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>VAT/UID Number</label>
                        <input type="text" name="uid_number" class="form-control " placeholder="HdKH88494JH98" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>General Loyalty Point</label>
                        <select class="form-control givepoint-img" name="general_loyalty_point" required>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="btn-group">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <a href="#" type="text" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <a href="#" type="text" class="btn btn-primary bgcolor">Next</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3>User Info</h3>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            @php
                            $categoriesUser = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','User')->get();
                            @endphp
                            <label>User Type</label>
                            <select class="form-control givepoint-img" name="sub_category">
                                <option>Select User Type</option>
                                @foreach($categoriesUser as $key =>$categories)
                                <option value="{{ $categories->id }}">{{ ucfirst($categories->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="John">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Doe">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="birthday" class="form-control" placeholder="12 Jun 1995">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Select Gender</label>
                            <select class="form-control givepoint-img" name="gender">
                                <option value="">Select Gender</option>
                                <option value="1">Male</option>
                                <option value="0">Female</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="doejohn484@gamil.com" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" name="mobile" class="form-control" placeholder="9600000025" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="DoeJohn@0052" required>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <a href="#" class="btn btn-primary">Previous</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bgcolor">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>


@endsection
@section('pagejs')
<script type="text/javascript">
    function getCategory(obj) {
        let categoryId = $(obj).val();
        $.ajax({
            url: '{{ url("/request/get-sub-category") }}' + '/' + categoryId,
            type: 'GET',
            success: function(rtnData) {
                // console.log(rtnData);
                if (rtnData.status == 'success') {
                    var classList = rtnData.list;
                    let options = "<option value=''> --Select Options-- </option>";
                    $.each(classList, function(key, value) {
                        options += '<option value=' + value.id + '>' + value.name + '</option>';
                    });
                    $('#sub_category').html(options);
                } else {
                    console.log(rtnData.msg);
                }
            }
        });
    }
</script>
@stop