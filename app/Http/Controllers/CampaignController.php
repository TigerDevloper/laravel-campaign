<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Channel;
use App\SubChannel;
use App\CampaignChannel;

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
        return redirect('campaign/channel/' . $campaign->id);

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
        return redirect('campaign/channel/' . $campaign->id);

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

    public function channel(Request $req, $campaign_id)
    {

        $channels = Channel::all();
        $subchannels = SubChannel::all();
        $camp_channels = CampaignChannel::where('campaign_id', $campaign_id)->get();
        return view('campaign/addchannel')
                ->with('campaign_id', $campaign_id)
                ->with('channels', $channels)
                ->with('camp_channels', $camp_channels)
                ->with('subchannels', $subchannels);

    }

    public function addchannel(Request $req, $campaign_id)
    {
        $c = new CampaignChannel;
        $c->campaign_id = $campaign_id;
        $c->channel_id = $req->input('channel_id');
        $c->subchannel_id = $req->input('subchannel_id');
        $c->chairman = $req->input('chairman');
        $c->description = $req->input('description');
        $c->stage = $req->input('stage');

        $c->save();
        return redirect('campaign/channel/' . $campaign_id);

    }

    public function editchannel(Request $req, $camp_id, $chan_id)
    {
        $channels = Channel::all();
        $subchannels = SubChannel::all();
        $camp_channels = CampaignChannel::where('campaign_id', $camp_id)->get();

        $channel = CampaignChannel::find($chan_id);


        return view('campaign/editchannel')
                ->with('campaign_id', $camp_id)
                ->with('channels', $channels)
                ->with('camp_channels', $camp_channels)
                ->with('subchannels', $subchannels)
                ->with('channel', $channel);

    }

    public function savechannel(Request $req, $camp_id, $chan_id)
    {
        $c = CampaignChannel::find($chan_id);
        $c->chairman = $req->input('chairman');
        $c->description = $req->input('description');
        $c->tease_start = $req->input('tease_start');
        $c->tease_end = $req->input('tease_end');
        $c->live_start = $req->input('live_start');
        $c->live_end = $req->input('live_end');
        $c->sustain_start = $req->input('sustain_start');
        $c->sustain_end = $req->input('sustain_end');

        $c->save();
        return redirect('campaign/channel/' . $camp_id);

    }

    public function deletechannel($id)
    {
        $channel = CampaignChannel::find($id);
        $channel->delete();
    }

    public function preview($camp_id)
    {
        $campaign = Campaign::find($camp_id);
        $channels = CampaignChannel::where('campaign_id', $camp_id)->get();
        $days = [];
        for ($i=0; $i < 31; $i++) { 
            $days[$i] = $i + 1;
        }
        return view('campaign/preview')
                ->with('campaign_id', $camp_id)
                ->with('channels', $channels)
                ->with('campaign', $campaign)
                ->with('days', $days);
    }

    public function assign($ch_id)
    {
        $subchannels = SubChannel::where('channel_id', $ch_id)->get();
        /*$name = array();
        foreach ($subchannels as $subchannel) {
            $name = $subchannel->name;
        }*/
        //var_dump($name);
        echo json_encode($subchannels);
    }
}
