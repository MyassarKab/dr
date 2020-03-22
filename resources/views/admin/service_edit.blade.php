@extends('layouts.admin')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Service</h3>
              </div>
              <style media="screen">

                #exTab3 .nav-pills > li > a {
                border-radius: 4px 4px 0 0 ;
                }

                #exTab3 .tab-content {
                color : white;
                background-color: #428bca;
                padding : 5px 15px;
                }

                label.cabinet{
                    padding: 10px;
                    background:#26b954;
                    display: table;
                    color: #fff;
                    width: 125px;
                    margin-left: 9px;
                     }



                input[type="file"] {
                    display: none;
                }
              </style>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add All Informations</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                    <br />
                    <form id="demo-form2" action="\update-service\{{$service->id}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <div class="" id="exTab3">
                        <ul  class="nav nav-pills">
                        			<li class="active">
                                <a  href="#1b" data-toggle="tab">English</a>
                        			</li>
                        			<li><a href="#2b" data-toggle="tab">Arabic</a>
                        			</li>
                        		</ul>

                      </div>
                      <div class="tab-content clearfix">
                        <!-- english -->
                        <div class="tab-pane active" id="1b">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name EN<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="name" value="{{$service->name_en}}" name="name_en" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Slug EN<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="name" value="{{$service->slug_en}}" name="slug_en" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Details EN<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="detalis_en" rows="5" cols="80">
                              {!!$service->detalis_en!!}
                            </textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description EN<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="description_en" rows="5" cols="80">
                                {!!$service->description_en!!}
                              </textarea>
                            </div>
                          </div>
                        </div>
                        <!-- end -->
                        <!-- arabic -->
                        <div class="tab-pane" id="2b">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name AR<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="name" value="{{$service->name_ar}}" name="name_ar" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Slug AR<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="name" value="{{$service->slug_ar}}" name="slug_ar" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Details AR<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="detalis_ar" rows="5" cols="80">
                              {!!$service->detalis_ar!!}
                            </textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description AR<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="description_ar" rows="5" cols="80">
                                {!!$service->description_ar!!}
                              </textarea>
                            </div>
                          </div>
                         </div>
                           <!-- end -->
                      </div>


                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Clinic<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="form-control" required name="clinic_id">
                            @foreach($clinics as $item)
                             <option value="{{$item->id}}"  @if($service->clinic_id==$item->id) selected @endif >{{$item->name_en}}</option>
                            @endforeach
                           </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="control-label col-md-3 col-sm-3 col-xs-12 ">
                          <span  style="font-weight: bold;font-size: 1.2em;">Servic Image <span class="required">*</span></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12  cabinet"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload Image
                          <input type="file" name="image"  id="File"     value=""  >
                        </label>

                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="\service" class="btn btn-primary" type="button">Cancel</a>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>







        <!-- /page content -->

        @endsection
