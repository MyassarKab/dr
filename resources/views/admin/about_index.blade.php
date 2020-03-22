@extends('layouts.admin')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>About Us</h3>
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
                    <h2>About Us Information</h2>
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
                          <h1> About Us.</h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-6 invoice-col">
                          Title EN :
                          {{$about->title_en}}
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col">
                            Title AR :
                              {{$about->title_ar}}
                        </div>

                        <!-- /.col -->
                      </div>
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

                                <td>Details EN</td>

                                <td>{!!$about->details_en!!}</td>

                              </tr>
                              <tr>

                                <td>Details AR</td>

                                <td>{!!$about->details_ar!!}</td>

                              </tr>
                              <tr>

                                <td>Mission EN</td>

                                <td>{!!$about->mission_en!!}</td>

                              </tr>
                              <tr>

                                  <td>Mission AR</td>

                                  <td>{!!$about->mission_ar!!}</td>

                              </tr>

                              <tr>

                                <td>Vision  EN</td>

                                <td>{!!$about->vision_en!!}</td>

                              </tr>
                              <tr>

                                  <td>Vision AR</td>

                                  <td>{!!$about->vision_ar!!}</td>

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

                          <img src="{{asset($about->image)}} " alt="Visa">


                        </div>

                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">

                          <a href="\edit-about\{{$about->id}}" class="btn btn-info pull-right" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</a>
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
