<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',0);

/* $USER_NAME = $_POST['username'];
$PASSWORD = $_POST['password']; */

        $url = "http://localhost/tsri_hr/api/AuthenJwtdecode.php";

        $data = array("userName" => "wm",  "passWord" =>"wm@456");

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if ($response === false) {
            echo "cURL Error: " . curl_error($ch);
        } else {
        
            
        }
        curl_close($ch);
        $WS_DATA = json_decode($response,true);
        print_r($WS_DATA);
        if($WS_DATA['statusCode']==200){
            echo $WS_DATA['statusCode'];
            echo $WS_DATA['Token'];
               

        }


?>  
