@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1><i class="fa fa-glass"></i> Add Campaign Channels &nbsp;&nbsp;</h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/campaign')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Campaign Channels</li>
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
            	
                <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="/campaign/channel/add/{{$campaign_id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="box-body" id="parent-form-area">                    
	                    <div class="form-group header-group-0 " id="channel" style="">
	    					<label class="control-label col-sm-2">Channel Name
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-2">
						    	<div class="input-group">
							        <select class="select2 form-control notfocus" name="chan_name">
							        	@foreach($channels as $channel)
							        		<option value="{{$channel->id}}">{{$channel->name}}</option>
							        	@endforeach
							        </select>
							    </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>

						    <label class="control-label col-sm-2">SubChannel Name
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-2">
						    	<div class="input-group">
							        <select class="select2 form-control notfocus" name="channel_id">
							        	@foreach($subchannels as $channel)
							        		<option value="{{$channel->id}}">{{$channel->name}}</option>
							        	@endforeach
							        </select>
							    </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>
						
						<div class="form-group header-group-0 " id="form-group-chairman" style="">
	    					<label class="control-label col-sm-2">Chairman
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-10">
						        <input type="text" title="Chairman" required maxlength="255" class="form-control" name="chairman" id="chairman" value="">
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>  

						<div class="form-group header-group-0 " id="form-group-description" style="">
	    					<label class="control-label col-sm-2">Description
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-10">
						        <input type="text" title="Description" required maxlength="255" class="form-control" name="description" id="description" value="">
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>  

						<div class="form-group form-datepicker header-group-0 " id="form-group-tease_start" style="">
	    					<label class="control-label col-sm-2">Tease Start
	                    		<span class="text-danger" title="This field is required">*</span>
	            			</label>
						    <div class="col-sm-2">
						        <div class="input-group">
						            <span class="input-group-addon open-datetimepicker"><a><i class="fa fa-calendar "></i></a></span>
						            <input type="text" title="Tease Start" readonly="" required class="form-control notfocus input_date" name="tease_start" id="tease_start" value="">
						        </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						    <label class="control-label col-sm-2">Tease End
			                    <span class="text-danger" title="This field is required">*</span>
			            	</label>
						    <div class="col-sm-2">
						        <div class="input-group">
						            <span class="input-group-addon open-datetimepicker"><a><i class="fa fa-calendar "></i></a></span>
						            <input type="text" title="Tease End" readonly="" required class="form-control notfocus input_date" name="tease_end" id="tease_end" value="">
						        </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>
	    
	    				<div class="form-group form-datepicker header-group-0 " id="form-group-live_start" style="">
						    <label class="control-label col-sm-2">Live Start
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-2">
						        <div class="input-group">
						            <span class="input-group-addon open-datetimepicker"><a><i class="fa fa-calendar "></i></a></span>
						            <input type="text" title="Live Start" readonly="" required class="form-control notfocus input_date" name="live_start" id="live_start" value="">
						        </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						    <label class="control-label col-sm-2">Live End
			                    <span class="text-danger" title="This field is required">*</span>
			           	 	</label>
						    <div class="col-sm-2">
						        <div class="input-group">
						            <span class="input-group-addon open-datetimepicker"><a><i class="fa fa-calendar "></i></a></span>
						            <input type="text" title="Live End" readonly="" required class="form-control notfocus input_date" name="live_end" id="live_end" value="">
						        </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>
	    
	    				<div class="form-group form-datepicker header-group-0 " id="form-group-sustain_start" style="">
	    					<label class="control-label col-sm-2">Sustain Start
			                    <span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-2">
						        <div class="input-group">
						            <span class="input-group-addon open-datetimepicker"><a><i class="fa fa-calendar "></i></a></span>
						            <input type="text" title="Sustain Start" readonly="" required class="form-control notfocus input_date" name="sustain_start" id="sustain_start" value="">
						        </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						    <label class="control-label col-sm-2">Sustain End
			                    <span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-2">
						        <div class="input-group">
						            <span class="input-group-addon open-datetimepicker"><a><i class="fa fa-calendar "></i></a></span>
						            <input type="text" title="Sustain End" readonly="" required class="form-control notfocus input_date" name="sustain_end" id="sustain_end" value="">
						        </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>
            		</div><!-- /.box-body -->
		            <div class="box-footer" style="background: #F5F5F5">
		                <div class="form-group">
		                    <label class="control-label col-sm-2"></label>
		                    <div class="col-sm-10">                                              
		                    <input type="button" value="Preview" class="btn btn-success">
		                    <input type="submit" name="submit" value="Add" class="btn btn-success">                               
		                	</div>
		                </div>
		            </div><!-- /.box-footer-->
				</form>

				<div class="box-body table-responsive no-padding">
                <table id="table_camp_channel" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr class="active">
                            <th width="auto">Name &nbsp;</th>
                            <th width="auto">Chairman &nbsp;</th>
                            <th width="auto">Description &nbsp;</th>
                            <th width="auto">Tease Start &nbsp;</th>
                            <th width="auto">Tease End &nbsp;</th>
                            <th width="auto">Live Start &nbsp;</th>
                            <th width="auto">Live End &nbsp;</th>
                            <th width="auto">Sustain Start &nbsp;</th>
                            <th width="auto">Sustain End &nbsp;</th>
                            <th width="auto" style="text-align:right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($camp_channels as $ch)        
                        <tr rowid="{{$ch->id}}">
                            <td>{{$ch->channel->name}}</td>
                            <td>{{$ch->chairman}}</td>
                            <td>{{$ch->description}}</td>
                            <td>{{$ch->tease_start}}</td>
                            <td>{{$ch->tease_end}}</td>
                            <td>{{$ch->live_start}}</td>
                            <td>{{$ch->live_end}}</td>
                            <td>{{$ch->sustain_start}}</td>
                            <td>{{$ch->sustain_end}}</td>
                            <td>
                                <div class="button_action" style="text-align:right">
                                    
                                    <a class="btn btn-xs btn-success btn-edit" title="Edit Data" href="{{url('campaign/channel/edit').'/'. $campaign_id . '/' . $ch->id}}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-xs btn-warning btn-delete" title="Delete" href="javascript:;" onclick="">
                                        <i class="fa fa-trash"></i>
                                    </a>
    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
			</div>
    	</div>


	</div><!--END AUTO MARGIN-->
</section>


@endsection