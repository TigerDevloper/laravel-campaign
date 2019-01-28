@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1><i class="fa fa-glass"></i> Edit Channel &nbsp;&nbsp;</h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/channel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Channel</li>
        </ol>
</section>
<section id="content_section" class="content">            
    <div>
		<p><a title="Return" href="{{url('/channel')}}"><i class="fa fa-chevron-circle-left "></i>
                        &nbsp; Back To List Data Channel</a></p>            
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="fa fa-glass"></i> </strong>
            </div>
            <div class="panel-body" style="padding:20px 0px 0px 0px">
                <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="/channel/{{ $channel->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="box-body" id="parent-form-area">                    
	                    <div class="form-group header-group-0 " id="form-group-name" style="">
							<label class="control-label col-sm-2">Name
				                    <span class="text-danger" title="This field is required">*</span>
				            </label>
							<div class="col-sm-10">
						        <input type="text" title="Name" required="" placeholder="You can only enter the letter only" maxlength="70" class="form-control" name="name" id="name" value="{{$channel->name}}">
							        <div class="text-danger"></div>
		    						<p class="help-block"></p>    
		        			</div>
						</div>    
						
						<div class="form-group header-group-0 " id="form-group-message" style="">
	    					<label class="control-label col-sm-2">Color
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-10">
						        <input type="text" title="Message" required="" maxlength="255" class="form-control" name="color" id="message" value="{{$channel->color}}">
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>
					</div><!-- /.box-body -->
		            <div class="box-footer" style="background: #F5F5F5">
		                <div class="form-group">
		                    <label class="control-label col-sm-2"></label>
		                    <div class="col-sm-10">                                              
		                    <a href="{{url('/channel')}}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>
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