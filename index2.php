






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" >


    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <link rel="icon" href="image/favicon.png">
    <title>สำนักงานคณะกรรมการส่งเสริมวิทยาศาวตร์ วิจัยและนวัตกรรม (สกสว.)</title>
  </head>


  <body>


<div class="bg_login">
    <div class="d-flex justify-content-center ">
        <div class="shadow-sm p-3 mb-5 bg-white rounded box_form_login">
            <div class="row">
                  <div class="col-xl-12 text-center">
                      <img src="image/login/logo.jpg" class="logo_login" alt="">
                      <span>สำนักงานคณะกรรมการส่งเสริมวิทยาศาวตร์ วิจัยและนวัตกรรม (สกสว.)</span>
                  </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                        <form action="">
                            <div class="row">
                              <div class="col-xl-12">
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                    <div class="input-group mb-3">
                                        <i class="fas fa-user-alt input-group-text"></i>
                                        <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Username" value="" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-12">
                               <label for="usrname"><span class="glyphicon glyphicon-user"></span> Password</label>
                                  <div class="input-group mb-3">
                                        <i class="fas fa-key input-group-text"></i>
                                        <input type="password" class="form-control pass-swap" placeholder="Password">
                                        <div class="input-group-append">
                                          <button class="btn btn-light">
                                              <i class="fa fa-eye"></i>
                                          </button>
                                        </div>  
                                  </div>        
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                  
                                  <button type="button" class="btn_login" onclick="chkfromLogin()"> เข้าสู่ระบบ  </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function(){
     // กรณีใช้ร่วมกับ bootstrap และ fontawesome 
     $(document.body).on("click","[class*='fa-eye']",function(){
         $(this).toggleClass("fa-eye-slash fa-eye");  
         let ele = $(this).closest(".input-group-append").siblings(".pass-swap");
         let swap_attr = (ele.attr("type")=="password")?"text":"password";
         ele.attr("type",swap_attr);         
     });     
});
</script>

  
<script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>