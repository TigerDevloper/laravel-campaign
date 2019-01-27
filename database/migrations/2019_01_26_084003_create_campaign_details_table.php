<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id');
            $table->integer('channel_id');
            $table->string('chairman');
            $table->string('description');
            $table->date('tease_start');
            $table->date('tease_end');
            $table->date('live_start');
            $table->date('live_end');
            $table->date('sustain_start');
            $table->date('sustain_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_details');
    }
}
