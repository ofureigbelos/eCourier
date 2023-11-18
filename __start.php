<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content=""> 
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Failed to connect to the database!</title>
    <link href="assets/images/favicon.png" rel="icon" type="image/png"> 
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"> 
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="install/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <section class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="indicator">
              <h1>Terms of use</h1>
              <span class="indicator-label">0</span>
              <div class="terms">
                <h5>LICENSE AGREEMENT: one (1) For Udemy Course (site) Install</h5>
                <br>
                <b class="bold">You CAN:</b>
                <br> 
                <p style="color: red;padding-left: 20px; margin:0;font-size: 16px;" data-pg-collapsed>Unknown database 'ecourierss'</p>
                <p style="color: red; padding-left: 20px;margin:0;font-size: 16px;" data-pg-collapsed>Table name ec_config does'nt exist</p>
                <hr>
                <div>
                  <input type="checkbox" name="agree" id="agree">
                  <label for="agree"> I agree to the terms of use and privacy policy</label>
                </div>
                <a class="btn btn-lg btn-danger" style="margin-top:20px;" href="javascript:void(0)" disabled>Begin Installation 
                  <svg viewbox="0 0 19 14" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path fill="currentColor" d="M18.6 6.9v-.5l-6-6c-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2l5 5H1c-.5 0-.9.4-.9.9s.4.8.9.8h14.4l-4 4.1c-.3.3-.3.9 0 1.2.2.2.4.2.6.2.2 0 .4-.1.6-.2l5.2-5.2h.2c.5 0 .8-.4.8-.8 0-.3 0-.5-.2-.7z"></path>
                  </svg>
                </a>
              </div>               
            </div>             
          </div>
        </div>
      </div>
    </section>
    <section data-pg-collapsed>
      <div class="container">
</div>
    </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script>
        $(function() {
            $('#agree').change(function() {
                if($(this).is(":checked")) { 
                    $('.terms .btn').attr('disabled', false);
                } else {
                   $('.terms .btn').attr('disabled', true);
                }
                
                // Check if btn is not disabled
                $('.terms .btn').click(function(){
                    if ($(".terms .btn").attr('disabled')) {} 
                    else {
                        //location.replace(DOMAIN + '/install/');
                    }
                });
                
            });
        });
    </script>
  </body>
</html>
