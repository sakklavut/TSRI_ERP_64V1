<?php
unset($fullname);
if(empty($_SESSION['USRLOGIN_ASSET']['PerName']) && !empty($_SESSION)){
  $fullname =  $_SESSION['USRLOGIN']['PerName'];
}else{
  $fullname = $_SESSION['USRLOGIN_ASSET']['PerName'];
}
$html_0 = '';
if(empty($_SESSION['USRLOGIN'])){

      $html_0 .= '<div class="d-flex justify-content-between">';
      $html_0 .=   '<div class="box_logo">';
      $html_0 .=     '<img class="logo" src="image/logo.png" alt="">';
      $html_0 .=  '</div>';
      $html_0 .=  '<div class="box_login col-md-4 col-6 float-right">';
      $html_0 .=        '<div class="row">';
      $html_0 .=        '<button type="button" id="btn_login" class="btn login float-right" style="width: 265px; height: 50px; margin-left: 80%;!important" ';
      $html_0 .=          '<i class="fas fa-users" style="font-size: 28px;"></i> &nbsp&nbsp เข้าสู่ระบบ &nbsp&nbsp&nbsp  ';
      $html_0 .=        '</button>';
      $html_0 .=    '</div>';
      $html_0 .=  '</div>';
      $html_0 .= '</div>';
}else{
  
      $url_data_p = '../form/ess_profile_his_form.php';
      $param_profile = 'UserName='.$_SESSION['USRLOGIN_WF']['UserName'].'&UserPass='.$_SESSION['USRLOGIN_WF']['UserPass'].'&Menu_link='.url2codes($url_data_p);
      $param_p = url2codes($param_profile);
      $html_0 .= '<div class="d-flex justify-content-between">';
      $html_0 .=   '<div class="box_logo">';
      $html_0 .=     '<img class="logo" src="image/logo.png" alt="">';
      $html_0 .=  '</div>';
      $html_0 .=  '<div class=" col-md-4 col-6 float-right">';
      $html_0 .=        '<div class="row">';
      $html_0 .=        '<button type="button" class="btn login float-right" style="width: 265px; height: 50px; margin-left: 80% !important;" onclick="getprofile()" target="_blank" >';
      $html_0 .=          '<i class="fas fa-user-circle" style="font-size: 28px;"></i>'.'&nbsp'.'&nbsp'.$fullname;
      $html_0 .=        '</button>';
      $html_0 .=        '<button type="button" id="btn_logout" class="btn  login float-right"  style="width: 265px; height: 50px; margin-left: 80% !important;">';
      $html_0 .=          '<i class="fas fa-users"></i> Logout';
      $html_0 .=        '</button>';
      // $html_0 .=        '<a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/public/login_public.php?paramlink='.$param_p.'" >PPP </a>';
      $html_0 .=    '</div>';
      $html_0 .=  '</div>';
      $html_0 .= '</div>';

}
?>
<div class="bg_header" style="width: 100%; height: 175px !important; ">
     <div class="container">
        <?php echo $html_0;?>
     </div>
</div> 
<div class="modal fade" id="Modal_login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <img class="img-fluid logo_product" src="assets/images/images_hr/logo-login.png">
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <i class="icofont icofont-user"></i><input type="text" class="form-control"  value="" id="usrname" name="usrname" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control"  value=""  id="password" name="password" placeholder="Password">
              <span class="toggle-icon" id="toggleIcon" onclick="togglePasswordVisibility()">
              <i class="fas fa-eye" style="font-size: 10px; color: white;"></i>
            </div>
            <div class="checkbox">
              <!-- <label><input type="checkbox" value="" checked>Remember me</label> -->
            </div><br>
              <button type="button" id="login" style="width:697px; height: 50px; background-color:#384a76; border-color: blue" class="btn btn-success btn-block" onclick="chkfromLogin()"><span class="glyphicon glyphicon-off"></span>  เข้าสู่ระบบ  </button>
          </form>
          <div class="row">
            <!-- <h6 style="text-align:center;margin-top: 2%; color:#757575;font-weight: 600;">V.0 (2023 - Safe)</h6> -->
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p> -->
        </div>
      </div>
    </div>
  </div>
