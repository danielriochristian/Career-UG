<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link id="theme-style" rel="stylesheet" href="{{url('css/orbit-1.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  @include('frontend.title')
  @yield('title')
</head>
<body>

@include('frontend.header')
@yield('contact')
@yield('vacancies')
@yield('seeker')
@yield('employer')
@yield('tracer_alumni')
@yield('tracer_perusahaan')
@yield('view1')
@yield('detail')
@yield('help')
@yield('surat')
@yield('graduate')
@yield('cv_major')
@yield('cv_name')
@yield('cv2')
@include('frontend.footer')

<div class="to_top"></div>

</body>
<style type="text/css">

.to_top{
    display: inline-block;
    padding: 1.5%;
    position: fixed;
    right: 2%;
    background-image: url('assets/dist/img/up-icon.png');
    background-size: 100%;
    cursor: pointer;
    bottom: 10px;
}
</style>
<script type="text/javascript">
$(function(){
    $('.to_top').hide().on('click', function(){
        $('body,html').animate({scrollTop : 0}, 800);
    });
    $(window).on('scroll', function(){
        if($(this).scrollTop() > 50){
            $('.to_top').show();
        }else{
            $('.to_top').hide();
        }
    });
});

</script>
</html>
