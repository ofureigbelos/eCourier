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
      :: Reset Password
    </title>     
    <link href="../assets/images/favicon.png" rel="icon" type="image/png"> 
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/animate.css" rel="stylesheet"> 
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
            <li> 
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
          <span>Reset</span> 
        </legend>         
        <div class="row"> 
          <div class="col-sm-12"> 
            <div class="hero2__top__div login_div" id="login"> 
              <form role="form" onsubmit="return resetFinal(this)" autocomplete="off"> 
                <div class="check-error hidden" data-pg-collapsed> 
                  <i class="fa fa-warning hidden"></i> 
                  <p></p> 
                </div>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">New password</label>                   
                  <input type="password" class="form-control" placeholder="New password" name="pass"> 
                </div>                 
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Retype password</label>                   
                  <input type="password" class="form-control" placeholder="Retype password" name="rpass"> 
                </div>
                <button type="submit" class="btn submit" data-pg-collapsed> 
                  <span>Reset</span> 
                  <img src="../assets/images/loading.gif" class="hidden"> 
                </button> 
                  <input type="hidden" name="token" value=""> 
                  <input type="hidden" name="email" value=""> 
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
    <script src="../assets/js/components.js"></script>     
    <script src="../assets/js/_admin.js"></script>      
  </body>   
</html>