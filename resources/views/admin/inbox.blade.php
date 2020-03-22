@extends('layouts.admin')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
         <div class="">

           <div class="page-title">
             <div class="title_left">
               <h3>Inbox</h3>
             </div>


           </div>

           <div class="clearfix"></div>

           <div class="row">
             <div class="col-md-12">
               <div class="x_panel">
                 <div class="x_title">
                   <h2>Inbox<small>Website Mail</small></h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </li>

                   </ul>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">
                   <div class="row">
                     <div class="col-sm-3 mail_list_column">
                        <a href="#">
                         <div class="mail_list">
                           <div class="left">
                             <i class="fa fa-calendar" aria-hidden="true"></i>
                           </div>
                           <div class="right">
                             <h3>Appotmant<small>3.00 PM</small></h3>
                           </div>
                         </div>
                       </a>
                       <a href="#">
                         <div class="mail_list">
                           <div class="left">
                             <i class="fa fa-envelope-o" aria-hidden="true"></i>
                           </div>
                           <div class="right">
                             <h3>Contact us <small>4.09 PM</small></h3>
                           </div>
                         </div>
                       </a>

                     </div>
                     <!-- /MAIL LIST -->

                     <!-- CONTENT MAIL -->
                     <div class="col-sm-9 mail_view">
                       <div class="inbox-body">
                         <div class="mail_heading row">
                           <div class="col-md-8">
                             <div class="btn-group">
                               <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                             </div>
                           </div>
                           <div class="col-md-4 text-right">
                             <p class="date"> 8:02 PM 12 FEB 2014</p>
                           </div>
                           <div class="col-md-12">
                             <h4> Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum.</h4>
                           </div>
                         </div>
                         <div class="sender-info">
                           <div class="row">
                             <div class="col-md-12">
                               <strong>Jon Doe</strong>
                               <span>(jon.doe@gmail.com)</span> to
                               <strong>me</strong>
                               <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                             </div>
                           </div>
                         </div>
                         <div class="view-mail">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                           <p>Riusmod tempor incididunt ut labor erem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                             nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                             mollit anim id est laborum.</p>
                           <p>Modesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                             velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>


                       </div>

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
