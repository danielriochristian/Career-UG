@extends('home')
@section('seeker')
    <div id="fullscreen_bg" class="fullscreen_bg">
  <div class="card card-container">
  <div class="container">
      <center><h3>Register as Seeker</h3></center>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Nama:</label></h5>
            <div class="form-group">
              <input type="text" name="Nama:" id="Nama" class="form-control input-lg" placeholder="Nama" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Alamat:</label></h5>
            <div class="form-group">
              <input type="text" name="Alamat:" id="Alamat" class="form-control input-lg" placeholder="Alamat" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <h5><label for="exampleFormControlSelect1">Jenis Kelamin:</label></h5>
                    <select class="form-control" id="exampleFormControlSelect1" style="width:50%">
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Jurusan:</label></h5>
            <div class="form-group">
              <input type="text" name="Jurusan:" id="Jurusan" class="form-control input-lg" placeholder="Jurusan" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Lulusan:</label></h5>
            <div class="form-group">
              <input type="text" name="Lulusan:" id="Lulusan" class="form-control input-lg" placeholder="Lulusan" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">NPM:</label></h5>
            <div class="form-group">
              <input type="text" name="NPM:" id="NPM" class="form-control input-lg" placeholder="NPM" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">IPK:</label></h5>
            <div class="form-group">
              <input type="text" name="IPK:" id="IPK" class="form-control input-lg" placeholder="IPK" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Email:</label></h5>
            <div class="form-group">
              <input type="text" name="Email:" id="Email" class="form-control input-lg" placeholder="Email" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Kontak:</label></h5>
            <div class="form-group">
              <input type="text" name="Kontak:" id="Kontak" class="form-control input-lg" placeholder="Kontak" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Password:</label></h5>
            <div class="form-group">
              <input type="text" name="Password:" id="Password" class="form-control input-lg" placeholder="Password" tabindex="1">
            </div>
          </div>
        </div>
        </div>
        </div>
              <h5><label>
                  <input type="checkbox" value="remember-me"> Remember me
              </label></h5>
<div class="container">
          <center><button class="btna btn-lg btn-primary btn-block btn-signin" type="submit">Register</button></center>
</div>
      </form><!-- /form -->
    <!-- <center><a href="#" class="forgot-password">
          Forgot the password?
      </a></center> -->
  </div><!-- /card-container -->
</div>
</div>
</div>

@endsection

<style>
.fullscreen_bg {
    position: static;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-image: url('assets/dist/img/background-1.jpg');
    background-repeat:repeat;
    overflow: auto;
  }
.card-container.card {
    /* margin-top: 10%; */
    max-width: 800px;
    padding: 40px 40px;
}

.btna {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: rgba(230, 230, 230, 0.57);
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 100px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btna.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(87, 122, 255);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700px;
    font-size: 14px;
    height: 36px;
      width: 20%;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btna.btn-signin:hover,
.btna.btn-signin:active,
.btna.btn-signin:focus {
    background-color: rgb(27, 102, 255);
}

.forgot-password {
    color: rgb(87, 122, 255);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(27, 102, 255);
}
</style>
