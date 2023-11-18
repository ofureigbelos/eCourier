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
      :: Courier orders
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
            <a href="orders"><i class="fas fa fa-home"></i>Orders</a> 
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
      <!-- Page Content  -->       
      <div id="content" style="background-color: #fff;"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
          <div class="container-fluid"> 
            <button type="button" id="sidebarCollapse" class="btn btn-info"> 
              <i class="fas  fa fa-align-left"></i> 
              <span></span> 
            </button>             
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>             
          </div>           
        </nav>         
        <h1>Consignment Orders</h1> 
        <section class="admin-sec"> 
          <div class="container-fluid"> 
            <div class="row" style="background-color: #ffffff"> 
              <div style="padding: 5px 10px;">  
                <p style="color: red;font-weight: bold;">WARNING: Please delete or rename the installation folder for security reasons.</p>
              </div>               
              <div style="padding: 5px 10px;">  
                <p style="color: red;font-weight: bold;">Good Afternoon</p>
              </div>               
            </div>             
          </div>           
        </section>
        <div id="overlay">
          <div>
            <img src="../../assets/images/loading.gif" width="64px" height="64px" />
          </div>
        </div>
        <div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
          <!--Pagination Setting:-->
          <br> 
          <select name="pagination-setting" class="pagination-setting" id="pagination-setting"> 
            <option value="all-links">Display All Page Link</option>             
            <option value="prev-next">Display Prev Next Only</option>             
          </select>           
        </div>         
        <div>
          <div class="table-responsive">
            <table class="table table-hover table-striped" id="order-table" data-pg-collapsed> 
              <thead> 
                <tr> 
                  <th class="text-center">Date Added</th> 
                  <th class="text-center">Waybill No</th> 
                  <th>Customers</th> 
                  <th>Destination To</th>
                  <th>Type & Mode</th> 
                  <th class="text-center">Status</th> 
                </tr>                 
              </thead>
              <tbody id="tbody" class="pagination-result">
                  <tr onclick="viewOrders(341585)" style="cursor:pointer;"> 
                    <td class="span1">
                        Dec 24th 2018
                    <span>( 33weeks ago )</span></td> 
                    <td style="text-align:center; padding-top:25px;" class="span2">
                      <a href="javascript:void(0)">ECYE502587</a>
                    </td>                   
                    <td>From: Peter <span>To: Udemy</span></td> 
                    <td>220 <span>Pickup Date: Dec 24th 2018</span></td>
                    <td>
                        Air Frieght
                        <span>Cash</span>
                        <span>3000</span>
                    </td>
                    <td style="text-align: center;padding-top:25px;"><small class="label" style="background-color: #e60000;">Canceled</small></td>
                </tr>
              </tbody>
            </table>
            <!--PAGINATION OUTPUTS-->
            <div id="pagination_pointer"></div>
          </div>           
        </div>         
      </div>       
    </div>     
    <!-- Bootstrap and core JavaScript
    ================================================== -->     
    <!-- Placed at the end of the document so the pages load faster -->     
    <script src="../../assets/js/jquery.min.js"></script>     
    <script src="../../assets/js/datepicker.js"></script>
    <script src="../../assets/js/timepicker.js"></script>     
    <script src="../../assets/js/jscolor.js"></script>     
    <script src="../../assets/js/bootstrap-toggle.min.js"></script>     
    <script src="../../assets/js/components.js"></script>     
    <script src="../../assets/js/_admin.js"></script>     
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
              	$('#content').toggleClass('active-content');
            });
        });
        
        //Loading pagination
        var url = DOMAIN+"/staff_admin/orders/__pagination"+EXT;
    
        getPaginationResult(url,false);
        changePagination($("#pagination-setting"),url,false);
        function printResult(result){
            var json = JSON.parse(result);
            $(".pagination-result").html(json.data);
            $("#pagination_pointer").html(json.pagination);
        }
    </script>     
  </body>   
</html>