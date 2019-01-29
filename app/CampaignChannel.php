<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignChannel extends Model
{
    public function campaign()
	{
	    return $this->belongsTo('App\Campaign');
	}

	public function channel()
	{
	    return $this->belongsTo('App\Channel');
	}

	public function subchannel()
	{
	    return $this->belongsTo('App\SubChannel');
	}
}
