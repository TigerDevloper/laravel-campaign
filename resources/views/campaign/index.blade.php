@extends('layouts.app')

@section('content')




  
    <section class="content-header">
        <h1>
        <i class="fa fa-star"></i> Campaigns &nbsp;&nbsp;

        <!--START BUTTON -->
        <!-- <a href="{{ url('campaign?') }}" id="btn_show_data" class="btn btn-sm btn-primary" title="Show Data"><i class="fa fa-table"></i> Show Data
        </a> -->
        
        <a href="{{ url('campaign/create') }}" id="btn_add_new_data" class="btn btn-sm btn-success" title="Add Data">
            <i class="fa fa-plus-circle"></i> Add Data
        </a>

        <!--ADD ACTION-->
        <!-- END BUTTON -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{ asset('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Campaigns</li>
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
                <table id="table_campaign" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr class="active">
                            <!-- <th width="3%"><input type="checkbox" id="checkall"></th> -->
                            <th width="auto">Name &nbsp;</th>
                            <th width="auto">Message &nbsp;</th>
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
                    @foreach($campaigns as $campaign)        
                        <tr rowid="{{$campaign->id}}">
                            <!-- <td><input type="checkbox" class="checkbox" name="checkbox[]" value="1"></td> -->
                            <td>{{$campaign->name}}</td>
                            <td>{{$campaign->message}}</td>
                            <td>{{$campaign->tease_start}}</td>
                            <td>{{$campaign->tease_end}}</td>
                            <td>{{$campaign->live_start}}</td>
                            <td>{{$campaign->live_end}}</td>
                            <td>{{$campaign->sustain_start}}</td>
                            <td>{{$campaign->sustain_end}}</td>
                            <td>
                                <div class="button_action" style="text-align:right">
                                    <a class="btn btn-xs btn-primary btn-detail" title="Detail Data" href="{{url('campaign/preview') . '/' . $campaign->id}}">
                                        <i class="fa fa-eye"></i>   
                                    </a>
                                    <a class="btn btn-xs btn-success btn-edit" title="Edit Data" href="{{url('campaign/').'/'.$campaign->id.('/edit')}}">
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
                <span class="pull-right"><?php echo $campaigns->links(); ?></span></div>
            </div>
        </div>
    </section>


@endsection

