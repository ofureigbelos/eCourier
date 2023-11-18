<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    <meta name="theme-color" content=""> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
    <title> 
      :: Staff Information
    </title>     
    <!-- Bootstrap CSS CDN -->     
    <link href="../../assets/images/favicon.png" rel="icon" type="image/png"> 
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="../../assets/css/style4.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/animate.css" rel="stylesheet">
    <link href="../../assets/css/datepicker.css" rel="stylesheet">
    <link href="../../assets/css/timepicker.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-toggle.min.css" rel="stylesheet">
  </head>   
  <body> 
    <div class="wrapper"> 
      <!-- Sidebar  -->       
      <nav id="sidebar"> 
        <div class="sidebar-header"> 
          <h3>eCourier</h3> 
          <strong>eCourier</strong> 
        </div>         
        <ul class="list-unstyled components" data-pg-collapsed> 
          <li> 
            <a href="../orders"><i class="fas fa fa-home"></i>Orders</a> 
          </li>           
          <li> 
            <a href="../parcel"><i class="fas  fa fa-product-hunt"></i>Add Parcel</a> 
          </li>
          <li class="active"> 
            <a href="./"><i class="fas fa fa-user"></i>Staff Info</a> 
          </li>
          <li> 
            <a href="../draft"><i class="fa fa-folder-open"></i>Draft</a> 
          </li>
          <li> 
            <a href="../settings"><i class='fas fa fa-gears'></i>Settings</a> 
          </li>      
          <li> 
            <a href="../logout/"><i class="fas fa fa-sign-out"></i>Logout</a> 
          </li>           
        </ul>         
      </nav>
      <div id="content" style="background-color: #eaeff3;"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light" data-pg-collapsed> 
          <div class="container-fluid"> 
            <button type="button" id="sidebarCollapse" class="btn btn-info"> 
              <i class="fas  fa fa-align-left"></i> 
              <span></span> 
            </button>             
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> </div>             
          </div>           
        </nav>
        <section class="detail-sec" data-pg-collapsed>
          <div class="detail-wrap">
            <div class="row">
              <div class="col-sm-8">
                <p class="detail-p">Update <span>Staff Info</span></p> 
              </div>
            </div>
          </div>
        </section>
        <section class="my-account">
          <div class="row">
            <div class="col-sm-8" data-pg-collapsed>
              <div class="my-account-wrap" data-pg-collapsed>
                <h2>Update Staff Info</h2>
                <form role="form" novalidate autocomplete="on" onsubmit="return updateStaffInfo(this)"> 
                  <div class="check-error hidden">
                    <i class="fa fa-warning hidden"></i> 
                    <p></p> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <label class="control-label">Fullnames</label>                     
                    <input type="text" class="form-control" value="" disabled> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <label class="control-label">Email</label>                     
                    <input type="email" class="form-control" placeholder="Email" name="email" value=""> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <label class="control-label">Phone</label>                     
                    <input type="text" class="form-control" placeholder="Phone" name="phone" value=""> 
                  </div>                   
                  <div class="form-group" data-pg-collapsed> 
                    <label class="control-label">Password</label>                     
                    <input type="password" class="form-control" placeholder="Password" name="pass"> 
                  </div>                   
                  <button type="submit" class="btn btn-admin btn-danger" data-pg-collapsed>
                    <span>Update Info</span>
                    <img src="../../assets/images/loading.gif" width="20" height="20" class="hidden">
                  </button>
                </form>
              </div>               
            </div>
            <div class="col-sm-4" data-pg-collapsed>
              <div class="my-account-wrap" data-pg-collapsed>
                <h2>Staff Address</h2>
                <form role="form" novalidate autocomplete="on" onsubmit="return updateStaffAddress(this)">
                  <div class="check-error hidden" data-pg-collapsed>
                    <i class="fa fa-warning hidden"></i> 
                    <p></p> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <label class="control-label" for="formInput18">Country of Origin</label>                     
                    <select name="country" class="form-control"> 
                        <!-- Show countries -->
                        <option value='0' selected>Select country</option>"                     
                    </select>
                  </div>                   
                  <div class="form-group" data-pg-collapsed> 
                    <label class="control-label" for="formInput18">Select timezone</label>                     
                    <select name="timezone" class="form-control"> 
                        <!-- Show timezone -->
                        <option value='0' selected>Euroupe/Istanbul</option>                    
                    </select>
                  </div>                   
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="Current State" name="state" value=""> 
                  </div>                   
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="Current Address" name="address" value=""> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                      <input type="text" class="form-control dob" placeholder="Date of Birth" name="dob" value=""> 
                  </div>
                    <!-- Show courier branch name -->
                  <div class="form-group" data-pg-collapsed> 
                      <input type="text" class="form-control" placeholder="Branch" value="" disabled> 
                  </div>
                  <button type="submit" class="btn btn-admin2 btn-info submit" data-pg-collapsed>
                    <span>Update</span>
                    <img src="../../assets/images/loading.gif" width="20" height="20" class="hidden">
                  </button>                   
                </form>
              </div>               
            </div>
          </div>
        </section>         
      </div>       
      <!-- Page Content  -->       
    </div>     
    <!-- Bootstrap and core JavaScript
    ================================================== -->     
    <!-- Placed at the end of the document so the pages load faster -->     
    <script src="../../assets/js/jquery.min.js"></script>     
    <script src="../../assets/js/datepicker.js"></script>
    <script src="../../assets/js/timepicker.js"></script>     
    <script src="../../assets/js/jscolor.js"></script> 
    <script src="../../assets/js/bootstrap-toggle.min.js"></script> 
    <script src="../../assets/js/bootstrap-notify-min.js"></script> 
    <script src="../../assets/js/components.js"></script>     
    <script src="../../assets/js/_admin.js"></script>     
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
              	$('#content').toggleClass('active-content');
            });
        });
    </script>     
  </body>   
</html>