@extends('layouts.admin')
@section('csscontent')

<!-- <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet"> -->
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
        <!-- page content -->
        <!-- page content -->
       <div class="right_col" role="main">
         <div class="">
           <div class="page-title">
             <div class="title_left">
               <h3>Tags</h3>
             </div>
<style media="screen">
 form:after{
    display: inline;
  }
</style>

           </div>
           <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                      <div class="input-group-btn">



                      </div>
                    </div>
                  </div>
                </div>
           <div class="clearfix"></div>

           <div class="row">


             <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                 <div class="x_title">
                   <h2>Tags Table</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </li>

                   </ul>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">
                   <!-- <p class="text-muted font-13 m-b-30">
                     Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                   </p> -->

                   <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     <thead>
                       <tr>
                         <th>Name AR</th>
                         <th>Name EN</th>

                         <th>Options</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach($tags as $item)
                       <tr>
                         <td>{{$item->name_en}} </td>
                         <td>{{$item->name_ar}} </td>

                         <td>
                      <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal{{$item->id}}"><span class="glyphicon glyphicon-pencil"></span>Edit</button>


                        <form class="deleteform" action="\delete-tag" method="post" style="display: inline-block;">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <button type="submit" class="btn btn-danger delete" name="button"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                      </form>
                         </td>


                         <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                           <div class="modal-dialog">

                             <!-- Modal content-->
                             <div class="modal-content">
                               <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">Edit</h4>
                               </div>
                               <div class="modal-body">
                                 <div class="col-md-12">
                                    <form class="form-horizontal form-label-left" action="\update-tag\{{$item->id}}" method="post">
                                      {{ csrf_field() }}
                                      <div class="row">
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tag Name EN<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" name="name_en" value="{{$item->name_en}}" required="required" class="form-control col-md-7 col-xs-12">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tag Name EN<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" name="name_ar" value="{{$item->name_ar}}" required="required" class="form-control col-md-7 col-xs-12">
                                          </div>
                                        </div>
                                      </div>


                                        <div class="form-group">
                                      <input type="submit" name="submit" value="submit" class="form-control col-md-7 col-xs-12">
                                    </div>
                                    </form>
                                 </div>


                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                               </div>
                             </div>

                           </div>
                         </div>
                       </tr>
                       @endforeach
                     </tbody>
                   </table>



                 </div>
               </div>
             </div>

             <div class="col-md-12">
                <form class="form-horizontal form-label-left" action="\add-tag" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tag Name EN<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="name" name="name_en" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tag Name EN<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="name" name="name_ar" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>

      <div class="form-group  ">
    <input type="submit" name="submit" value="submit" class="form-control col-md-7 col-xs-12">
  </div>
                </form>
             </div>
           </div>
         </div>



       </div>
       <!-- /page content -->







        <!-- /page content -->

        @endsection

@section('jscontent')

        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('js/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/responsive.bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.scroller.min.js') }}"></script>
        <script src="{{ asset('js/jszip.min.js') }}"></script>
        <script src="{{ asset('js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('js/vfs_fonts.min.js') }}"></script>

            @endsection
