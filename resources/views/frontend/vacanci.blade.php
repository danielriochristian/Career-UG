<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

@include('frontend.title')
@yield('title')
@include('frontend.header')
<div class="container" style="margin-top:8%">
  <h4 class="title-hero" style="margin-top:1%">Lowongan Terkini</h4>
  <hr>
  <div class="card centered" style="width:100%">
    <div class="card-header">
      <img src="{{url('assets/dist/img/megaphone3.png')}}" height="40" width="40" style="margin-bottom:1%;">
      <a class="card-title" style="margin-left: 1%;font-size:30px">Lorem Ipsum</a>
    </div>
  <div class="card-body centered">
    <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    <a href="#" class="btn btn-primary">Selengkapnya</a>
    <div class="text-right" style="color:#808080">Diposting oleh : Admin pada  2018-07-20 22:04:50</div>
  </div>
</div>
</div>

@include('frontend.footer')


<style >
.card {
      margin: 0 auto; /* Added */
      float: none; /* Added */
      margin-bottom: 10px; /* Added */
      margin-top: 15px;
}
</style>
