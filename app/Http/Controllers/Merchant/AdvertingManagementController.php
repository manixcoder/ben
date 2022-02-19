<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Adverting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertingManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.adverting.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.adverting.create', $data);
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
     * @param  \App\Models\Adverting  $adverting
     * @return \Illuminate\Http\Response
     */
    public function show(Adverting $adverting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adverting  $adverting
     * @return \Illuminate\Http\Response
     */
    public function edit(Adverting $adverting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adverting  $adverting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adverting $adverting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adverting  $adverting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adverting $adverting)
    {
        //
    }
}
