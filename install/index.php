<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content=""> 
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Installation</title>
    <link href="../assets/images/favicon.png" rel="icon" type="image/png">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/animate.css" rel="stylesheet"> 
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <section class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="indicator" id="step1" data-pg-collapsed>
              <h1>Requirements</h1>
              <span class="indicator-label indicator-label-active">1</span>
              <div class="reg">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="bold">Name</th>
                      <th class="bold">Description</th>
                      <th class="bold">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>PHP 5.5+</td>
                      <td>Required PHP version 5.5 or more</td>
                      <td>'<font color="red">Not installed</font>'</td>
                    </tr>
                    <tr>
                      <td>MySQLi</td>
                      <td>Required MySQLi PHP extension</td>
                      <td>Not installed</td>
                    </tr>
                    <tr>
                      <td>eCourier.sql</td>
                      <td>Required eCourier.sql for the installation <small>(Located in ./db_sql/)</small></td>
                      <td>Not Installed</td>
                    </tr>
                    <tr>
                      <td>.env</td>
                      <td>Required .env to be writable for the installation</td>
                      <td>installed</td>
                    </tr>
                  </tbody>
                </table>
                  <button type="button" class="btn btn-lg btn-primary" id="btn1" >Next</button>
              </div>
            </div>
            <div class="indicator" id="step2" data-pg-collapsed>
              <h1>Installation</h1>
              <span class="indicator-label indicator-label-active">2</span>
              <div class="reg">
                  <form role="form" onsubmit="return siteInstall(this)">
                  <div class="check-error hidden"> 
                    <i class="fa fa-warning hidden"></i> 
                    <p></p> 
                  </div>
                  <div class="form-group"> 
                    <input type="text" class="form-control" placeholder="SQL localhost" value="" name="dbhost"> 
                  </div>                   
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="SQL username" value="" name="dbusername"> 
                  </div>                   
                  <div class="form-group"> 
                    <input type="text" class="form-control" placeholder="SQL password" value="" name="dbpass"> 
                  </div>
                  <div class="form-group"> 
                    <input type="text" class="form-control" placeholder="SQL database name" value="" name="dbname"> 
                  </div>
                  <button type="submit" class="btn btn-lg btn-primary submit" id="btn2">
                    <span>Install</span> 
                    <i class="fa fa-cloud-upload"></i>
                  </button>                   
                </form>
              </div>
            </div>             
          </div>
        </div>
      </div>
    </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap-notify-min.js"></script>     
    <script src="../assets/js/components.js"></script>     
    <script src="../assets/js/_site.js"></script>     
  </body>
</html>
