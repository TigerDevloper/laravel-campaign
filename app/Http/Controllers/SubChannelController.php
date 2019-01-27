<?php

namespace App\Http\Controllers;

use App\Channel;
use App\SubChannel;
use Illuminate\Http\Request;

class SubChannelController extends Controller
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
        $subchannels = SubChannel::paginate(5);
        return view('subchannel/index')
                ->with('subchannels', $subchannels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $channels = Channel::all();
        return view('subchannel/create')
                ->with('channels', $channels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $subchannel = new SubChannel;
        $subchannel->name = $req->input('name');
        $subchannel->color = $req->input('color');
        $subchannel->channel_id = $req->input('chan_name');
        $subchannel->save();
        return redirect('/channel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subchannel = SubChannel::find($id);
        return view('subchannel/detail')
                ->with('subchannel', $subchannel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $channels = Channel::all();
        $subchannel = SubChannel::find($id);
        return view('subchannel/edit')
                ->with('subchannel', $subchannel)
                ->with('channels', $channels);
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
        $subchannel = SubChannel::find($id);
        $subchannel->name = $req->input('name');
        $subchannel->color = $req->input('color');
        $subchannel->channel_id = $req->input('chan_name');
        $subchannel->save();
        return redirect('/subchannel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subchannel = SubChannel::find($id);
        $subchannel->delete();
    }
}
