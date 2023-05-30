<?php
if($_POST['proc'] == 'logout'){

// unset($_SESSION['USRLOGIN']);
// unset($_SESSION['HR_SERV_MENU']);
// unset($_SESSION['USRLOGIN_ASSET']);
// unset($_SESSION['ASSET_SERV_MENU']);
// unset($_SESSION['USRLOGIN_WF']);
// unset($_SESSION['WF_SERV_MENU']);

session_start();
session_destroy();
//  session_unset();
//  session_destroy();
 header('Location: http://203.150.224.249/demo/TSRI_ERP_64_v1/');
 exit;
}
?>