</div>


<?php 
 function url2codes($paramLink){
	  return base64_encode($paramLink);;
}

?>
<style>
     .modal-dialog {
          max-width: 800px;
          max-height: 600px;
          width: 90%;
          height: 90%;
     }
     .password-toggle {
    position: relative;
    cursor: pointer;
    }

  .password-toggle .toggle-icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    }
/* ///////////////////// */












</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
     $( document ).ready(function() {
            var SESSION = <?php echo $_SESSION['USRLOGIN']!=''? 0 : 1 ?>;
          if(SESSION == 1){
            // $('#Modal_login').modal('show');
            location.href = 'index2.php';
          }
         
          /// in ///
          $("#btn_login").click(function() {
            chkLogin();
          });
          $("#btn_login").on("mouseenter", function() {
            $("#btn_login").css("background-color", "green");
          });
          $("#btn_login").on("mouseleave", function() {
            $("#btn_login").css("background-color", "#3b4a77");
          });
          /// out ///
          $("#btn_logout").click(function() {
            logout();
          });
          $("#btn_logout").on("mouseenter", function() {
            $("#btn_logout").css("background-color", "red");
          });
          $("#btn_logout").on("mouseleave", function() {
            $("#btn_logout").css("background-color", "#3b4a77");
          });
        
     });

     function chkLogin(){

          $('#Modal_login').modal('show');

     }
     function logout(){
          $.ajax({
            type: 'POST',
            url:'function/process.php',
           // dataType: "json",
            data:{
                proc:'logout' 
              },
            success:(data)=>{ 
              Swal.fire({
                          title: 'รอสักครู่.....',
                          html: 'กำลังออกจากระบบ......',
                          allowEscapeKey: false,
                          allowOutsideClick: false,
                          timer: 1950,
                          didOpen: () => {
                            Swal.showLoading()
                          }
                        }).then((result) => {
                          location.href = 'index.php';
                        })
            }})  
     } 
      function  chkfromLogin(){
        var username = $('#usrname').val();
        var password = $('#password').val();
        $.ajax({
            type: 'POST',
            url:'function/process_login.php',
           // dataType: "json",
            data:{
                username: username,
                password: password,
                proc:'login' 
              },
            success:(data)=>{
              // console.log(data);
                let data2 = data.trim();
                if(data2 == 'success'){
                        Swal.fire({
                          title: 'รอสักครู่...',
                          html: 'กำลังเข้าสู่ระบบ...',
                          allowEscapeKey: false,
                          allowOutsideClick: false,
                          timer: 1900,
                          didOpen: () => {
                            Swal.showLoading()
                          }
                        }).then((result) => {
                          location.href = 'index.php';
                        })
                          
                      
                }else{
                  Swal.fire({
                      icon: 'error',
                      title: 'เกิดข้อผิดพลาด',
                      text: 'Username หรือ Password ไม่ถูกต้อง !',
                    })
                    $('#usrname').focus();
                    $('#password').focus();
                    $('#password').val('');
                }
            }
        })
      }
      function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.getElementById("toggleIcon");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.innerHTML = '<i class="fas fa-eye-slash" style="font-size: 10px; color: white;"></i>';
    } else {
      passwordInput.type = "password";
      toggleIcon.innerHTML = '<i class="fas fa-eye" style="font-size: 10px; color: white; " ></i>';
    }
  }
  function getprofile(URL){
      let decodeurl = '<?php echo $param_p; ?>';
      // location.href ='http://203.151.166.132/TSRI_ERP/TSRI_HR/public/login_public.php?paramlink='+ decodeurl;
      window.open('http://203.151.166.132/TSRI_ERP/TSRI_HR/public/login_public.php?paramlink='+ decodeurl, '_blank');
  }

</script>


