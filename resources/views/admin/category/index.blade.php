@extends('admin.master')
@section('pageTitle', 'Category')
@section('content')
<div class="company-sec">
    <div class="row">
        <div class="col-md-6 ">
            <p>Business Category</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="#">Add New Category</a>
        </div>
    </div>
</div>

<div class="sub-category">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                Company Category
            </a>
        </li>
        <li role="presentation">
            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                Sub Category
            </a>
        </li>
        <li role="presentation">
            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                User Category
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="table-responsive">
                <table border="0" class="table">
                    <tbody>
                        @php
                        $business_categories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','Business')->get();
                        //dd($business_categories);
                        @endphp

                        @if($business_categories)
                        @foreach($business_categories as $key =>$categories)
                        <tr>
                            <td class="text-left">{{ ucfirst($categories->name) }}</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png') }}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png') }}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                        @endif



                        <!--<tr>
                            <td class="text-left "> Restaurant</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="./edit-company-category.html">
                                        <img src="{{ asset('public/adminAssets/images/edit.png') }}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left "> Hotel</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="./edit-company-category.html">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>-->
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            @php
            $business_subcategories = DB::table('categories')->where('parent_id','!=','0')->where('c_type','=','Business')->get();
            @endphp

            <div class="table-responsive">
                <table border="0" class="table">
                    <tbody>
                        @if($business_subcategories)
                        @foreach($business_subcategories as $key =>$subcategories)
                        @php
                        $businessCategories = DB::table('categories')->where('id','=',$subcategories->parent_id)->first();
                        //dd($businessCategories);
                        @endphp
                        <tr>
                            <td class="text-left">
                                <span class="restaurant">{{ ucfirst($businessCategories->name) }}</span>
                                <br>
                                {{ ucfirst($subcategories->name) }}
                            </td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        <!--
                            <tr>
                            <td class="text-left ">
                                <span class="restaurant">Restaurant</span>
                                <br>
                                Restaurant Type 1
                            </td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left ">
                                <span class="restaurant">Restaurant</span>
                                <br>
                                Restaurant Type 1
                            </td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
            <div class="table-responsive">
                @php
                $business_categories = DB::table('categories')->where('c_type','=','User')->get();
                //dd($business_subcategories);
                @endphp
                <table border="0" class="table">
                    <tbody>
                        @if($business_categories)
                        @foreach($business_categories as $key =>$categories)
                        <tr>
                            <td class="text-left">{{ ucfirst($categories->name) }}</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>

                            </td>
                        </tr>
                        @endforeach
                        @endif
                        <!-- <tr>

                            <td class="text-left "> Manager</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>

                            <td class="text-left "> Accountant</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

@endsection