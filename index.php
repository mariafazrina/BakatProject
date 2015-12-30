<html lang="en">
  <head>
    <title>Bakat Project</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrapValidator.min.js"></script>
    
    <!-- CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/bootstrapValidator.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="social-box">
          <div class="row">
            <div class="col-md-12"><img src="assets/img/logo.png"/></div>
          </div>
        </div>
        <div class="form-signin">
          <div class="heading">
            <h3>Try Bakat for free</h3>
          </div>
          <div class="heading-desc">
            <p>Start your free account, no credit card required</p>
          </div>
          <div id="signupbox">
            <div class="social-box">
              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn">
                    <img src="assets/img/linkedln.png" style="width:273px"/>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn">
                    <img src="assets/img/googleplus.png" style="width:273px"/>
                  </a>
                </div>
              </div>
            </div>
            <div class="heading-desc">
              <p>we won't post anything without your permission <br> and your personal details are kept private</p>
            </div>
            <div class="line">OR</div>
              <form id="profileForm" method="post">
                <div class="form-group">
                  <div id="messages"></div>
                  <input type="text" class="form-control" name="first_name" placeholder="First Name"/>
                </div>
                <div class="form-group">
                  <div id="messages"></div>
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name"/>
                </div>
                <div class="form-group">
                  <div id="messages"></div>
                  <input type="text" class="form-control" name="work_email" placeholder="Work Email" />
                </div>
                <div class="form-group">
                  <div id="messages"></div>
                  <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <label>
                  <input type="checkbox" name="check-agree" valiue="1" checked> I agree to <a href="">Bakat Terms and Privacy Policy</a>
                </label>
                <div class="form-group">
                  <button type="submit" class="btn btn-success form-control"><h4>Sign Up</h4></button>
                </div>
              </form>
              <div class="row footerForm">
                <div class="col-md-12">
                  <span>Already have a Bakat account?
                    <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#signinbox').show()">Sign In <span class="glyphicon glyphicon-arrow-right marg1left" aria-hidden="true"></span></a>
                  </span>
                </div>
              </div>
          </div>
          <div id="signinbox" style="display:none;">
            <form id="formsignin" method="post">
              <div class="form-group">
                <div id="warning"></div>
                <input type="text" class="form-control" name="email" placeholder="Email"/>
              </div>
              <div class="form-group">
                <div id="warning"></div>
                <input type="password" class="form-control" name="password" placeholder="Password" />
              </div>
              <div class="row">
                <div class="col-xs-6 col-sm-offset-2">
                  <span>
                    <a id="signinlink" href="#" onclick="$('#signinbox').hide(); $('#forgotbox').show()">Forgot password?</a>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success form-control"><h4>Sign In</h4></button>
              </div>
            </form>
            <div class="row footerForm">
              <div class="col-md-12">
                <span>Don't have a Bakat account?
                   <a id="signinlink" href="#" onclick="$('#signinbox').hide(); $('#signupbox').show()">Sign Up <span class="glyphicon glyphicon-arrow-right marg1left" aria-hidden="true"></span></a>
                </span>
              </div>
            </div>
          </div>
          <div id="forgotbox" style="display:none;">
            <form id="formforgotpassword" method="post">
              <div class="form-group">
                <div id="notification"></div>
                <input type="text" class="form-control" name="email" placeholder="Email"/>
              </div>
              <div class="form-group">
                <div id="notification"></div>
                <input type="password" class="form-control" name="password" placeholder="New Password" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success form-control"><h4>Submit</h4></button>
              </div>
            </form>
          </div>
        </div>  
    </div>
    </body>
  </html>