@extends('layouts.admin')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Location Informations</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <!-- <a href="\new-about" class="btn btn-primary" type="button" style="float: right;color:#fff"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Clinic</a> -->

                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Location Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1> Location Information.</h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->

                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row" style="margin-top:20px;">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th style="width: 90%">Text</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>

                                <td>Address EN</td>

                                <td>{{$info->address_en}}</td>

                              </tr>
                              <tr>

                                <td>Address AR</td>

                                  <td>{{$info->address_ar}}</td>

                              </tr>
                              <tr>

                                <td>Email</td>

                                <td>{{$info->email}}</td>

                              </tr>
                              <tr>

                                <td>Latitude</td>

                                <td>{{$info->latitude}}</td>

                              </tr>
                              <tr>

                                <td>Longitude</td>

                                <td>{{$info->longitude}}</td>

                              </tr>



                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">



                        </div>

                      </div>
                      <!-- /.row -->
                      <style media="screen">
                       form:after{
                          display: inline;
                        }
                      </style>
                      <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-xs-6">
                    <p class="lead">Social Media</p>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          @foreach($social as $item)
                          <tr>
                            <th>{{$item->name}}</th>

                            <th> <img src="{{asset( $item->image)}}"  class="img-responsive" width="50" height="50" ></th>
                            <th>
                              <a  href="\edit-social-media\{{$item->id}}" class="btn btn-info "><span class="glyphicon glyphicon-pencil"></span> Edit</a>

                           <form class="deleteform" action="\delete-social-media" method="post" style="display: inline-block;">
                           {{ csrf_field() }}
                           <input type="hidden" name="id" value="{{$item->id}}">
                           <button type="submit" class="btn btn-danger delete" name="button"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                         </form>
                            </th>
                          </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <a href="\new-social-media" class="btn btn-primary pull-left" style="margin-right: 5px;">New Social Media</a>

                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-6">
                    <p class="lead">Phones</p>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          @foreach($phone as $item)
                          <tr>
                            <th style="width:50%">Phone:</th>
                            <td>{{$item->phone}}</td>
                          </tr>
                          <tr>
                            <th>Icon</th>
                            <td>{!!$item->icon!!}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">

                          <a href="\edit-info\{{$info->id}}" class="btn btn-info pull-right" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</a>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection
