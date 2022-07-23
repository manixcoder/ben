<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Validator;
use Yajra\Datatables\Datatables;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'users']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchent_data = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'merchent');
            })->get()->count();
        $user_data = User::with(['getRole'])
            ->whereHas('roles', function ($q) {
                $q->where('name', 'user');
            })->get()->count();
        //dd($company_data);
        return view('index')->with(array(
            'user_data'         => $user_data,
            'merchent_data'     => $merchent_data
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function browseOffers(Request $request)
    {
        $data = array();
        return view('frontend.browse_offer', $data);
    }

    public function storeDetailsProduct(Request $request)
    {
        $data = array();
        return view('frontend.storeDetailsProduct', $data);
    }
    public function restaurantDetailsMenu(Request $request)
    {
        $data = array();
        return view('frontend.restaurantDetailsMenu', $data);
    }
    public function hotelDetails(Request $request)
    {
        $data = array();
        return view('frontend.hotelDetails', $data);
    }
    public function roomDetails(Request $request)
    {
        $data = array();
        return view('frontend.roomDetails', $data);
    }
    public function productDetails(Request $request)
    {
        $data = array();
        return view('frontend.productDetails', $data);
    }
}
