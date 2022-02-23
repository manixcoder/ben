<?php

namespace App\Http\Controllers\Merchant;

use App\Models\InvitePeople;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvitePeopleManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = array();
        return view('merchent.invitePeople.index', $data);
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
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function show(InvitePeople $invitePeople)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function edit(InvitePeople $invitePeople)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvitePeople $invitePeople)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvitePeople  $invitePeople
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvitePeople $invitePeople)
    {
        //
    }
}
