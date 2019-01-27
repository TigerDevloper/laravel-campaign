<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubChannel extends Model
{
    public function channel()
	{
	    return $this->belongsTo('App\Channel');
	}
}
