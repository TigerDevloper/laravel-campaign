@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1><i class="fa fa-glass"></i> Add Campaign &nbsp;&nbsp;</h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/campaign')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Campaign</li>
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

                <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="/campaign">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body" id="parent-form-area">                    
	                    <div class="form-group header-group-0 " id="form-group-name" style="">
							<label class="control-label col-sm-2">Name
				                    <span class="text-danger" title="This field is required">*</span>
				            </label>
							<div class="col-sm-10">
						        <input type="text" title="Name" required="" placeholder="You can only enter the letter only" maxlength="70" class="form-control" name="name" id="name">
							        <div class="text-danger"></div>
		    						<p class="help-block"></p>    
		        			</div>
						</div>    
						
						<div class="form-group header-group-0 " id="form-group-message" style="">
	    					<label class="control-label col-sm-2">Message
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-10">
						        <input type="text" title="Message" required="" maxlength="255" class="form-control" name="message" id="message" value="">
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
						            <input type="text" title="Tease Start" readonly="" required="" class="form-control notfocus input_date" name="tease_start" id="tease_start" value="">
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
						            <input type="text" title="Tease End" readonly="" required="" class="form-control notfocus input_date" name="tease_end" id="tease_end" value="">
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
						            <input type="text" title="Live Start" readonly="" required="" class="form-control notfocus input_date" name="live_start" id="live_start" value="">
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
						            <input type="text" title="Live End" readonly="" required="" class="form-control notfocus input_date" name="live_end" id="live_end" value="">
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
						            <input type="text" title="Sustain Start" readonly="" required="" class="form-control notfocus input_date" name="sustain_start" id="sustain_start" value="">
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
						            <input type="text" title="Sustain End" readonly="" required="" class="form-control notfocus input_date" name="sustain_end" id="sustain_end" value="">
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
			                    <input type="submit" name="submit" value="Save" class="btn btn-success">                               
		                	</div>
		                </div>
		            </div><!-- /.box-footer-->
				</form>
			</div>
    	</div>
	</div><!--END AUTO MARGIN-->
</section>


@endsection