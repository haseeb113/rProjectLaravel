<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vendor Login - Rating App</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{url('VerifyVendorLogin')}}" method="post">
                @csrf
              <h1>Vendor Login Form</h1>
              <div>
                <input type="email" name="Email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="Password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
               
              </div>

              <div class="clearfix"></div>
              For Admin Login <a class="" href="{{url('Showlogin')}}">Click Here</a>
              <div class="separator">
                 <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> 

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> Grace Cube Studios</h1>
                  <p>©2022 All Rights Reserved. Grace Cube Studios</p>
                </div>
              </div>
            </form>
          </section>
        </div> 

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="savevendor" method="post">
                @csrf
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="FullName" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="form-group row">
<label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
<div class="col-md-6 col-sm-6">
<div id="gender2" class="btn-group" data-toggle="buttons">
<!-- <label class="btn btn-primary" data-toggle-class="btn-danger" data-toggle-passive-class="btn-secondary"> -->
<input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
</label>
<!-- <label class="btn btn-primary " data-toggle-class="btn-danger" data-toggle-passive-class="btn-secondary"> -->
<input type="radio" name="gender" value="female" class="join-btn" > Female
</label>
</div>
</div>
</div>
              <div>
              <div>
                <input type="text" class="form-control" placeholder="Contact Number" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="CNIC" required="" />
              </div>
                <input type="text" class="form-control" placeholder="Company Name" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Vendor Designation" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Company Address" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Company Contact" required="" />
              </div>
              

              <div>
                <button class="btn btn-default submit" href="">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> Grace Cube Studios</h1>
                  <p>©2022 All Rights Reserved. Grace Cube Studios</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
