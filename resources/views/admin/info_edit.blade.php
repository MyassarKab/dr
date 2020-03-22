@extends('layouts.admin')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Location Info</h3>
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

                .map-style
                    {
                      height: 0;
                      overflow: hidden;
                      padding-bottom: 22.25%;
                      padding-top: 50px;
                      position: relative;
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
                    <form id="demo-form2" action="\update-info\{{$info->id}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Address">Address EN<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Address" value="{{$info->address_en}}" name="address_en" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                        </div>
                        <!-- end -->
                        <!-- arabic -->
                        <div class="tab-pane" id="2b">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Address">Address AR<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Address" value="{{$info->address_ar}}" name="address_ar" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                         </div>
                           <!-- end -->
                      </div>

                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" value="{{$info->email}}" name="email" required="required" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      @foreach($phones as $item)
                      <input type="hidden" name="phone_id[]" value="{{$item->id}}">
                      <div class="form-group">
                        <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">phone<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="phone" value="{{$item->phone}}" name="phone[]" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>
                      <div class="form-group">
                        <label for="icon" class="control-label col-md-3 col-sm-3 col-xs-12">icon<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="icon" value="{{$item->icon}}" name="icon[]" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>
                      @endforeach
                      <div class="" id="morePhones">

                      </div>
                      <div class="form-group">
            <!-- <a href="map.html">edite MAP</a> -->
              <div class="col-md-6">
                <div class="form-group">
                <label for="">Latitude</label>
                <input type="text" id="latitude" value="{{$info->latitude}}" placeholder="latitude" class="form-control" name="latitude">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Longitude</label>
                <input type="text" id="longitude" value="{{$info->longitude}}" placeholder="longitude" class="form-control" name="longitude">
              </div>
            </div>
            <div class="col-md-12">
                 <div id="map" class="map-style" ></div>
            </div>



          </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="\info" class="btn btn-primary" type="button">Cancel</a>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                      <a class="btn btn-info" href="#"  id="add_phone"  ><i class="fa fa-plus" aria-hidden="true"></i> Add New Phone</a>
                  </div>
                </div>
              </div>
            </div>







        <!-- /page content -->

        @endsection

        @section('jscontent')

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDZKk715C3VacWdM2_IHah8z5CVe0qT7AI"></script>
        <script type="text/javascript">
        function initialize() {
        var $latitude = document.getElementById('latitude');
        var $longitude = document.getElementById('longitude');
        var latitude = 24.46715066473909;
        var longitude = 54.36309814453125;
        var zoom = 7;

        var LatLng = new google.maps.LatLng(latitude, longitude);

        var mapOptions = {
          zoom: zoom,
          center: LatLng,
          panControl: false,
          zoomControl: false,
          scaleControl: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById('map'),mapOptions);

        var marker = new google.maps.Marker({
          position: LatLng,
          map: map,
          title: 'Drag Me!',
          draggable: true
        });

        google.maps.event.addListener(marker, 'dragend', function(marker){
          var latLng = marker.latLng;
          $latitude.value = latLng.lat();
          $longitude.value = latLng.lng();
        });

      }
      initialize();
        </script>

        <script type="text/javascript">
        $(document).ready(function() {

            var wrapper         = $("#morePhones"); //Fields wrapper
            var add_button      = $("#add_phone"); //Add button ID


            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                var html='<div  style="position:relative"><div class="form-group">';
                   html+='<label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">phone<span class="required">*</span></label>';
                   html+='<div class="col-md-6 col-sm-6 col-xs-12">';
                   html+='<input type="text" id="phone" name="phone[]" required="required" class="form-control col-md-7 col-xs-12"></div> </div>';
                   html+='<div class="form-group">';
                   html+='<label for="icon" class="control-label col-md-3 col-sm-3 col-xs-12">icon<span class="required">*</span></label>';
                   html+='<div class="col-md-6 col-sm-6 col-xs-12">';
                   html+='<input type="text" id="icon" name="icon[]" required="required" class="form-control col-md-7 col-xs-12">';
                   html+='</div></div><a href="#" class="remove_field" style=" position: absolute;  top: 65%;right: 20%;">Remove</a></div>';

                    $(wrapper).append(html); //add input box

            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove();
            })
        });

        </script>
        @endsection
