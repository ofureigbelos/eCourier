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
      :: Contact us
    </title>     
    <link href="../assets/images/favicon.png" rel="icon" type="image/png"> 
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"> 
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
          <a class="navbar-brand" href="">
            <img src="../assets/images/logo.png" />
          </a>           
        </div>         
        <div class="collapse navbar-collapse" id="nav1">
          <ul class="nav navbar-nav navbar-right"> 
            <li>
              <a href="../">Home</a>
            </li>
            <li>
              <a href="../track">Track</a>
            </li>
            <li class="active">
              <a href="../contact">Contact us</a>
            </li>             
          </ul>
        </div>
      </div>       
    </nav>
    <section class="hero hero__contact" data-pg-collapsed>
      <div class="bg__shadow"></div>
      <div class="pg-empty-placeholder text__bg__shadow"></div>
      <div class="container"> 
        <div class="row"> 
          <div class="col-sm-12">
            <div class="hero__content"> 
              <h1>We’d love to hear from you.</h1>
              <p>We’d love to hear from you.</p> 
            </div>             
          </div>           
        </div>         
      </div>
      <div class="hero__pointer">
        <a href="#" class="box__shadow"><i class="fa fa-arrow-circle-o-down"></i></a>
      </div>       
    </section>     

    <section class="hero2 hero__contact2" id="hero2"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-5" data-pg-collapsed>
            <div class="hero2__cards transition">
              <h2>Reach us swiftly</h2>
              <p>We connect carries with shippers and vendors</p>
              <button type="button" class="btn btn-default box__shadow transition">Connect</button>
              <i class="fa fa-envelope-o"></i>
            </div>             
          </div>
          <div class="col-sm-7">
            <div class="hero2__top__div">
              <form role="form" onsubmit="return contact_us(this)"> 
                <div class="check-error hidden" data-pg-collapsed> 
                  <i class="fa fa-warning hidden"></i> 
                  <p></p> 
                </div>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Fullnames</label>                   
                  <input type="text" class="form-control" placeholder="Enter fullnames" name="fname"> 
                </div>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Phone No</label>                   
                  <input type="text" class="form-control" placeholder="Enter phone no" name="phone"> 
                </div>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Email address</label>                   
                  <input type="email" class="form-control" placeholder="Enter email" name="email"> 
                </div>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Message Enquiry</label>                   
                  <textarea class="form-control" rows="3" name="message"></textarea>
                </div>                 
                <button type="submit" class="btn submit" data-pg-collapsed>
                  <span>Submit</span> 
                  <i class="fa fa-send hidden"></i>
                </button>                 
              </form>
            </div>             
          </div>
        </div>         
      </div>       
    </section>
    <section class="hero2" data-pg-collapsed> 
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="hero2__top__div">
              <h2>ASG by the numbers.</h2>
              <button type="button" class="btn btn-default transition">Learn more</button>
            </div>             
          </div>
          <div class="col-sm-5">
            <div class="hero2__cards transition">
              <h2>Carriers</h2>
              <p>We connect carries with shippers and vendors</p>
              <button type="button" class="btn btn-default box__shadow transition">Carriers</button>
              <i class="fa fa-plane"></i>
            </div>             
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
    <script src="../assets/js/_site.js"></script>     
  </body>   
</html>