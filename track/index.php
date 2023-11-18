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
      :: Track Parcel
</title>     
    <link href="../assets/images/favicon.png" rel="icon" type="image/png"> 
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"> 
  </head>   
  <body> 
    <!-- HEADER -->
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
            <li class="active">
              <a href="../track">Track</a>
            </li>
            <li>
              <a href="../contact">Contact us</a>
            </li>             
          </ul>
        </div>
      </div>       
    </nav>
    <section class="hero2 hero__contact2 track__section"> 
      <div class="container">
        <legend>
          <div data-pg-collapsed>
            <img src="../assets/images/tracking-icon2.png" />
          </div>
          <span>24hrs Secured Tracking</span>
        </legend>
        <div class="row">
          <div class="col-sm-5" data-pg-collapsed>
            <div class="hero2__cards transition">
              <h2>eCourier Tracking</h2>
              <p>Track your parcel with ease</p>
              <button type="button" class="btn btn-default box__shadow transition" style="opacity: 0;">Track</button>
              <i class="fa fa-rotate-right"></i>
            </div>             
          </div>
          <div class="col-sm-7" data-pg-collapsed>
            <div class="hero2__top__div" data-pg-collapsed>
              <form role="form" onsubmit="return track(this)"> 
                <div class="check-error hidden" data-pg-collapsed> 
                  <i class="fa fa-warning hidden"></i> 
                  <p></p> 
                </div>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Waybill Number</label>                   
                  <input type="text" class="form-control" placeholder="Enter Waybill No" name="waybill"> 
                </div>
                <button type="submit" class="btn submit">
                  <span>Track</span> 
                  <img src="../assets/images/loading.gif" class="hidden">
                </button>                 
              </form>
            </div>             
          </div>
          <div class="col-sm-12">
            <div id="content">
              <div class="track__section__div box-shadow-track">
                <h3>Tracking Information</h3>
                <div class="box-shadow-track track__section__company__holder" style="border-bottom:2px solid #e60000;">
                  <div class="track__section__company__holder__left" data-pg-collapsed="">
                    <img src="../assets/images/logo.png">
                    <h4>Peter:</h4>
                    <p><a href="tel:0030399393">0030399393</a></p>
                  </div>
                  <div class="track__section__company__holder__right" data-pg-collapsed="">
                    <h4>Invoice No: <p>341585</p></h4>
                    <h4>Waybill No: <p>ECYE502587</p></h4>
                  </div>
                </div>
                <div class="track__section__status box-shadow-track" style="border-bottom:2px solid #e60000;" data-pg-collapsed="">
                  <span class="label label-success" style="background-color:#e60000;">Canceled</span>
                </div>
                <div class="panel-group box-shadow-track" id="panels1" style="border-bottom: 2px solid #e60000;"> 
                  <div class="panel panel-default"> 
                    <div class="panel-heading"> 
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#panels1" href="#collapse1">Shipping progress</a> </h4> 
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <ul class="track__progress">
                        <!--Other status-->                         
                        <li> 
                          <div class="track__progress_date" data-pg-collapsed>
                            <p>12:00 am</p>
                            <span>Aug 13 2019</span>
                          </div>
                          <div class="track__progress_indicator">
                            <div class="track__progress_indicator__two indicate__more"></div>
                          </div>                           
                          <div class="track__progress_info" data-pg-collapsed>
                            <p>New delivered status</p>
                            <span>New Location: Canada</span>
                          </div>                           
                        </li>
                        <!--Main status-->                         
                        <li data-pg-collapsed> 
                          <div class="track__progress_date">
                            <p>04:44 am</p>
                            <span>Dec 24 2018</span>
                          </div>
                          <div class="track__progress_indicator">
                            <div class="track__progress_indicator__two indicate__more track__progress_indicator__important"></div>
                          </div>                           
                          <div class="track__progress_info">
                            <p>Parcel accepted in our center</p>
                            <span>To: Turkmenistan</span>
                          </div>                           
                        </li>
                      </ul>                       
                    </div>                     
                  </div>
                  <div class="panel panel-default" data-pg-collapsed=""> 
                    <div class="panel-heading"> 
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#panels1" href="#collapse2">Additional Information</a></h4> 
                    </div>                     
                    <div id="collapse2" class="panel-collapse collapse in">
                      <table class="table table-striped"> 
                        <tbody> 
                          <tr> 
                            <td><span>Shipment mode:</span></td> 
                            <td>Air Frieght</td> 
                          </tr>
                          <tr> 
                            <td><span>Shipment type:</span></td> 
                            <td>Parcel</td> 
                          </tr>
                          <tr> 
                            <td><span>Product Desc:</span></td> 
                            <td>1 iPhone 6x 10psc</td> 
                          </tr>
                          <tr> 
                            <td><span>Weight:</span></td> 
                            <td>0.4kg</td> 
                          </tr>
                          <tr> 
                            <td><span>Qty:</span></td> 
                            <td>3</td> 
                          </tr>                           
                        </tbody>
                      </table>                       
                    </div>                     
                  </div>                   
                </div>
              </div>
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