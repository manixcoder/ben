<?php

namespace App\Http\Controllers\Merchant;

use App\Models\CheckInModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckInManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.checkin.index', $data);
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
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function show(CheckInModel $checkInModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckInModel $checkInModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckInModel $checkInModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckInModel  $checkInModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckInModel $checkInModel)
    {
        //
    }
}
