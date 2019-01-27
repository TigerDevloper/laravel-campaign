<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $campaigns = Campaign::paginate(5);
        return view('campaign/index')
                ->with('campaigns', $campaigns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaign/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $campaign = new Campaign;
        $campaign->name = $req->input('name');
        $campaign->message = $req->input('message');
        $campaign->tease_start = $req->input('tease_start');
        $campaign->tease_end = $req->input('tease_end');
        $campaign->live_start = $req->input('live_start');
        $campaign->live_end = $req->input('live_end');
        $campaign->sustain_start = $req->input('sustain_start');
        $campaign->sustain_end = $req->input('sustain_end');
        $campaign->save();
        return redirect('/campaign');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaign = Campaign::find($id);
        return view('campaign/detail')
                ->with('campaign', $campaign);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaign = Campaign::find($id);
        return view('campaign/edit')
                ->with('campaign', $campaign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $campaign = Campaign::find($id);
        $campaign->name = $req->input('name');
        $campaign->message = $req->input('message');
        $campaign->tease_start = $req->input('tease_start');
        $campaign->tease_end = $req->input('tease_end');
        $campaign->live_start = $req->input('live_start');
        $campaign->live_end = $req->input('live_end');
        $campaign->sustain_start = $req->input('sustain_start');
        $campaign->sustain_end = $req->input('sustain_end');
        $campaign->save();
        return redirect('/campaign');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::find($id);
        $campaign->delete();
    }
}
