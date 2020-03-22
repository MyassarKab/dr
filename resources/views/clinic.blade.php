@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/clinic.css')}}">
@endsection
@section('title')
{{$clinic->TextTrans('name')}} {{__('pages.Clinic')}}
@endsection
@section('content')

<?php
$locale = App::getLocale();

 ?>
 @if($locale=='ar')
<style media="screen">

</style>
   @endif
<section class="top-section">
  <div class="background-heaer">
    <div class="container ">
      <div class="row">
        <div class="col-lg-12 header-top text-center">
          <h1 class="heading wow  bounce">{{$clinic->TextTrans('name')}}  {{__('pages.Clinic')}} </h1>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- about-->
<section id="about" class="text" style="background:#fff">

  <div class="container ">
    <div class="row">

      <div class="col-md-6 wow fadeInLeft" id="floatright" >

        <h4>{{$clinic->TextTrans('name')}} {{__('pages.Clinic')}}</h4>
        {!!$clinic->TextTrans('detalis')!!}

      </div>
      <div class="col-md-5 @if($locale=='en') col-sm-offset-1 @endif wow fadeInRight"  >
        <style media="screen">

        </style>
        <div   class="myadiv"><img src="{{asset($clinic->image)}}" alt="{{$clinic->TextTrans('name')}}" title="{{$clinic->TextTrans('name')}}" class="img-responsive" style=""></div>
      </div>
    </div>
  </div>
</section>


<section class="form-section">
<div class="background-heaer">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="alert print-error-book-msg" style="display:none">

      <ul style="padding-left: 0;"></ul>

    </div>
      <form id="appointmentForm"  class="contact-form">
        <div class="controls">
          <div class="row">
            <div class="col-sm-4" id="floatright" >
              <div class="form-group wow fadeInDown ">
                <label for="name"> {{__('pages.Name')}} *</label>
                <input type="text" name="name" placeholder="{{__('pages.Enter your name')}}" required="required" class="form-control">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group wow fadeInDown">
                <label for="surname">{{__('pages.Your Phone')}} *</label>
                <input type="text" name="phone" placeholder="{{__('pages.Enter your  phone')}}" required="required" class="form-control">
              </div>
            </div>
            <div class="col-sm-4">
          <div class="form-group wow fadeInDown">
            <label for="surname">{{__('pages.Your Email')}} *</label>
            <input type="email" name="email" placeholder="{{__('pages.Enter your  email')}}" required="required" class="form-control">
          </div>
            </div>
            <div class="col-sm-4" id="floatright" >
              <div class="form-group wow fadeInDown" >
                <label for="surname">{{__('pages.Choice Departmint')}} *</label>
              <select class="form-control form-control-lg" name="clinic" id="clinic_select">
                <option value="{{$clinic->TextTrans('name')}}" selected>{{$clinic->TextTrans('name')}}</option>
              </select>
              </div>
            </div>
            <div class="col-sm-4" id="floatright" >

            <div class="form-group wow fadeInDown">
              <label for="dtp_input1" class="col-md-12 control-label">{{__('pages.Choice DateTime')}} *</label>
              <div class="input-group date form_datetime col-md-12" data-date="" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
              </div>
              <input type="hidden" id="dtp_input1" value="" name="date" /><br/>
            </div>
            </div>




          <div class="col-md-4">
            <div class="form-group wow fadeInDown">
              <label for="dtp_input1" class="col-md-12 control-label ">{{__('pages.Book Now')}}</label>
              <div class="text-center">

                  <button  type="button" id="booknow" class="btn btn-primary btn-block  book-button">{{__('pages.Book Now')}}</button>
              </div>
            </div>

          </div>


          </div>
        </div>
      </form>
    </div>


  </div>
</div>
</div>


</section>
<style media="screen">
  .owl-item{
    padding-left: 2px;
  padding-right: 2px;
  }
  .owl-theme .owl-controls .owl-page span {
    display: block;
    width: 12px;
    height: 12px;
    margin: 5px 7px;
    filter: Alpha(Opacity=50);
    opacity: 0.5;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    background: transparent;

}
</style>
<section id="owl-slider">
      <h3 class="heading wow  bounce">{{__('pages.Our Services')}}</h3>
  <div class="container">
    <div class="row">
      <div class="large-12 columns" style="direction: ltr;">
        <div class="owl-carousel owl-theme wow zoomIn">
          @foreach($clinic->services as $item)
          <div class="item">
            <div class="example-1 card">
              <div class="wrapper" style="background:url({{asset($item->image)}});background-size: 100% 100%;
background-repeat: no-repeat;">

                <div class="data">
                  <div class="content" id="owl-card">

                    <h1 class="title">{{$item->TextTrans('name')}} </h1>
                    {!!$item->TextTrans('description')!!}

                    <a href="#" class="menu-button" data-toggle="modal" data-target="#service{{$item->id}}" >{{__('pages.More')}} </a>
                  </div>

                </div>
              </div>
            </div>

          </div>

          @endforeach


        </div>
        <style media="screen">
        .modal.in .modal-dialog {

          background-color: #fff;
        }
        .modal-footer {
            padding: 15px;
            text-align: right;
            border-top: 1px solid #e5e5e5;
            padding: 15px !important;
        }
        .modal-title {

            text-align: center;
        }
        </style>
          @foreach($clinic->services as $item)
        <!-- Modal -->
        <div class="modal fade" id="service{{$item->id}}" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{$item->TextTrans('name')}} </h4>
              </div>
              <div class="modal-body">
                <p>{!!$item->TextTrans('detalis')!!}</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#8FBE46;color:#fff;padding:10px">{{__('pages.Close')}} </button>
              </div>
            </div>
          </div>
        </div>
    @endforeach
      </div>
    </div>
  </div>

   </section>

<!-- contact-->

@endsection

@section('js')
<script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 8,
          nav:true,
          dots:true,
          navigation:true,

          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            600: {
              items: 3,
              nav: true
            },
            1000: {
              items: 4,
              nav: true,
              loop: true,
              margin: 20
            }
          },

        })
      })
    </script>
    <script type="text/javascript">
      $('document').ready(function(){

      $('.owl-pagination .owl-page span').first().addClass('fa fa-chevron-left');
      $('.owl-pagination .owl-page:nth-child(2) span').addClass('fa fa-chevron-right');
        $('#owl-card p').addClass('text')
      });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
    $("#booknow").click(function(e){

    e.preventDefault();



    var name = $("input[name='name']").val();

    var email = $("input[name='email']").val();

    var phone = $("input[name='phone']").val();

    var clinic = $("#clinic_select").val();

    var date = $("input[name='date']").val();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      $('#booknow').addClass('disabled');
      var newI = $('<i class="fa fa-spinner fa-spin"></i>');
      $('#booknow').append(newI);

    console.log(date);
    // var message = $("textarea[name='cmessage']").val();


      $.ajax({

          url: '/en/appointment',

          method:'POST',

          data: {name:name, email:email,phone:phone,date:date,clinic:clinic},

          success: function(data) {

              if($.isEmptyObject(data.error)){
                printSuccessBookMsg (data.success);
                resetForm();
                  $('#booknow').removeClass('disabled');

                       newI.remove();

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
    function printSuccessBookMsg (msg) {

    $(".print-error-book-msg").find("ul").html('');

    $(".print-error-book-msg").css('display','block');

    $(".print-error-book-msg").find("ul").html('<li>'+msg+'</li>');


    }

    function resetForm() {
        document.getElementById("appointmentForm").reset();
    }
    });
    </script>
@endsection
