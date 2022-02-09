<?php

namespace App\Http\Controllers\Merchant;

use App\Models\RoomModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.rooms.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.rooms.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function show(RoomModel $roomModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomModel $roomModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomModel $roomModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomModel  $roomModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomModel $roomModel)
    {
        //
    }
}
