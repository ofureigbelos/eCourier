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
      :: Admin Settings
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
          <li> 
            <a href="../info"><i class="fas fa fa-user"></i>Staff Info</a> 
          </li>
          <li> 
            <a href="../draft"><i class="fa fa-folder-open"></i>Draft</a> 
          </li>
          <li class="active"> 
            <a href="./"><i class='fas fa fa-gears'></i>Settings</a> 
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
                <p class="detail-p">Update <span>Site settings</span></p> 
              </div>
            </div>
          </div>
        </section>
        <section class="my-account">
          <div class="row">
            <div class="col-sm-8">
              <div class="my-account-wrap" data-pg-collapsed>
                <h2>Site Settings</h2>
                <form role="form" novalidate autocomplete="on" enctype="multipart/form-data" onsubmit="return updateSettings(this)">
                  <div class="check-error hidden" data-pg-collapsed>
                    <i class="fa fa-warning hidden"></i> 
                    <p></p> 
                  </div>
                    <img src="../../assets/images/favicon.png" class="favicon" /> 
                  <div class="form-group" data-pg-collapsed> 
                    <label class="control-label">site Favicon</label>                     
                    <input type="file" name="favicon"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                      <input type="text" class="form-control" placeholder="site Name" name="name" value="<?php echo '';?>"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="site Title" name="title" value="<?php echo '';?>"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="site Description" name="desc" value="<?php echo '';?>"> 
                  </div>                   
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control jscolor" placeholder="broser Color" name="color" value="<?php echo '';?>"> 
                  </div>                   
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="wayBill No" name="waybill" value="<?php echo '';?>"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <input type="email" class="form-control" placeholder="site Email" name="email" value="<?php echo '';?>"> 
                  </div>
                  <button type="submit" class="btn btn-admin btn-danger submit" data-pg-collapsed>
                    <span>Update</span>
                    <img src="../../assets/images/25.gif" width="20" height="20" class="hidden">
                  </button>                   
                </form>
              </div>
              <div class="my-account-wrap" data-pg-collapsed>
                <h2>Parcel Status Settings</h2>
                <div class="form-group" data-pg-collapsed> 
                  <label class="control-label">Select Status To Update</label>                   
                  <select id="selectStatus" class="form-control"> 
                    <!--Display Status-->
                    <option value="0">Pending</option>
                  </select>
                </div>
                <div style="position: relative;" data-pg-collapsed>
                  <form role="form" onsubmit="return updateStatusSettings(this)" novalidate autocomplete="off" id="updateStatus" data-pg-collapsed> 
                    <div class="row">
                      <div class="col-xs-6" data-pg-collapsed style="padding-right: 2px;">
                        <div class="form-group" data-pg-collapsed> 
                          <input type="text" class="form-control" placeholder="status Name" name="sname"> 
                        </div>                         
                      </div>
                      <div data-pg-collapsed class="col-xs-3" style="padding-right: 2px;">
                        <div class="form-group" data-pg-collapsed> 
                          <input type="text" class="form-control" placeholder="status Value" name="svalue"> 
                        </div>                         
                      </div>
                      <div data-pg-collapsed class="col-xs-3">
                        <div class="form-group" data-pg-collapsed> 
                          <input type="text" class="form-control jscolor" placeholder="status Color" name="scolor"> 
                        </div>                         
                      </div>
                      <div data-pg-collapsed class="col-md-12">
                        <div class="form-group" data-pg-collapsed> 
                          <input type="hidden" class="form-control" name="sid" value="">
                        </div>                         
                      </div>
                    </div>
                    <button type="submit" class="btn btn-admin btn-danger submit" data-pg-collapsed>
                      <span>Update</span>
                      <img src="../../assets/images/25.gif" width="20" height="20" class="hidden">
                    </button>
                    <button type="button" class="btn btn-admin btn-primary btn-sm" style="margin-left: 20px;" id="addNew" data-pg-collapsed>
                      <span>Add new</span>
                    </button>
                  </form>
                  <form role="form" onsubmit="return addNewStatusSettings(this)" novalidate autocomplete="off" id="addNewStatus" data-pg-collapsed> 
                    <div class="row">
                      <div class="col-xs-6" data-pg-collapsed style="padding-right: 2px;">
                        <div class="form-group" data-pg-collapsed> 
                          <input type="text" class="form-control" placeholder="status Name" name="sname"> 
                        </div>                         
                      </div>
                      <div data-pg-collapsed class="col-xs-3" style="padding-right: 2px;">
                        <div class="form-group" data-pg-collapsed> 
                          <input type="text" class="form-control" placeholder="status Value" name="svalue"> 
                        </div>                         
                      </div>
                      <div data-pg-collapsed class="col-xs-3">
                        <div class="form-group" data-pg-collapsed> 
                          <input type="text" class="form-control jscolor" placeholder="status Color" name="scolor"> 
                        </div>                         
                      </div>
                    </div>
                    <button type="submit" class="btn btn-admin btn-danger submit" data-pg-collapsed>
                      <span>Add new</span>
                      <img src="../../assets/images/25.gif" width="20" height="20" class="hidden">
                    </button>
                    <button type="button" class="btn btn-admin btn-primary btn-sm hidden" style="margin-left: 20px;" id="back" data-pg-collapsed>
                      <span>Back</span>
                    </button>
                  </form>
                </div>
              </div>               
            </div>
            <div class="col-sm-4">
              <div class="my-account-wrap" data-pg-collapsed>
                <h2>Site Notification</h2>
                <form>
                  <div data-pg-collapsed class="notify">
                    <label class="checkbox-inline">
                        <input type="checkbox" checked data-toggle="toggle" name="emailNof" value="<?php echo '';?>"> Email Notification
                    </label>
                  </div>
                  <div data-pg-collapsed class="notify">
                    <label class="checkbox-inline">
                      <input type="checkbox" checked data-toggle="toggle" name="emailVal" value="<?php echo '';?>"> Email Validation
                    </label>
                  </div>
                  <div data-pg-collapsed class="notify">
                    <label class="checkbox-inline">
                      <input type="checkbox" data-toggle="toggle" name="siteStatus" value="<?php echo '';?>"> Site Status
                    </label>
                  </div>
                </form>
              </div>
              <div class="my-account-wrap">
                <h2>Smtp mail settings</h2>
                <form role="form" novalidate autocomplete="on" onsubmit="return updateSmtp(this)">
                  <div class="check-error hidden" data-pg-collapsed>
                    <i class="fa fa-warning hidden"></i> 
                    <p></p> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                      <input type="text" class="form-control" placeholder="smtp username" name="smtp_username" value="<?php echo '';?>"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="smtp password" name="smtp_password" value="<?php echo '';?>"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="smtp host" name="smtp_host" value="<?php echo '';?>"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="smtp from email" name="smtp_from_email" value="<?php echo '';?>"> 
                  </div>
                  <div class="form-group" data-pg-collapsed> 
                    <input type="text" class="form-control" placeholder="smtp from name" name="smtp_from_name" value="<?php echo '';?>"> 
                  </div>
                  <button type="submit" class="btn btn-admin btn-danger submit" data-pg-collapsed>
                    <span>Update smtp</span>
                    <img src="../../assets/images/25.gif" width="20" height="20" class="hidden">
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
        
        //Update status
        $("#selectStatus").change(function(){
            $("#back").click();
            $("#updateStatus").css({'display': 'block'});
            //Settings update new status
            baseController.animateElem(function(){
                $("#updateStatus").css({'opacity': '10', 'position': 'relative', 'z-index': '10'});
                $("#addNewStatus").css({'opacity': '0', 'position': 'absolute', 'z-index': '0'});
            },$("#back"),$("#updateStatus"), 'fadein');
            
            
            //
            var param = "getStatus="+$("#selectStatus").val();
            $.post(XHR+"getStatusInfo"+EXT,param,function(result){
                
                var json = JSON.parse(result);
                
                $("#updateStatus").find("[name='sname']").val(json.name);
                $("#updateStatus").find("[name='svalue']").val(json.value);
                $("#updateStatus").find("[name='scolor']").val(json.color);
                $("#updateStatus").find("[name='sid']").val(json.id);
            });
        });

            
    </script>     
  </body>   
</html>