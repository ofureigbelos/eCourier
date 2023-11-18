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
      :: Draft Orders
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
          <li class="active"> 
            <a href="./"><i class="fa fa-folder-open"></i>Draft</a> 
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light" data-pg-collapsed> 
          <div class="container-fluid" data-pg-collapsed> 
            <button type="button" id="sidebarCollapse" class="btn btn-info"> 
              <i class="fas  fa fa-align-left"></i> 
              <span></span> 
            </button>             
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>             
          </div>           
        </nav>         
        <h1>Undraft orders</h1> 
        <section class="admin-sec" data-pg-collapsed> 
          <div class="container-fluid" data-pg-collapsed> 
            <div class="row"> 
              <div> 
                <div class="nav-tabs-border"> 
                  <ul class="nav nav-tabs" data-pg-collapsed> 
                    <li class="active"> 
                      <a href="#tab1" data-toggle="tab">Filter by</a> 
                    </li>                     
                    <li> 
                      <a href="#tab2" data-toggle="tab">Status</a> 
                    </li>                     
                    <li> 
                      <a href="#tab3" data-toggle="tab">Date</a> 
                    </li>                     
                  </ul>                   
                  <div class="tab-content" data-pg-collapsed> 
                    <div class="tab-pane active" id="tab1" data-pg-collapsed> 
                      <div class="form-group"> 
                        <input type="text" class="form-control" id="formInput40" placeholder="Type to begin search"> 
                      </div>                       
                    </div>                     
                    <div class="tab-pane" id="tab2" data-pg-collapsed> 
                      <div class="form-group"> 
                        <select id="formInput49" class="form-control" name="status" data-pg-collapsed> 
                          <?php
                            foreach($ec['status'] as $key => $value){
                              echo "<option value='".$ec['status'][$key]['value']."'>".$ec['status'][$key]['name']."</option>" ;
                            }
                          ?> 
                        </select>                         
                      </div>                       
                    </div>                     
                    <div class="tab-pane" id="tab3" data-pg-collapsed> 
                      <form role="form" onsubmit="return false"> 
                        <div class="row"> 
                          <div class="col-sm-5"> 
                            <div class="input-group"> 
                              <span class="input-group-addon">From</span> 
                              <input type="date" class="form-control" name="dateFrom" data-toggle="datepicker"> 
                            </div>                             
                          </div>                           
                          <div class="col-sm-5"> 
                            <div class="input-group"> 
                              <span class="input-group-addon">To</span> 
                              <input type="date" class="form-control" name="dateTo"> 
                            </div>                             
                          </div>                           
                          <div class="col-sm-2"> 
                            <button type="submit" class="btn">Go</button>                             
                          </div>                           
                        </div>                         
                      </form>                       
                    </div>                     
                  </div>                   
                </div>                 
              </div>               
            </div>             
          </div>           
        </section>         
        <div data-pg-collapsed> 
          <div class="table-responsive"> 
            <table class="table table-hover table-striped" id="order-table"> 
              <thead> 
                <tr data-pg-collapsed> 
                  <th class="text-center">Date Added</th> 
                  <th class="text-center">Waybill No</th> 
                  <th>Customers</th> 
                  <th>Destination To</th> 
                  <th>Type & Mode</th> 
                  <th class="text-center">Status</th> 
                </tr>                 
              </thead>               
              <tbody id="tbody" class="pagination-result"> 
                  <!-- Pagination result -->   
              </tbody>               
            </table> 
            <!--PAGINATION OUTPUTS-->
            <div id="pagination_pointer"></div>
          </div>           
        </div>         
        <div style="text-align:center;display: 0;" id="pagination">  </div>         
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
        
        //Loading pagination
        var url = DOMAIN+"/staff_admin/draft/__pagination"+EXT;
    
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