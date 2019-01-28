@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1><i class="fa fa-glass"></i> Add Channel &nbsp;&nbsp;</h1>
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
                <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="/channel">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body" id="parent-form-area">                    
	                    <div class="form-group header-group-0 " id="form-group-name" style="">
							<label class="control-label col-sm-2">Name
				                    <span class="text-danger" title="This field is required">*</span>
				            </label>
							<div class="col-sm-10">
						        <input type="text" title="Name" required="" maxlength="70" class="form-control" name="name" id="name">
							        <div class="text-danger"></div>
		    						<p class="help-block"></p>    
		        			</div>
						</div>    
						
						<div class="form-group header-group-0 " id="form-group-message" style="">
	    					<label class="control-label col-sm-2">Color
	                    		<span class="text-danger" title="This field is required">*</span>
				            </label>
						    <div class="col-sm-10">
						        <input type="text" title="Message" required="" maxlength="255" class="form-control" name="color" id="message" value="">
						        <div class="text-danger"></div>
						        <p class="help-block"></p>
						    </div>
						</div>

						<div class="box-footer" style="background: #F5F5F5">
		                <div class="form-group">
		                    <label class="control-label col-sm-2"></label>
		                    <div class="col-sm-10">                                              
		                    <input type="submit" name="submit" value="Save &amp; Add More" class="btn btn-success">
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