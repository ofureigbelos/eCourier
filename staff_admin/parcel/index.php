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
      :: Add Parcels
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
    <div class="wrapper" data-pg-collapsed>
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
          <li class="active"> 
            <a href="./"><i class="fas  fa fa-product-hunt"></i>Add Parcel</a> 
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
      <div id="content" style="background-color: #eaeff3;" data-pg-collapsed>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
              <i class="fas  fa fa-align-left"></i>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
          </div>
        </nav>
        <section class="detail-sec">
          <div class="detail-wrap" data-pg-collapsed>
            <div class="row">
              <div class="col-sm-8">
                <p class="detail-p">Add <span>New products</span></p>
              </div>
            </div>
          </div>
        </section>
        <section class="my-account">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <form role="form" onsubmit="return addParcel(this)" novalidate autocomplete="on"> 
                <div class="check-error hidden">
                  <i class="fa fa-warning hidden"></i> 
                  <p></p> 
                </div>
                <div class="my-account-wrap" data-pg-collapsed>
                  <p style="margin-bottom: 30px;">Adding new courier tracking details will send a mail to the receiver.</p>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Waybill Number</label>
                        <input type="text" class="form-control" name="waybill" value="<?php echo 'AWS93PSOSM';?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Invoice Number</label>
                        <input type="text" class="form-control" name="invoice" value="<?php echo '90393930';?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="my-account-wrap" data-pg-collapsed>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Sender/Shipper Name</label>
                        <input type="text" class="form-control" name="sname" placeholder="Sender name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Sender/Shipper Email</label>
                        <input type="email" class="form-control" name="semail" placeholder="Sender email">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Sender/Shipper Address</label>
                        <input type="text" class="form-control" name="saddress" placeholder="Sender address">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Sender/Shipper Phone</label>
                        <input type="text" class="form-control" name="sphone" placeholder="Sender phone">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Receiver Name</label>
                        <input type="text" class="form-control" name="rname" id="rname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Receiver Number</label>
                        <input type="text" class="form-control" name="rphone">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Receiver Email</label>
                        <input type="email" class="form-control" name="remail" placeholder="example@mail.com">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Receiver Address</label>
                        <input type="text" class="form-control" name="raddress">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="my-account-wrap" data-pg-collapsed>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Shipment Type</label>
                        <select class="form-control" name="stype">
                          <option value="*||*">-- Choose one --</option>
                          <option value="Document Parcel" selected>Documents</option>
                          <option value="Container Vessels">Container Vessels</option>
                          <option value="Parcels">Parcels</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Shipment Mode</label>
                        <select class="form-control" name="smode">
                          <option value="*||*">-- Choose one --</option>
                          <option value="Air Freight" selected>Air Freight</option>
                          <option value="Sea Freight">Sea Freight</option>
                          <option value="Road Freigh">Road Freight</option>
                          <option value="Train Freight">Train Freight</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Payment Mode</label>
                        <select class="form-control" name="payment-mode">
                          <option value="*||*">-- Choose one --</option>
                          <option value="Bank Transfer">Bank Transfer</option>
                          <option value="Western Union">Western Union</option>
                          <option value="MoneyGram">MoneyGram</option>
                          <option value="Cash Payment" selected>Cash Payment</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Product Description</label>
                        <input type="text" class="form-control" name="pinfo" placeholder="i.e iPhone 5 and iPad 2 mini">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="my-account-wrap" data-pg-collapsed>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Weight</label>
                        <input type="text" class="form-control" name="weight" placeholder="0.4 kg">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Qty</label>
                        <input type="text" class="form-control" name="qty" placeholder="3">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Pickup Date</label>
                        <input type="text" class="form-control docs-date" name="pdate" autocomplete="off">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Pickup Time</label>
                        <input type="text" class="form-control docs-time" name="ptime" autocomplete="off">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Amount</label>
                        <input type="text" class="form-control" name="amount" placeholder="34,000">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label" for="formInput52">Shipment From</label>
                        <select id="des_from" name="des_from" class="form-control">
                          <!-- Show countries -->
                          <option value='0' selected>Select country</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label" for="formInput52">Shipment To</label>
                        <select id="des_to" name="des_to" class="form-control">
                          <!-- Show countries -->
                          <option value='0' selected>Select country</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12" data-pg-collapsed>
                      <div class="form-group">
                        <label class="control-label">Comments</label>
                        <textarea class="form-control" rows="2" name="comments"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <button type="submit" class="btn btn-primary btn-admin2 submit">
                        <small style="font-size: 15px;">Add Product</small>
                        <img src="../../assets/images/25.gif" width="30" height="30" class="hidden">
                      </button>
                    </div>
                  </div>
                </div>
              </form>
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
            
            //Custom message for comments section
            $("#des_to").change(function(){
                var des_to = $("#des_to").val();
                var name= $("#rname").val();
                if (des_to != 0) {
                    if (name !=="") {
                        $("[name='comments']").html("Parcel delivery to " + name.toUpperCase() + " has been registerd and received by one of our agency.");
                    }
                }
                else{
                    $("[name='comments']").html("");
                }
            });
        });
    </script>
  </body>
</html>
