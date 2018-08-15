<div class="shadow-sm p-3 mb-5 bg-white navbar navbar-expand-md navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="/"><img src="{{url('assets/dist/img/Logo_Nav.png')}}" class="rounded"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item mx-auto"> <a class="nav-link active" href="/">
        <i class="fa fa-home"  style="font-size:15pt;color:#8A2BE2; margin-right:5px;"></i><span style="font-size:15pt;color:#8A2BE2">HOME</span> </a>
      </li>
      <li class="nav-item mx-4"> <a class="nav-link active" href="/vacancies">
        <i class="fa fa-briefcase"  style="font-size:15pt;color:#8A2BE2; margin-right:5px;"></i><span style="font-size:15pt;color:#8A2BE2">VACANCIES</span> </a>
      </li>
      <li class="nav-item"> <a class="nav-link active" href="/kontak">
        <i class="fa fa-phone"  style="font-size:15pt;color:#8A2BE2; margin-right:5px;"></i><span style="font-size:15pt;color:#8A2BE2">CONTACT</span> </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
            <button class="btn btnn-outline-success mx-3" data-toggle="modal"  data-target="#exampleModal" type="button"> <i class="fa fa-user" style="margin-right: 10px;"> </i>LOGIN</button>
      <div class="dropdown">
        <button class="btn btnn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-edit" style="margin-right: 10px;"> </i>REGISTRATION
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="/seeker" style="color:#8328A7"><i class="fa fa-user" style="margin-right: 10px;color:#8328A7 ;"></i>Job Seeker</a>
          <a class="dropdown-item" href="/employer" style="color:#8328A7"><i class="fas fa-users" style="margin-right: 10px;color:#8328A7;"></i>Employer</a>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:70%;margin-left:76%;margin-top:13%" >
      <div class="modal-header">
        <img src="{{url('assets/dist/img/Logo_Nav.png')}}">
        <!-- <h5 class="modal-title" id="exampleModalLabel">CAREER CENTER</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          <a href="#" class="forgot-password">
              Forgot the password?
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
<style>
  .btnn-outline-success{
    color:#8328A7;
    background-color: transparent;
    background-image: none;
    border-color: #8328A7;
  }
  .btnn-outline-success:hover{
    color: #fff;
    background-color: #8328A7;
    border-color: #8328A7;
  }
</style>
