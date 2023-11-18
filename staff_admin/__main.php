<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="theme-color" content=""> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
    <title> 
      :: Staff login
    </title>     
    <link href="../assets/images/favicon.png" rel="icon" type="image/png"> 
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-toggle.min.css" rel="stylesheet"> 
  </head>   
  <body> 
    <nav class="navbar navbar-default" role="navigation" id="nav" data-pg-collapsed> 
      <div class="container"> 
        <div class="navbar-header" data-pg-collapsed> 
          <button class="navbar-toggle" data-toggle="collapse" data-target="#nav1" data-pg-collapsed> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
          </button>           
          <a class="navbar-brand" href="../"> 
            <img src="../assets/images/logo.png" /> 
          </a>           
        </div>         
        <div class="collapse navbar-collapse" id="nav1"> 
          <ul class="nav navbar-nav navbar-right"> 
            <li> 
              <a href="../">Home</a> 
            </li>             
            <li class="active"> 
              <a href="./">Login</a> 
            </li>             
          </ul>           
        </div>         
      </div>       
    </nav>
    <section class="hero2 hero__contact2 track__section" id="new_login"> 
      <div class="container"> 
        <legend> 
          <div> 
            <img src="../assets/images/login.png" /> 
          </div>           
          <span>Administration Login</span> 
          <p style="color: red; font-size:12px;">tokenError</p>
        </legend>         
        <div class="row"> 
          <div class="col-sm-12"> 
            <div class="hero2__top__div login_div" id="login" data-pg-collapsed> 
              <form role="form" onsubmit="return staffLogin(this)" autocomplete="off"> 
                <div class="check-error hidden" data-pg-collapsed> 
                  <i class="fa fa-warning hidden"></i> 
                  <p></p> 
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Username or Email</label>                   
                  <input type="text" class="form-control" placeholder="Enter username or email" name="uid"> 
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Password</label>                   
                  <input type="password" class="form-control" placeholder="Enter password" name="pass"> 
                </div>                 
                <div class="checkbox" data-pg-collapsed> 
                  <label class="control-label"> 
                    <input type="checkbox" name="remember" >Remember me
                  </label>                   
                </div>
                <button type="submit" class="btn submit" data-pg-collapsed style="display: block;"> 
                  <span>Login</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button>
                <button type="button" class="btn-xs btn-primary text-capitalize" style="margin: 20px 0px; " id="btnregister" data-pg-collapsed> 
                  <span>Register</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button>
                <button type="button" class="btn-xs btn-danger bg-info text-capitalize" style="margin: 20px 10px; " id="btnreset" data-pg-collapsed> 
                  <span>Reset</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button>                 
              </form>               
            </div>
            <div class="hero2__top__div login_div" id="signup"> 
              <form role="form" onsubmit="return staffRegister(this)" autocomplete="on"> 
                <div class="check-error hidden" data-pg-collapsed> 
                  <i class="fa fa-warning hidden"></i> 
                  <p></p> 
                </div>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label" for="formInput57">Branch</label>                   
                  <select name="branch" class="form-control"> 
                    <!-- Show countries -->
                    <option value='0' selected>Select country</option> 
                  </select>
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Fullnames</label>                   
                  <input type="text" class="form-control" placeholder="Fullnames" name="fname"> 
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Email</label>                   
                  <input type="email" class="form-control" placeholder="Email" name="email"> 
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Password</label>                   
                  <input type="password" class="form-control" placeholder="Password" name="pass"> 
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Phone</label>                   
                  <input type="text" class="form-control" placeholder="Phone" name="phone"> 
                </div>
                <button type="submit" class="btn submit" data-pg-collapsed> 
                  <span>Register</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button>
                <button type="button" class="btn-xs btn-primary bg-info text-capitalize btnlogin" data-pg-collapsed style="margin: 0px 20px;"> 
                  <span>Login</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button>                 
              </form>               
            </div>
            <div class="hero2__top__div login_div" id="reset"> 
              <form role="form" onsubmit="return staffReset(this)" autocomplete="off"> 
                <div class="check-error hidden" data-pg-collapsed> 
                  <i class="fa fa-warning hidden"></i> 
                  <p></p> 
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Email address</label>                   
                  <input type="email" class="form-control" placeholder="Enter email address" name="email"> 
                </div>                 
                <button type="submit" class="btn submit" data-pg-collapsed> 
                  <span>Reset</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button>
                <button type="button" class="btn-xs btn-primary bg-info text-capitalize btnlogin" data-pg-collapsed style="margin: 0px 20px;"> 
                  <span>Login</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button>                 
              </form>               
            </div>             
          </div>           
          <div class="col-sm-12" data-pg-collapsed> 
            <div id="track_cont"></div>             
          </div>           
        </div>         
      </div>       
    </section>     
    <!--FOOTER-->     
    <section class="footer"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12"> 
            <p>Content and design layout From: <a href="https://www.alpinesg.com/" target="_blank">ALP</a></p> 
          </div>
        </div>         
      </div>       
    </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->     
    <!-- Placed at the end of the document so the pages load faster -->     
    <script src="../assets/js/jquery.min.js"></script>   
    <script src="../assets/js/bootstrap-toggle.min.js"></script> 
    <script src="../assets/js/components.js"></script>         
    <script src="../assets/js/_admin.js"></script>     
  </body>   
</html>