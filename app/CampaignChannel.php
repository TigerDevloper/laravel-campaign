<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignChannel extends Model
{
    public function channel()
	{
	    return $this->belongsTo('App\SubChannel');
	}
}
