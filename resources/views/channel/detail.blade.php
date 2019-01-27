@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1><i class="fa fa-glass"></i> Detail Channel &nbsp;&nbsp;</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('channel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Channel</li>
    </ol>
</section>

<section id="content_section" class="content">
    <div>
		<p><a title="Return" href="{{url('channel')}}"><i class="fa fa-chevron-circle-left "></i>
                        &nbsp; Back To List Data Channel</a></p>            
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="fa fa-glass"></i> 1</strong>
            </div>
            <div class="panel-body" style="padding:20px 0px 0px 0px">
            		<div class="box-body" id="parent-form-area">
                        <div class="table-responsive">
    						<table id="table-detail" class="table table-striped">
                                <tbody>
                                	<tr>
                    					<td>Name</td>
                    					<td>{{$channel->name}}</td>
                					</tr>
									<tr>
						                <td>Color</td>
						                <td>{{$channel->color}}</td>
						            </tr>
					           	</tbody>
			           		</table>
						</div>                                            
					</div><!-- /.box-body -->

                    <div class="box-footer" style="background: #F5F5F5">
                        <div class="form-group">
                            <label class="control-label col-sm-2"></label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                    </div><!-- /.box-footer-->
            </div>
        </div>
    </div><!--END AUTO MARGIN-->
</section>
@endsection