@extends('layouts.main')
@section('css')

@endsection
@section('title')
{{__('pages.Contact Us')}}
@endsection
@section('content')
<!-- contact-->
<section id="appointment" style="background-color: #fff;padding:50px" class="text-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h3 class="heading wow bounceInDown">{{__('pages.Contact Us')}} </h3>
        <div class="row">
          <div class="col-md-6 wow fadeInLeft">
            <div class="alert print-error-book-msg" style="display:none">

            <ul style="padding-left: 0;"></ul>

          </div>
          <style media="screen">
              #booknow:active,#booknow:focus{
                color: #70bc4f;
                background-color: #fff !important;
                border-color: #70bc4f !important;
                }

          </style>
            <form id="appointmentForm"   class="contact-form">

              <div class="controls">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name">{{__('pages.YourName')}} *</label>
                      <input type="text" name="name" placeholder="{{__('pages.Enter your name')}}" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="surname">{{__('pages.Your Phone')}} *</label>
                      <input type="text" name="phone" placeholder="{{__('pages.Enter your  phone')}}" required="required" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="surname">{{__('pages.Your Email')}} *</label>
                  <input type="email" name="email" placeholder="{{__('pages.Enter your  email')}}" required="required" class="form-control">
                </div>


                <div class="form-group">
                  <label for="surname">{{__('pages.Message')}} *</label>
                  <textarea rows="4" name="message" placeholder="{{__('pages.Enter your message')}}" required="required" class="form-control"></textarea>
                </div>



                <div class="text-center">
                  <button  type="button" id="booknow" class="btn btn-primary btn-block">{{__('pages.send')}}</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 wow fadeInRight" >
            <div class="col-md-11 col-md-offset-1">
              <h4>{{__('pages.Contact Information')}}:</h4>
            </div>

          <div class="col-md-10 col-md-offset-2">

            <h6>{{__('pages.Address')}}</h6>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$info->TextTrans('address') }} </p>
            <h6>{{__('pages.Phone')}}</h6>
            @foreach($phone as $item)
            <p>{!! $item->icon !!}  {{$item->phone}}</p>
            @endforeach
            <h6>{{__('pages.Email')}}</h6>
            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$info->email}}</p>
            <p class="social">
              @foreach($social as $item)
             <a href="{{$item->link}}" title="{{$item->name}}"  > <img src="{{asset($item->image)}}" alt="{{$item->name}}" class="img-responsive"> </a>
             @endforeach
             <!-- <a href="#" title="" class="email"><i class="fa fa-envelope"></i></a> -->
             </p>
          </div>

            <!-- <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
            <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
             -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="map">

  <div id="map" style="width:100%;height:250px"></div>

</section>
@endsection
@section('jscontact')

<script type="text/javascript">
$(document).ready(function(){
$("#booknow").click(function(e){

e.preventDefault();



var name = $("input[name='name']").val();

var email = $("input[name='email']").val();

var phone = $("input[name='phone']").val();

var message = $("textarea[name='message']").val();


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $('#booknow').addClass('disabled');
  var newI = $('<i class="fa fa-spinner fa-spin"></i>');
  $('#booknow').append(newI);


// var message = $("textarea[name='cmessage']").val();


  $.ajax({

      url: '/en/contact',

      method:'POST',

      data: {name:name, email:email,phone:phone,message:message},

      success: function(data) {

          if($.isEmptyObject(data.error)){
            // printSuccessBookMsg (data.success);
            
            printSuccessBookMsg ();
            resetForm();
              $('#booknow').removeClass('disabled');

                   newI.remove();
restorealert(data.success);
          }else{

            printErrorBookMsg(data.error);
            $('#booknow').removeClass('disabled');

                 newI.remove();
          }

      }

  });


});

function printErrorBookMsg (msg) {

$(".print-error-book-msg").find("ul").html('');

$(".print-error-book-msg").css('display','block');

$.each( msg, function( key, value ) {

$(".print-error-book-msg").find("ul").append('<li>'+value+'</li>');

});

}
function printSuccessBookMsg () {

$(".print-error-book-msg").find("ul").html('');

$(".print-error-book-msg").css('display','none');



}

function resetForm() {
    document.getElementById("appointmentForm").reset();
}
});
</script>
<script>



		var lat= <?php echo $info->latitude;  ?>

		var long=<?php echo $info->longitude;  ?>



console.log(lat);
function myMap() {
var myCenter = new google.maps.LatLng(lat,long);
var mapCanvas = document.getElementById("map");
var mapOptions = {center: myCenter, zoom: 12};
var map = new google.maps.Map(mapCanvas, mapOptions);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
	map.setZoom('9');
	map.setCenter(marker.getPosition());
});
}
console.log(long);
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZKk715C3VacWdM2_IHah8z5CVe0qT7AI&callback=myMap"></script>

@endsection
