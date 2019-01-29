@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1><i class="fa fa-glass"></i> Campaign Preview &nbsp;&nbsp;</h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/campaign')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Campaign Preview</li>
        </ol>
</section>
<section id="content_section" class="content">            
    <div>
		<p><a title="Return" href="{{url('/campaign')}}"><i class="fa fa-chevron-circle-left "></i>
                        &nbsp; Back To List Data Campaign</a></p> 
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="fa fa-glass"></i> </strong>
            </div>
            <div class="panel-body" style="padding:20px 0px 0px 0px">
            	<div class="form-group  header-group-0">
				    <label class="control-label col-sm-2">Champaign Name
		            </label>
				    <div class="col-sm-6">
				        {{$campaign->name}}
				    </div>

				    <label class="control-label col-sm-2">Create By
		            </label>
				    <div class="input-group col-sm-2">
				        Admin
				    </div>
				</div>
				
				<div class="form-group header-group-0" >
				    <label class="control-label col-sm-2">Champaign USP
		            </label>
				    <div class="input-group col-sm-10">
				        {{$campaign->name}}
				    </div>
				</div>
				<div class="form-group header-group-0">
				    <label class="control-label col-sm-2">Testing Period
		            </label>
				    <div class="col-sm-2">
				        {{$campaign->tease_start}} ~ {{$campaign->tease_end}}
				    </div>
				    <div class="col-sm-4"></div>
				    <label class="control-label col-sm-2">Date Created
		            </label>
				    <div class="input-group col-sm-2">
				        2019-01-28
				    </div>
				</div>
				<div class="form-group header-group-0" >
				    <label class="control-label col-sm-2">Live Period
		            </label>
				    <div class="input-group col-sm-10">
				        {{$campaign->live_start}} ~ {{$campaign->live_end}}
				    </div>
				</div>
				<div class="form-group header-group-0" >
				    <label class="control-label col-sm-2">Sustain Period
		            </label>
				    <div class="input-group col-sm-10">
				        {{$campaign->sustain_start}} ~ {{$campaign->sustain_end}}
				    </div>
				</div>

				<?php 
            		$temp = explode("-", $campaign->tease_start);
            		$campaign_t_start = (int)$temp[2];

            		$temp = explode("-", $campaign->tease_end);
            		$campaign_t_end = (int)$temp[2];

            		$temp = explode("-", $campaign->live_start);
            		$campaign_l_start = (int)$temp[2];

            		$temp = explode("-", $campaign->live_end);
            		$campaign_l_end = (int)$temp[2];

            		$temp = explode("-", $campaign->sustain_start);
            		$campaign_s_start = (int)$temp[2];

            		$temp = explode("-", $campaign->sustain_end);
            		$campaign_s_end = (int)$temp[2];

            	?>

            	<table class="preview_table table table-hover table-striped table-bordered">
                    <thead>
                    	<tr>
                            <th width="auto"> &nbsp;</th>
                            <th width="auto"> &nbsp;</th>
                            <th width="auto"> &nbsp;</th>
                            @if($campaign_t_start - 1 > 0)
                            <th width="auto" colspan="{{$campaign_t_start - 1}}"></th>
                            @endif
                            <th width="auto" colspan="{{$campaign_t_end - $campaign_t_start + 1}}" style="background: #ffaa55;">Tease</th>

                            @if($campaign_l_start - $campaign_t_end - 1 > 0)
                            <th width="auto" colspan="{{$campaign_l_start - $campaign_t_end - 1}}"></th>
                            @endif

                            <th width="auto" colspan="{{$campaign_l_end - $campaign_l_start + 1}}" style="background: #eeee55;">Live</th>

                            @if($campaign_s_start - $campaign_l_end - 1> 0)
                            <th width="auto" colspan="{{$campaign_s_start - $campaign_l_end - 1}}"></th>
                            @endif

                            <th width="auto" colspan="{{$campaign_s_end - $campaign_s_start + 1}}" style="background: #60aa88;">Sustain</th>

                            @if(31 - $campaign_s_end + 1 > 0)
                            <th width="auto" colspan="{{31 - $campaign_s_end + 1}}"></th>
                           	@endif
                        </tr>
                        <tr class="active">

                            <th width="auto"></th>
                            <th width="auto"></th>
                            <th width="auto"></th>

                            @foreach($days as $d)
                            	<th width="auto" style="background: #ff5650;">{{$d}}</th>
                            @endforeach 
                            
                        </tr>

                        <tr class="active">

                            <th width="auto" class="row-header">Channels &nbsp;</th>
                            <th width="auto" class="row-header">Responsible &nbsp;</th>
                            <th width="auto" class="row-header">Core Message &nbsp;</th>
                        	<th width="auto" colspan="31" style="background: #ffffff;"></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($channels as $ch)        
                        <tr rowid="{{$ch->id}}">
                        	
                            <td>{{$ch->channel->name}}</td>
                            <td>{{$ch->chairman}}</td>
                            <td>{{$ch->description}}</td>
                            @foreach($days as $d)

                            	@if($d >= $t_start && $d <= $t_end)
                            	<th width="auto" style="background: {{$ch->channel->color}};"></th>
                            	@elseif($d >= $l_start && $d <= $l_end)
                            	<th width="auto" style="background: {{$ch->channel->color}};"></th>
                            	@elseif($d >= $s_start && $d <= $s_end)
                            	<th width="auto" style="background: {{$ch->channel->color}};"></th>
                            	@else
                            	<th width="auto"></th>
                            	@endif
                            @endforeach 
                            
                        </tr>
                    @endforeach
                    </tbody>
                    
                </table>
               

			</div>
    	</div>
	</div><!--END AUTO MARGIN-->
</section>


@endsection