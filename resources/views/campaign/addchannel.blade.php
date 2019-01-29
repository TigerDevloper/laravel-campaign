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
							        <select class="select2 form-control notfocus" name="channel_id" id="ch_name">
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
							        <select class="select2 form-control notfocus" name="subchannel_id" id="subch_name">
							        	@foreach($subchannels as $subchannel)
							        		<option value="{{$subchannel->id}}">{{$subchannel->name}}</option>
							        	@endforeach
							        </select>
							    </div>
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>
						
						<div class="form-group header-group-0 " id="form-group-chairman" style="">
	    					<label class="control-label col-sm-2">Responsible
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-10">
						        <input type="text" title="Chairman" required maxlength="255" class="form-control" name="chairman" id="chairman" value="">
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>  

						<div class="form-group header-group-0" id="form-group-description" style="">
	    					<label class="control-label col-sm-2">Description
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-10">
						        <input type="text" title="Description" required maxlength="255" class="form-control" name="description" id="description" value="">
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>

						<div class="form-group header-group-0 " id="form-group-description" style="">
							<label class="control-label col-sm-2">Stage
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
				            <div class="col-sm-10">
				            	<div class="input-group">
				            	<select name="stage" class="select2  form-control">
				            		<option value="1">Tease</option>
				            		<option value="2">Live</option>
				            		<option value="3">Sustain</option>
				            		<option value="4">All</option>
				            	</select>
				            	</div>
				            </div>
						</div>  

            		</div><!-- /.box-body -->
		            <div class="box-footer" style="background: #F5F5F5">
		                <div class="form-group">
		                    <label class="control-label col-sm-2"></label>
		                    <div class="col-sm-10">                                              
		                    <a href="/campaign/preview/{{$campaign_id}}" class="btn btn-success">Preview</a>
		                    <input type="submit" name="submit" value="Add" class="btn btn-success">                               
		                	</div>
		                </div>
		            </div><!-- /.box-footer-->
				</form>

				<div class="box-body table-responsive no-padding">
				<div style="margin: 30px;">
                <table id="table_camp_channel" class="table table-hover table-striped table-bordered" style="text-align: center;">
                    <thead>
                        <tr class="active">
                            <th>Campaign</th>
                            <th>Channel</th>
                            <th>SubChannel</th>
                            <th>Responsible</th>
                            <th>Description</th>
                            <th>Stage</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($camp_channels as $ch)        
                        <tr rowid="{{$ch->id}}">
                            <td>{{$ch->campaign->name}}</td>
                            <td>{{$ch->channel->name}}</td>
                            <td>{{$ch->subchannel->name}}</td>
                            <td>{{$ch->chairman}}</td>
                            <td>{{$ch->description}}</td>
                            @if($ch->stage == 1)
                            <td>Tease</td>
                            @elseif($ch->stage == 2)
                            <td>Live</td>
                            @elseif($ch->stage == 3)
                            <td>Sustain</td>
                            @elseif($ch->stage == 4)
                            <td>All</td>
                            @endif
                            <td>
                                <div class="button_action">
                                    
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
    	</div>


	</div><!--END AUTO MARGIN-->
</section>


@endsection

@section('js_section')
<script type="text/javascript">
   $(document).ready(function(){
   		var firstch_id = $("#ch_name").val()
   		console.log(firstch_id);
   		$.ajax({
            url: '/campaign/channel/assign/' + firstch_id,
            //datatype:'json',
            type: 'get',
            data: { id : firstch_id
            },
            datatype: 'json',
            success: function(response) {
                //console.log(response);
                //console.log(response);
                var subchannels = JSON.parse(response);
                //console.log(subchannels);
                var ids = new Array();
                var names = new Array();
                var content = "";
                for(var i = 0; i < subchannels.length; i++)
                {
                    ids[i] = subchannels[i].id;
                    names[i] = subchannels[i].name;
                    content += "<option value='" + ids[i] + "'>" + names[i] + "</option>";
                }

                $("#subch_name").html(content);
            }
            });

        $("#ch_name").change(function(){
            var ch_id = $(this).val();
            //console.log(ch_id);
            $.ajax({
                    url: '/campaign/channel/assign/' + ch_id,
                    //datatype:'json',
                    type: 'get',
                    data: { id : ch_id
                    },
                    datatype: 'json',
                    success: function(response) {
                        //console.log(response);
                        //console.log(response);
                        var subchannels = JSON.parse(response);
                        console.log(subchannels);
                        var ids = new Array();
                        var names = new Array();
                        var content = "";
                        for(var i = 0; i < subchannels.length; i++)
                        {
                            ids[i] = subchannels[i].id;
                            names[i] = subchannels[i].name;
                            content += "<option value='" + ids[i] + "'>" + names[i] + "</option>";
                        }

                        $("#subch_name").html(content);
                    }
            });
        });

    });
   
</script>
@endsection