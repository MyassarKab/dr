@extends('layouts.main')


@section('content')
@if (App::isLocale('ar'))
<style media="screen">
  body{
    direction: rtl;
  }
  @media screen and (min-width: 480px){
    .sentence {
        position: relative;
        width: 92%;
    }
  }
.floatRight{
  float: right;
}
.dir{
      direction: rtl;
}
.item blockquote p:before {
content: "\f10e";
font-family: 'Fontawesome';
float:right;
margin-right: 10px;
}
</style>
@endif
<style media="screen">
.navbar-default {
  background-color: #3b3d42;
  border: 0px;
  padding: 0 0;
}

</style>
<!--start banner-->
<section class="banner">
<div > <!--  class="bg-color"  id="banner" -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="col-md-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL('/')}}"><img src="/main/img/logo.png" class="img-responsive" ></a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
          <ul class=" nav navbar-nav" id="ulnavbar">
            <li class="active"><a href="{{URL('/')}}">{{ __('home.Home') }}</a></li>
            <!-- <li ><a href="#search">{{ __('home.Advance') }}</a></li> -->

             <li class=""><a href="{{URL('/')}}/our-blog">{{ __('home.Blog') }}</a></li>
             <li class=""><a href="{{URL('/')}}/career">{{ __('home.Career') }}</a></li>

            @if (Auth::guest())
                <li><a href="{{ route('login') }}">{{ __('home.Login') }}/{{ __('home.Register') }}</a></li>

              @endif
                <li class=""><a href="#Join">{{ __('home.Join') }}</a></li>
                        <!-- <li class=""><a href="#contact">{{ __('home.contact') }}</a></li> -->

                        @if (! Auth::guest())
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          {{ __('home.Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                </ul>
                                  @endif
                                  <?php
                                  $locale = App::getLocale();

                                  if (App::isLocale('en'))
                                  $url = str_replace('/en', '/ar', url()->current());
                                  else
                                  $url = str_replace('/ar', '/en', url()->current());
                                   ?>
                                   <input type="hidden" id="lang" name="lang" value="{{$locale}}">
                                   @if($locale=='en')
                                  <li><a href="{{$url}}">ع</a></li>
                                  @else
                                  <li><a href="{{$url}}">EN</a></li>
                                  @endif

          </ul>
        </div>
    </div>
    </div>
  </nav>

</div>
</section >
<!-- end banner -->

<section style="height: 170px">
<!-- empty section for space -->
</section>


<!-- start search  -->
<section id="about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        {!! $info->TextTrans('few_words_owner') !!}
      </div>
    </div>
  </div>

</section >


<section style="height: 100px"> <!-- space section --></section>






@endsection

@section('js')
 <script type="text/javascript" src="/main/js/smooth_scrolling.js" charset="UTF-8"></script>



@endsection
