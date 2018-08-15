@extends('home2')
@section('help')
  <div class="cardn card-container">
  <div class="container">
      <h3>Helpdesk</h3>
      <p>Masalah Anda akan dijawab oleh Admin dalam jangka waktu 4 (empat) hari kerja
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Nama:</label></h5>
            <div class="form-group">
              <input type="text" name="Nama:" id="Nama" class="form-control input-lg" placeholder="Nama" tabindex="1" style="width:300%">
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
              <input type="text" name="NPM:" id="NPM" class="form-control input-lg" placeholder="NPM" tabindex="1" style="width:300%">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <h5><label for="exampleFormControlSelect1">Program Studi:</label></h5>
                    <select class="form-control" id="exampleFormControlSelect1" style="width:70%">
                      <option>Program Studi</option>
                      <option>D3-Manajemen Informatika</option>
                      <option>D3-Teknik Komputer</option>
                      <option>D3-Akutansi Komputer</option>
                      <option>D3-Manajemen Keuangan</option>
                      <option>D3-Manajemen Pemasaran</option>
                      <option>D3-Kebidanan</option>
                      <option>S1-Sistem Informasi</option>
                      <option>S1-Sistem Komputer</option>
                      <option>S1-Teknik Informatika</option>
                      <option>S1-Teknik Elektro</option>
                      <option>S1-Teknik Mesin</option>
                      <option>S1-Teknik Indrustri</option>
                      <option>S1-Teknik Sipil</option>
                      <option>S1-Teknik Arsitektur</option>
                      <option>S1-Akuntansi</option>
                      <option>S1-Manajemen</option>
                      <option>S1-Psikoligi</option>
                      <option>S1-Sastra Inggris</option>
                      <option>S1-Ilmu Komunikasi</option>
                      <option>S1-Kedokteran</option>
                      <option>S1-Sastra Cina</option>
                      <option>S1-Farmasi</option>
                      <option>S1-Agro Teknologi</option>
                      <option>S2-Sistem Informasi</option>
                      <option>S2-Manajemen</option>
                      <option>S2-Teknik Elektro</option>
                      <option>S2-Teknik Sipil</option>
                      <option>S2-Teknik Mesin</option>
                      <option>S2-Magister Sastra</option>
                      <option>S2-Psikologi Sains</option>
                      <option>S2-Psikologi Profesi</option>
                      <option>S2-Ilmu Komunikasi</option>
                      <option>S3-Ilmu Ekonomi</option>
                      <option>S3-Teknologi Informasi</option>
                      <option>S3-Psikologi</option>
                   </select>
                  </div>
                </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Tahun Lulus:</label></h5>
            <div class="form-group">
              <input type="text" name="Tahun:" id="Tahun" class="form-control input-lg" placeholder="Tahun" tabindex="1" style="width:70%">
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
              <input type="text" name="Email:" id="Email" class="form-control input-lg" placeholder="Email" tabindex="1" style="width:300%">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Keluhan:</label></h5>
            <div class="form-group">
              <input type="text" name="Keluhan:" id="Keluhan" class="form-control input-lg" placeholder="Keluhan" tabindex="1" style="width:300%;">
            </div>
          </div>
        </div>
        </div>
        </div>
<div class="container">
          <center><button class="btna btn-lg btn-primary btn-block btn-signin" type="submit">Submit</button></center>
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
.card-container.cardn {
    /* margin-top: 10%; */
    max-width: 1000px;
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
.cardn {
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
