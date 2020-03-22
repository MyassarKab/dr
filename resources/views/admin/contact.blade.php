@extends('layouts.admin')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
         <div class="">

           <div class="page-title">
             <div class="title_left">
               <h3>Appointment Inbox</h3>
             </div>

<style media="screen">
.mail_list_column{
  border-left: 1px solid #DBDBDB;
  border-right: 1px solid #DBDBDB;
}
.mail_view {
 border-left: none;
}
.pagination {
    display: inline-block;
    padding-left: 0;
      margin: 0;  
    border-radius: 4px;
    margin-left: 10px;
}
</style>
           </div>

           <div class="clearfix"></div>

           <div class="row">
             <div class="col-md-12">
               <div class="x_panel">
                 <div class="x_title">
                   <h2>Inbox<small>Website Mail</small> </h2>
                   {{ $contact->links() }}

                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </li>

                   </ul>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">
                   <div class="row">

                     <div class="col-sm-3 mail_list_column">

                         @foreach($contact as $Item)

                         <div class="mail_list" >


                           <div class="left" style="width:15%;">
                             <button type="button" class="btn btn-default filter-button" data-filter="appointment{{$Item->id}}" name="button"> <i class="fa fa-calendar" aria-hidden="true"></i></button>

                           </div>
                           <div class="right" style="width:80%;padding-top:10px">
                             <h3>{{$Item->name}}<small>  </small></h3>
                           </div>
                         </div>

  @endforeach()
                     </div>
                     <!-- /MAIL LIST -->


                     <!-- CONTENT MAIL -->
                     <div class="col-sm-9 mail_view">
                        @foreach($contact as $Item)
                       <div class="inbox-body  filter appointment{{$Item->id}}" style="display:none">
                         <div class="mail_heading row">
                           <div class="col-md-8">
                             <div class="btn-group">
                               <!-- <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button> -->

                               <form class="deleteform" action="\delete-contact" method="post" style="display: inline-block;">
                               {{ csrf_field() }}
                               <input type="hidden" name="id" value="{{$Item->id}}">
                               <button type="submit" class="btn btn-danger delete" name="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                             </form>
                             </div>
                           </div>
                           <div class="col-md-4 text-right">
                             <p class="date">{{ $Item->created_at}}  </p>
                           </div>
                           <div class="col-md-12">
                             <h4>{{ $Item->name}}</h4>
                           </div>
                         </div>
                         <div class="sender-info">
                           <div class="row">
                             <div class="col-md-12">
                               <strong>Form</strong>
                               <span>{{$Item->email}}</span> to
                               <strong>me</strong>
                               <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="view-mail">


                             <p>Contact Message from <span style="font-weight: 800;" >{{$Item->name}}</span>  <br/>
                              the  phone: <span style="font-weight: 800;" >{{$Item->phone}}</span>  <br/>
                               the Email :<span style="font-weight: 800;" >{{$Item->email}}</span>
                               <br>
                               the Message:
                               <span style="font-weight: 800;" >{{$Item->message}}</span>
                               .
                           </p>
                         </div>


                       </div>
                         @endforeach()
                     </div>


                     <!-- /CONTENT MAIL -->
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
        <!-- /page content -->

        @endsection
  @section('jscontent')
  <script type="text/javascript">

        $(document).ready(function(){
  $('.filter').hide();
  $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');


      if(value == "all")
      {
          //$('.filter').removeClass('hidden');
          $('.filter').hide('1000');
      }
      else
      {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
          $(".filter").not('.'+value).hide('3000');
          $('.filter').filter('.'+value).show('3000');

      }
  });

  if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
        </script>
@endsection
