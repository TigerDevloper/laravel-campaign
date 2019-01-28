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
            	<table id="table_campaign" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr class="active">

                            <th width="auto">Channels &nbsp;</th>
                            <th width="auto">Responsible &nbsp;</th>
                            <th width="auto">Core Message &nbsp;</th>
                            <th width="auto">Tease Start &nbsp;</th>
                            <th width="auto">Tease End &nbsp;</th>
                            <th width="auto">Live Start &nbsp;</th>
                            <th width="auto">Live End &nbsp;</th>
                            <th width="auto">Sustain Start &nbsp;</th>
                            <th width="auto">Sustain End &nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($channels as $ch)        
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
                            
                        </tr>
                    @endforeach
                    </tbody>
                    
                </table>
               

			</div>
    	</div>
	</div><!--END AUTO MARGIN-->
</section>


@endsection