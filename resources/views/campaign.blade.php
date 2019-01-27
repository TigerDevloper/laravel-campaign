@extends('layouts.app')

@section('content')




  
    <section class="content-header">
        <h1>
        <i class="fa fa-star"></i> Campaigns &nbsp;&nbsp;

        <!--START BUTTON -->
        <a href="{{ url('admin/exams?') }}" id="btn_show_data" class="btn btn-sm btn-primary" title="Show Data">
                <i class="fa fa-table"></i> Show Data
            </a>
        
        <a href="{{ url('admin/exams/add?return_url=http%3A%2F%2Flocalhost%3A8000%2Fadmin%2Fexams&amp;parent_id=&amp;parent_field=') }}" id="btn_add_new_data" class="btn btn-sm btn-success" title="Add Data">
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


    <!-- Main content -->
    <section id="content_section" class="content">

      @if (session('status'))
        <div class="alert alert-success" role="alert>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-info"></i> Wow, good job...</h4>
              {{ session('status') }}
          </div>
      @endif
    <!-- Your Page Content Here -->


        <div class="box">
            <div class="box-header">

                <div class="pull-left">
                    <div class="selected-action" style="display:inline-block;position:relative;">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-check-square-o"></i> Bulk Actions
                            <span class="fa fa-caret-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)" data-name="delete" title="Delete Selected"><i class="fa fa-trash"></i> Delete Selected</a></li>
                         </ul><!--end-dropdown-menu-->
                    </div><!--end-selected-action-->
                </div><!--end-pull-left-->

                <div class="box-tools pull-right" style="position: relative;margin-top: -5px;margin-right: -10px">
                    <a style="margin-top:-23px" href="javascript:void(0)" id="btn_advanced_filter" data-url-parameter="" title="Advanced Sort &amp; Filter" class="btn btn-sm btn-default ">
                        <i class="fa fa-filter"></i> Sort &amp; Filter
                    </a>
                    
                    <form method="get" style="display:inline-block;width: 260px;" action="{{ url('admin/exams') }}">
                        <div class="input-group">
                            <input type="text" name="q" value="" class="form-control input-sm pull-right" placeholder="Search">
                            
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>


                    <form method="get" id="form-limit-paging" style="display:inline-block" action="{{ asset('admin/exams') }}">
                        
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

                </div>

                <br style="clear:both">

            </div>

            <div class="box-body table-responsive no-padding">
                <form id="form-table" method="post" action="{{ url('admin/exams/action-selected') }}">
                    <input type="hidden" name="button_name" value="">
                    <input type="hidden" name="_token" value="vRgy0GTSrpBrdW2Y8VCqNngUhvoKR9tpvoBvXa5I">
                    <table id="table_dashboard" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr class="active">
                                <th width="3%">
                                    <input type="checkbox" id="checkall"></th>
                                <th width="auto"><a href="javascript:;" title="Click to sort ascending">Title &nbsp; <i class="fa fa-sort"></i></a></th>
                                <th width="auto"><a href="javascript:;" title="Click to sort ascending"">Description &nbsp; <i class="fa fa-sort"></i></a></th>
                                <th width="auto"><a href="javascript:;" title="Click to sort ascending"">Weight &nbsp; <i class="fa fa-sort"></i></a></th>
                                <th width="auto"><a href="javascript:;" title="Click to sort ascending"">Test Date &nbsp; <i class="fa fa-sort"></i></a></th>
                                <th width="auto"><a href="javascript:;" title="Click to sort ascending"">Test Duration &nbsp; <i class="fa fa-sort"></i></a></th>
                                <th width="auto" style="text-align:right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="checkbox" name="checkbox[]" value="1"></td>
                                <td>new test</td>
                                <td>My</td>
                                <td>df</td>
                                <td>2019-01-22</td>
                                <td>2</td>
                                <td>
                                    <div class="button_action" style="text-align:right">
                                        <a class="btn btn-xs btn-primary btn-detail" title="Detail Data" href="{{ url('admin/exams/detail/1?return_url=http%3A%2F%2Flocalhost%3A8000%2Fadmin%2Fexams') }}"><i class="fa fa-eye"></i></a>

                                        <a class="btn btn-xs btn-success btn-edit" title="Edit Data" href="{{ url('admin/exams/edit/1?return_url=http%3A%2F%2Flocalhost%3A8000%2Fadmin%2Fexams&amp;parent_id=&amp;parent_field=') }}"><i class="fa fa-pencil"></i></a>
                    
                                        <a class="btn btn-xs btn-warning btn-delete" title="Delete" href="javascript:;" onclick="swal({   
                                            title: &quot;Are you sure ?&quot;,   
                                            text: &quot;You will not be able to recover this record data!&quot;,   
                                            type: &quot;warning&quot;,   
                                            showCancelButton: true,   
                                            confirmButtonColor: &quot;#ff0000&quot;,   
                                            confirmButtonText: &quot;Yes!&quot;,  
                                            cancelButtonText: &quot;No&quot;,  
                                            closeOnConfirm: false }, 
                                            function(){  location.href=&quot;'admin/exams/delete/1&quot; });"><i class="fa fa-trash"></i></a>
                    
                                    </div>
                                </td>
                                                    

                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>&nbsp;</th>
                                <th width="auto">Title</th>
                                <th width="auto">Description</th>
                                <th width="auto">Weight</th>
                                <th width="auto">Test Date</th>
                                <th width="auto">Test Duration</th>
                                 <th> -</th>
                            </tr>
                        </tfoot>
                    </table>

                </form><!--END FORM TABLE-->

                <div class="col-md-8"></div>
                <div class="col-md-4" style="margin:30px 0;">
                    <span class="pull-right">Total rows
                        : 1 to 1 of 1</span>
                </div>

            </div>
        </div>

    
    </section><!-- /.content -->


@endsection
