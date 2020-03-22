@extends('layouts.admin')

@section('content')
        <!-- page content -->

          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3> Media Gallery</h3>
                </div>

                <div class="title_right">
                         <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                           <div class="input-group-btn">


                               <a href="\new-gallery" class="btn btn-primary" type="button" style="float: right;color:#fff"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Image</a>

                           </div>
                         </div>
                       </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Media Gallery </small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                   
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="row">

                        <p>Portfolio</p>
                        @foreach($gallery as $item)
                        <div class="col-md-55">
                          <div class="thumbnail">
                            <div class="image view view-first">
                              <img style="width: 100%; display: block;" src="{{asset($item->image)}}" alt="image" />
                              <div class="mask">
                                <p>{{$item->clinic->name_en}}</p>
                                <div class="tools tools-bottom">
                                  <!-- <a href="#"><i class="fa fa-link"></i></a> -->
                                  <a href="\edit-gallery\{{$item->id}}"><i class="fa fa-pencil"></i></a>
                                  <a href="\delete-gallery\{{$item->id}}"><i class="fa fa-times"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="caption">
                              <p>This image belong to {{$item->clinic->name_en}} clinc</p>
                            </div>
                          </div>
                        </div>
                        @endforeach

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->



        <!-- /page content -->

        @endsection
