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
               <h3>Testimonials</h3>
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


                          <a href="\new-testimonial" class="btn btn-primary" type="button" style="float: right;color:#fff"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Testimonial</a>

                      </div>
                    </div>
                  </div>
                </div>
           <div class="clearfix"></div>

           <div class="row">


             <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                 <div class="x_title">
                   <h2>Testimonials Table</h2>
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
                         <th>Job EN</th>
                         <th>Job AR</th>
                         <th>Options</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach($testimonial as $item)
                       <tr>
                         <td>{{$item->name_en}} </td>
                         <td>{{$item->name_ar}} </td>
                         <td>{{$item->job_en}} </td>
                         <td>{{$item->job_ar}} </td>

                         <td>
                           <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal{{$item->id}}">Detalis</button>
                           <a  href="\edit-testimonial\{{$item->id}}" class="btn btn-info "><span class="glyphicon glyphicon-pencil"></span> Edit</a>

                        <form class="deleteform" action="\delete-testimonial" method="post" style="display: inline-block;">
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
                                 <h4 class="modal-title">Detalis</h4>
                               </div>
                               <div class="modal-body">
                                 <div class="col-xs-12">
                                   <img src="{{asset($item->image)}}" alt="{{$item->image}}" class="img-responsive  ">
                                 </div>

                                  <div class="clearfix"></div>
                                  <div class="" style="margin-top: 25px;">
                                    {!! $item->detalis_en !!}
                                    <hr>
                                    {!! $item->detalis_ar !!}
                                  </div>

                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               </div>
                             </div>

                           </div>
                         </div>
                       </tr>
                       @endforeach
                     </tbody>
                   </table>

                   <!-- Modal -->

                 </div>
               </div>
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
