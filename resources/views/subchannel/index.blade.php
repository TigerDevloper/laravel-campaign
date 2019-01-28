@extends('layouts.app')

@section('content')
	<section class="content-header">
        <h1>
        <i class="fa fa-star"></i> SubChannels &nbsp;&nbsp;

        <!--START BUTTON -->
        <!-- <a href="{{ url('campaign?') }}" id="btn_show_data" class="btn btn-sm btn-primary" title="Show Data"><i class="fa fa-table"></i> Show Data
        </a> -->
        
        <a href="{{ url('subchannel/create') }}" id="btn_add_new_data" class="btn btn-sm btn-success" title="Add Data">
            <i class="fa fa-plus-circle"></i> Add Data
        </a>

        <!--ADD ACTION-->
        <!-- END BUTTON -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{ url('subchannel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">SubChannels</li>
        </ol>
    </section>

        <section id="content_section" class="content">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box-header">
            <!-- <div class="pull-left">
                <div class="selected-action" style="display:inline-block;position:relative;">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-check-square-o"></i> Bulk Actions
                            <span class="fa fa-caret-down"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)" data-name="delete" title="Delete Selected"><i class="fa fa-trash"></i> Delete Selected</a></li>
                    </ul>
                </div>
            </div>
                        
            <div class="box-tools pull-right" style="position: relative;margin-top: -5px;margin-right: -10px">
                <a style="margin-top:-23px" href="javascript:void(0)" id="btn_advanced_filter" data-url-parameter="" title="Advanced Sort &amp; Filter" class="btn btn-sm btn-default ">
                    <i class="fa fa-filter"></i> Sort &amp; Filter
                </a>
                <form method="get" style="display:inline-block;width: 260px;" action="">
                    <div class="input-group">
                        <input type="text" name="q" value="" class="form-control input-sm pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <form method="get" id="form-limit-paging" style="display:inline-block" action="">
                    <div class="input-group">
                        <select onchange="$('#form-limit-paging').submit()" name="limit" style="width: 56px;" class="form-control input-sm">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option selected="" value="20">20</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                        </select>
                    </div>
                </form>
            </div> -->

            <br style="clear:both">
        </div>
        <div class="box-body table-responsive no-padding">
        <table id="table_subchannel" class="table table-hover table-striped table-bordered">
            <thead>
                <tr class="active">
                    <!-- <th width="3%"><input type="checkbox" id="checkall"></th> -->
                    <th width="auto">Name &nbsp;</th>
                    <th width="auto">Color &nbsp;</th>
                    <th width="auto">Channel Name &nbsp;</th>
                    <th width="auto">Action &nbsp;</th>
              	</tr>
            </thead>
                    <tbody>
                    @foreach($subchannels as $subchannel)        
                        <tr rowid="{{$subchannel->id}}">
                            <!-- <td><input type="checkbox" class="checkbox" name="checkbox[]" value="1"></td> -->
                            <td>{{$subchannel->name}}</td>
                            <td>{{$subchannel->color}}</td>
                            <td>{{$subchannel->channel->name}}</td>
                       		<td>
                                <div class="button_action" style="text-align:right">
                                    <a class="btn btn-xs btn-primary btn-detail" title="Detail Data" href="{{url('subchannel/') . '/' . $subchannel->id}}">
                                        <i class="fa fa-eye"></i>   
                                    </a>
                                    <a class="btn btn-xs btn-success btn-edit" title="Edit Data" href="{{url('subchannel/').'/'.$subchannel->id.('/edit')}}">
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
            <div class="col-md-8"></div>
            <div class="col-md-4" style="margin:30px 0;">
                <span class="pull-right"><?php echo $subchannels->links(); ?></span></div>
            </div>
        </div>
    </section>
@endsection