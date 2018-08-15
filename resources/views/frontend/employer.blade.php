@extends('Home2')
@section('employer')
  <div id="fullscreen_bg" class="fullscreen_bg">
  <div class="cardn card-container">
  <div class="container">
      <center><h3>Register as Employer</h3></center>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Organization Name:</label></h5>
            <div class="form-group">
              <input type="text" name="Organization Name:" id="Organization_name" class="form-control input-lg" placeholder="Organization name" tabindex="1"style="width:200%">
            </div>
          </div>
        </div>
        </div>
        </div>
<div class="col-xs-12 col-sm-6 col-md-6">
  <div class="form-group">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <h5> <label for="exampleFormControlSelect1">Post code:</label></h5>
    <div class="form-group">
      <input type="text" name="Post Code:" id="Post_Code" class="form-control input-lg" placeholder="Post Code" tabindex="1"style="width:200%">
    </div>
  </div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <h5><label for="exampleFormControlSelect1">Type Of Organization:</label></h5>
            <select class="form-control" id="exampleFormControlSelect1" style="width:50%">
              <option>Private Corporation </option>
              <option>Non Profit Organization</option>
              <option>Governmentak Office</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <h5><label for="exampleFormControlSelect1">Contury:</label></h5>
                    <select class="form-control" id="exampleFormControlSelect1" style="width:50%">
                      <option>Australia</option>
                      <option>Belgium</option>
                      <option>Brunei</option>
                      <option>Prance</option>
                      <option>Germany</option>
                      <option>Holland</option>
                      <option>India</option>
                      <option>Indonesia</option>
                      <option>Japan</option>
                      <option>Malaysia</option>
                      <option>New Zealand</option>
                      <option>Pakistan</option>
                      <option>Phillipines</option>
                      <option>Singapore</option>
                      <option>Thailand</option>
                      <option>United States</option>
                      <option>Vietnam</option>
                      <option>Others</option>
                    </select>
                  </div>
                </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
            <h5><label for="exampleFormControlSelect1">Business Field:</label></h5>
            <select class="form-control" id="exampleFormControlSelect1" style="width:50%">
              <option>Information Technologi</option>
              <option>ISP</option>
              <option>Consultant</option>
              <option>Manufacturing</option>
              <option>Education-Training</option>
              <option>Garment</option>
              <option>College/University</option>
              <option>Petrolium</option>
              <option>Mining</option>
              <option>Automotive</option>
              <option>Insurance</option>
              <option>Banking & Finance</option>
              <option>Trade</option>
              <option>Machinery</option>
              <option>Human Resources</option>
              <option>Law/Advocates/Solicitors</option>
              <option>Consumer Products</option>
              <option>Chemical</option>
              <option>Travel/Tourism</option>
              <option>Construction</option>
              <option>Service</option>
              <option>Packaging</option>
              <option>Inspection/Survey</option>
              <option>Transportation</option>
              <option>LSM</option>
              <option>Others</option>
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <h5><label for="exampleFormControlSelect1">Phone:</label></h5>
            <div class="form-group">
              <input type="text" name="phone:" id="Phone" class="form-control input-lg" placeholder="Phone" tabindex="1" style="width:200%">
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
          <h5><label for="exampleFormControlSelect1">Business Size:</label></h5>
          <select class="form-control" id="exampleFormControlSelect1" style="width:50%">
            <option>Less Than 100</option>
            <option>100-500</option>
            <option>500-1000</option>
            <option>1000-3000</option>
            <option>More Than 3000</option>
          </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <h5><label for="exampleFormControlSelect1">Fax:</label></h5>
          <div class="form-group">
            <input type="text" name="Fax:" id="Fax" class="form-control input-lg" placeholder="Fax" tabindex="1" style="width:200%">
          </div>
        </div>
      </div>
      </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <h5><label for="exampleFormControlSelect1">Address:</label></h5>
          <div class="form-group">
            <input type="text" name="Address:" id="Address" class="form-control input-lg" placeholder="Address" tabindex="1" style="width:200%">
          </div>
        </div>
      </div>
      </div>
      </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="form-group">
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
    <h5><label for="exampleFormControlSelect1">Web site:</label></h5>
    <div class="form-group">
    <input type="text" name="Web site:" id="Web_site" class="form-control input-lg" placeholder="Web site" tabindex="1" style="width:200%">
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
          <h5><label for="exampleFormControlSelect1">City:</label></h5>
        <div class="form-group">
          <input type="text" name="City:" id="City" class="form-control input-lg" placeholder="City" tabindex="1" style="width:200%">
        </div>
      </div>
    </div>
    </div>
    </div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6">
  <h5><label for="exampleFormControlSelect1">Please give short description of your company:</label></h5>
<div class="form-group">
  <input type="text" name="Please give short description of your company:" id="Please_give_short_description_of_your_company" class="form-control input-lg" placeholder=" " tabindex="1" style="width:200%">
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
  <div class="form-group">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
      <h5><label for="exampleFormControlSelect1">Province:</label></h5>
    <div class="form-group">
      <input type="text" name="province:" id="Province" class="form-control input-lg" placeholder="Province" tabindex="1" style="width:200%">
    </div>
  </div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<div class="row">
  <div class="container">
    <h5><label for="exampleFormControlSelect1">Logo:</label></h5>
   <button type="button" class="btn btn-primary btn-sm">Choose File</button><b><lebel>No file Chosen</Lebel></b>
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
  </div><!-- /card-container -->
    <center><h5><a href="#" class="forgot-password">
          Forgot the password?
      </a></h5></center>


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
    max-width: 900px;
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
    color:  rgb(87, 122, 255);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color:rgb(27, 102, 255);
}
</style>
