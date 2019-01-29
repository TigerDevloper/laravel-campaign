@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    <i class="fa fa-star"></i> Users &nbsp;&nbsp;

    <!--START BUTTON -->
    <!-- <a href="{{ url('campaign?') }}" id="btn_show_data" class="btn btn-sm btn-primary" title="Show Data"><i class="fa fa-table"></i> Show Data
    </a> -->
    
<!--     <a href="{{ url('user/create') }}" id="btn_add_new_data" class="btn btn-sm btn-success" title="Add Data">
        <i class="fa fa-plus-circle"></i> Add User
    </a>
 -->
    <!--ADD ACTION-->
    <!-- END BUTTON -->
    </h1>

    <ol class="breadcrumb">
        <li><a href="{{ url('user') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
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
        <div style="margin: 30px;">
                <table id="table_user" class="table table-hover table-striped table-bordered" style="text-align: center;">
                    <thead>
                        <tr class="active">
                            <!-- <th width="3%"><input type="checkbox" id="checkall"></th> -->
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                      	</tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)        
                        <tr rowid="{{$user->id}}">
                            <!-- <td><input type="checkbox" class="checkbox" name="checkbox[]" value="1"></td> -->
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                       		<td>
                                <div class="button_action">
                                    <a class="btn btn-xs btn-primary btn-detail" title="Detail Data" href="{{url('user/') . '/' . $user->id}}">
                                        <i class="fa fa-eye"></i>   
                                    </a>
                                    <a class="btn btn-xs btn-success btn-edit" title="Edit Data" href="{{url('user/').'/'.$user->id.('/edit')}}">
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
            <div class="col-md-8"></div>
            <div class="col-md-4" style="margin:30px 0;">
                <span class="pull-right"><?php echo $users->links(); ?></span></div>
            </div>
        </div>
    </section>
@endsection

@section('js_section')
<script type="text/javascript">
    $(document).ready(function(){
         $("#table_user .btn-delete").click(function(){
            if(confirm("Are you sure to delete the item?"))
            {
                var id = $(this).parent().parent().parent().attr('rowid');
                console.log(id);
                $.ajax({
                    url: '/user/' + id,
                    type: 'POST',
                    data: { _method : 'DELETE'
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    });
   
</script>
@endsection