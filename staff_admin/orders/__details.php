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
      :: Shipping to Name
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
          <li class="active"> 
            <a href="./"><i class="fas fa fa-home"></i>Orders</a> 
          </li>           
          <li> 
            <a href="../parcel"><i class="fas  fa fa-product-hunt"></i>Add Parcel</a> 
          </li>
          <li> 
            <a href="../info"><i class="fas fa fa-user"></i>Staff Info</a> 
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
          <div class="container-fluid" data-pg-collapsed> 
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
              <div data-pg-collapsed class="col-sm-10">
                <p class="detail-p">Invoice No: <span>03930393;?></span></p>
                <p class="detail-p">Waybill No: <span>AWS90PUSHHD;?></span></p> 
              </div>
              <div class="col-sm-2">
                <div class="toggle-drop">
                  <div class="btn-group" id="dropdown"> 
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Pending
                      <span class="caret"></span>
                    </button>                     
                    <ul class="dropdown-menu" role="menu" data-pg-collapsed> 
                      <!--STATUS CHANGE-->
                      <li>
                        <a href="" onclick="changeStatus(03930393, 0)">Pending</a>
                      </li>
                      <li class="divider"></li>                       
                      <li>
                        <a href="javascript:void(0)" onclick="changeStatus(03930393,-1)">Delete Order</a>
                      </li>
                    </ul>                     
                  </div>
                </div>                 
              </div>
            </div>
          </div>
        </section>
        <section class="my-account">
          <div class="row">
            <div class="col-sm-8">
              <div class="my-account-wrap">
                <p>Updating this will not send email to the receivers</p>
                <h2>Update Shipping Details</h2>
                <form role="form" onsubmit="return updateShipping(this)" novalidate>
                  <div class="check-error hidden" data-pg-collapsed>
                    <i class="fa fa-warning hidden"></i> 
                    <p style="display: inline-block"></p> 
                  </div>
                  <div class="row">
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Receiver's Name" name="r-name" value=""> 
                      </div>                       
                    </div>
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Receiver's Phone" name="r-phone" value=""> 
                      </div>                       
                    </div>
                    <div class="col-sm-12" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Receiver's Address" name="r-address" value=""> 
                      </div>                       
                    </div>
                    <div data-pg-collapsed class="col-sm-6">
                      <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Receiver's Email" name="r-email" value=""> 
                      </div>                       
                    </div>
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Payment Amount" name="amount" value=""> 
                      </div>                       
                    </div>
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control docs-date" placeholder="Pickup Date" name="p-date" autocomplete="off" value=""> 
                      </div>                       
                    </div>
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control docs-time" placeholder="Pickup Time" name="p-time" autocomplete="off" value=""> 
                      </div>                       
                    </div>
                  </div>                   
                  <button type="submit" class="btn btn-primary btn-admin submit">
                    <span>Submit</span>
                    <img src="../../assets/images/25.gif" width="25" height="25" class="hidden">
                  </button>                   
                  <input type="hidden" class="form-control" name="invoice" value=""> 
                </form>
              </div>
              <div class="my-account-wrap">
                <p>Adding a new status here will send a mail with status update to the receiver</p>
                <h2>Add New Status</h2>
                <form role="form" method="post" onsubmit="return addNewStatus(this)" novalidate>
                  <div class="check-error hidden" data-pg-collapsed>
                    <i class="fa fa-warning hidden"></i> 
                    <p></p> 
                  </div>
                  <div class="row">
                    <div class="col-sm-6" data-pg-collapsed>
                      <select id="country" name="n-des" class="form-control">
                        <!-- Show countries -->
                        <option value='0' selected>Select country</option>
                      </select>                       
                    </div>
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control docs-date" placeholder="Date of arrival" name="n-date" autocomplete="off"> 
                      </div>                       
                    </div>
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <input type="text" class="form-control docs-time" placeholder="Time of arrival" name="n-time" autocomplete="off"> 
                      </div>                       
                    </div>
                    <div class="col-sm-6" data-pg-collapsed>
                      <div class="form-group"> 
                        <select class="form-control" name="status">
                          <!-- Show status -->
                          <option value="0" selected>Pending</option>
                        </select>
                      </div>                       
                    </div>
                    <div class="col-sm-12" data-pg-collapsed>
                      <div class="form-group" data-pg-collapsed> 
                        <textarea class="form-control" placeholder="Comments" name="n-comment"></textarea>                         
                      </div>                       
                    </div>
                    <div class="col-sm-12" data-pg-collapsed>
                      <div class="checkbox" data-pg-collapsed> 
                        <label class="control-label"> 
                          <input type="checkbox" name="important" >Set as important
                        </label>                   
                    </div>                       
                    </div>
                    <input type="hidden" class="form-control" name="invoice" value="<?php echo 'invoice';?>">
                  </div>                   
                  <button type="submit" class="btn btn-danger btn-admin2 submit" data-pg-collapsed>
                    <span>Add Status Update</span>
                    <img src="../../assets/images/25.gif" width="25" height="25" class="hidden">
                  </button>                   
                </form>
              </div>               
            </div>
            <div class="col-sm-4" data-pg-collapsed>
              <div class="my-account-wrap2">
                <h2>SHIPPING PROGRESS</h2>
                <p style="padding-top:5px;"><span style="font-weight:bold;font-size:14px;">Argentina</span> - Aug 13 2019 - 03:00 am</p>
              </div>
              <div class="my-account-wrap2" data-pg-collapsed>
                <h2>CUSTOMER INFO</h2>
                <p><?php echo "<span style='font-weight:bold;font-size:13px;'>From:</span> " . 'Udemy';?></p>
                <p><?php echo "<span style='font-weight:bold;font-size:13px;'>Receiver:</span> " . 'Peter';?></p>
                <p><?php echo "<span style='font-weight:bold;font-size:13px;'>To Country:</span> " . 'UK';?></p>
                <hr>
                <h2>ARRIVAL INFO</h2>
                <p><?php echo "<span style='font-weight:bold;font-size:13px;'>Pickup Date:</span> " . '10/04/2019';?></p>
                <p><?php echo "<span style='font-weight:bold;font-size:13px;'>Time:</span> " . '10:20pm';?></p>
                <hr>
                <h2>REC SHIPPING DETAILS</h2>
                <p><?php echo 'Address';?></p>
                <p><a href="<?php echo 'Tel:'.'0393903030';?>"><?php echo '0393903030';?></a></p>
                <p><a href="<?php echo 'mailto:'.'email';?>"><?php echo 'email';?></a></p>
                <hr>
                <h2>METHOD</h2>
                <p><?php echo 'Air Freight';?></p>
                <p><?php echo '3,000'?></p>
                <p><?php echo 'Cash';?></p>
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
            
            $("[name='status']").change(function(){
                var status = $("[name='status']").val();
                var newLoc = $("[name='n-flight']").val();
                var name = $("[name='r-name']").val();
                
                if (newLoc!=="*||*") {
                    if (status==1) {
                        $("[name='n-comments']").html("Your consignment status is now undergoing processing routine, You'll receive a mail on every status updates.");   
                    }
                    else if(status==2){
                         $("[name='n-comments']").html("Your consignment has been updated to transit mode, This indicates that your parcel has left the warehouse, You can check the online status for more insight.");
                    }
                    else{
                        $("[name='n-comments']").html("");
                    }
                }
                else{
                    $("[name='n-comments']").html("");
                }
            });
        });
    </script>     
  </body>   
</html>