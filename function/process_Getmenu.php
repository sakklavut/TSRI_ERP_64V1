<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',0);
$url = "http://localhost/tsri_hr/api/menu_service.php";
$usr_us = array("userName" => $_POST['username'] ,  "passWord" =>$_POST['password']);
$ch_us = curl_init();
curl_setopt($ch_us, CURLOPT_URL, $url);
curl_setopt($ch_us, CURLOPT_POST, 1);
curl_setopt($ch_us, CURLOPT_POSTFIELDS, json_encode($usr_us));
curl_setopt($ch_us, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch_us, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch_us);

if ($response === false) {
    echo "cURL Error: " . curl_error($ch_us);
} else {
    
}
curl_close($ch_us);
$menu_data = json_decode( json_encode($response), true);
echo '<pre>';
print_r($menu_data);
echo '</pre>';
exit;
// if($WS_DATA['statusCode']==200){
//    $_SESSION["WF_USER_ID"] = $WS_DATA["USR_ID"];
//    $_SESSION["PER_ID_HR"] = $WS_DATA["HR_PER_ID"];
//    $_SESSION["U"] = $WS_DATA["U"];
//    $_SESSION["P"] = $WS_DATA["P"];
//    $_SESSION["WF_USER_NAME"] = $WS_DATA["prefixName"].$WS_DATA["empName"]." ".$WS_DATA["empLastName"];
//    print_r($_SESSION);
//     echo "success";
// }else{
//     echo "error";
// }

?>