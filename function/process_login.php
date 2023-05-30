<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',0);

        $url = "http://203.151.166.132/TSRI_ERP/TSRI_HR/api/AuthenUser.php";
        $data = array("userName" => $_POST['username'] ,  "passWord" =>$_POST['password']);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
		$s = '';
        if ($response === false) {
            echo "cURL Error: " . curl_error($ch);
        } else {
        }
        curl_close($ch);
        $WS_DATA = json_decode($response, true);
				if($WS_DATA['statusCode']==200){
				$_SESSION["USRLOGIN"] = array(
											'PerName'	=> trim($WS_DATA["prefixName"].$WS_DATA["empName"]." ".$WS_DATA["empLastName"]),
											'UserName'	=> trim($WS_DATA["U"]),
											'UserPass'	=> trim($WS_DATA["P"]),
											'UserID'	=> trim($WS_DATA["USR_ID"]),
										);
			
						$urlMenu = "http://203.151.166.132/TSRI_ERP/TSRI_HR/api/menu_service.php";
						$data_menu_hr = array("userName" => trim($WS_DATA["U"]) ,  "passWord" =>$WS_DATA["P"]);
						$chMenu = curl_init();
						curl_setopt($chMenu, CURLOPT_URL, $urlMenu);
						curl_setopt($chMenu, CURLOPT_POST, 1);
						curl_setopt($chMenu, CURLOPT_POSTFIELDS, json_encode($data_menu_hr));
						curl_setopt($chMenu, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
						curl_setopt($chMenu, CURLOPT_RETURNTRANSFER, true);

						$res = curl_exec($chMenu);
						
						if ($res === false) {
							echo "cURL Error: " . curl_error($chMenu);
						}else{
							$_SESSION["HR_SERV_MENU"]=json_decode($res, true);
							
						}
						curl_close($chMenu);
						///  TSRI_ASSET//////////////////////////

				$url_asset = "http://203.151.166.132/TSRI_ERP/TSRI_ASSET/api/AuthenUser.php";
				$ch_asset = curl_init();
				curl_setopt($ch_asset, CURLOPT_URL, $url_asset);
				curl_setopt($ch_asset, CURLOPT_POST, 1);
				curl_setopt($ch_asset, CURLOPT_POSTFIELDS, json_encode($data));
				curl_setopt($ch_asset, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch_asset, CURLOPT_RETURNTRANSFER, true);
				$response_asset = curl_exec($ch_asset);
				if ($response_asset === false) {
					echo "cURL Error: " . curl_error($ch_asset);
				} else {
				}
				curl_close($ch_asset);
				$WS_DATA_ASSET = json_decode($response_asset, true);
				// if($WS_DATA_ASSET['statusCode'] == 200){
					$_SESSION["USRLOGIN_ASSET"] = array(
										'PerName'	=> trim($WS_DATA_ASSET["prefixName"].$WS_DATA_ASSET["empName"]." ".$WS_DATA_ASSET["empLastName"]),
										'UserName'	=> trim($WS_DATA_ASSET["U"]),
										'UserPass'	=> trim($WS_DATA_ASSET["P"]),
										'UserID'	=> trim($WS_DATA_ASSET["USR_ID"]),
										);
									$urlMenu_asset = "http://203.151.166.132/TSRI_ERP/TSRI_ASSET/api/menu_service.php";
									$data_menu_asset = array("userName" => trim($WS_DATA_ASSET["U"]) ,  "passWord" =>$WS_DATA_ASSET["P"]);
									$chMenu_asset = curl_init();
									curl_setopt($chMenu_asset, CURLOPT_URL, $urlMenu_asset);
									curl_setopt($chMenu_asset, CURLOPT_POST, 1);
									curl_setopt($chMenu_asset, CURLOPT_POSTFIELDS, json_encode($data_menu_asset));
									curl_setopt($chMenu_asset, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
									curl_setopt($chMenu_asset, CURLOPT_RETURNTRANSFER, true);
									$res_ass = curl_exec($chMenu_asset);
									if ($res_ass === false) {
										echo "cURL Error: " . curl_error($chMenu_asset);
									}else{
										$_SESSION["ASSET_SERV_MENU"] = json_decode($res_ass, true);
									}
									// echo '<pre>';
									// print_r($res_ass);
									// echo '</pre>';

									curl_close($chMenu_asset);
				// }
				///  TSRI_WF//////////////////////////

				$url_wf = "http://203.151.166.132/TSRI_ERP/TSRI_WF/api/AuthenUser.php";
				$ch_wf = curl_init();
				curl_setopt($ch_wf, CURLOPT_URL, $url_wf);
				curl_setopt($ch_wf, CURLOPT_POST, 1);
				curl_setopt($ch_wf, CURLOPT_POSTFIELDS, json_encode($data));
				curl_setopt($ch_wf, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch_wf, CURLOPT_RETURNTRANSFER, true);
				$response_wf = curl_exec($ch_wf);
				if ($response_wf === false) {
					echo "cURL Error: " . curl_error($ch_wf);
				} else {
				}
				curl_close($ch_wf);
				
				$WS_DATA_WF = json_decode($response_wf, true);
				// if($WS_DATA_WF['statusCode'] == 200){
					$_SESSION["USRLOGIN_WF"] = array(
										'PerName'	=> trim($WS_DATA_WF["prefixName"].$WS_DATA_WF["empName"]." ".$WS_DATA_WF["empLastName"]),
										'UserName'	=> trim($WS_DATA_WF["U"]),
										'UserPass'	=> trim($WS_DATA_WF["P"]),
										'UserID'	=> trim($WS_DATA_WF["USR_ID"]),
										);
									$urlMenu_wf = "http://203.151.166.132/TSRI_ERP/TSRI_WF/api/menu_service.php";
									$data_menu_asset = array("userName" => trim($WS_DATA_WF["U"]) ,  "passWord" =>$WS_DATA_WF["P"]);
									$chMenu_wf = curl_init();
									curl_setopt($chMenu_wf, CURLOPT_URL, $urlMenu_wf);
									curl_setopt($chMenu_wf, CURLOPT_POST, 1);
									curl_setopt($chMenu_wf, CURLOPT_POSTFIELDS, json_encode($data_menu_asset));
									curl_setopt($chMenu_wf, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
									curl_setopt($chMenu_wf, CURLOPT_RETURNTRANSFER, true);
									$res_wf = curl_exec($chMenu_wf);
									if ($res_wf === false) {
										echo "cURL Error: " . curl_error($chMenu_wf);
									}else{
										$_SESSION["WF_SERV_MENU"] = json_decode($res_wf, true);
									}
									// echo '<pre>';
									// print_r($res_ass);
									// echo '</pre>';

									curl_close($chMenu_wf);
				// }
					echo "success";
				}else{
					echo "error";
 
				}
				



?>  
