<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',0);
        $date_sent = date('Y-m-d');
        $url_banner = "http://203.151.166.132/TSRI_ERP/TSRI_HR/api/api_portal_banner1849.php";
        $data_date = array("inDate" => $date_sent );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url_banner);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_date));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if ($response === false) {
            echo "cURL Error: " . curl_error($ch);
        } else {
        }
        curl_close($ch);
        $DATA = json_decode($response, true);
        $arr_test = array();
        $arr_test['BANNER_DATA'] = $DATA;
?>