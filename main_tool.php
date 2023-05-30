
<?php 
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',0);
$ArrHrMenu =array();


if($_SESSION['USRLOGIN']){
	$ArrHrMenu = $_SESSION['HR_SERV_MENU'];
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";
}
if($_SESSION['USRLOGIN_ASSET']){
	$ArrAssetMenu = $_SESSION['ASSET_SERV_MENU'];
}
if($_SESSION['USRLOGIN_WF']){
	$ArrWfMenu = $_SESSION['WF_SERV_MENU'];
}
 $html ='';
if(count($ArrHrMenu)>0 || count($ArrAssetMenu)>0){

	//// WF //////
			$html .= '<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h4 class="text_service">ระบบวางแผนทรัพยากรองค์กร (Enterprise Resource Planning หรือ ERP)</h4>
				</div>
			</div>';
		$html .= '	<div class="row">';
		foreach($ArrWfMenu as $kWfMenu=>$vWfMenu){
		$param = 'UserName='.$_SESSION['USRLOGIN_WF']['UserName'].'&UserPass='.$_SESSION['USRLOGIN_WF']['UserPass'].'&Menu_link='.url2code($vWfMenu['Menu_link']);

		$Url = $vWfMenu['Menu_linkLogIn'].'?paramlink='.url2code($param);
		$html .= '<div class="col-xl-3 col-sm-3 col-6">
			<div class="shadow-sm p-3 mb-5 bg-white rounded">
					<a  href="'.$Url.'" target="_blank"    title="'.$vWfMenu['Menu_Name'].'">
						<div class="row">
							<div class="col-xl-12 text-center">
								<img src="'.$vWfMenu['Menu_Icon'].'" class="rounded-circle"    alt="'.$vWfMenu['Menu_Name'].'">     
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12 text-center">
								<p class="p_link">'.$vWfMenu['Menu_Name'].'</p> 
							</div>
						</div>
					</a>
			</div>
		</div>';
		}
		$html .= '	</div>';
	$html .= '</div>';
		////// TSRI_HR //////
		$html .= '<div class="container">
					<div class="row">
						  <div class="col-xl-12 text-center">
							   <h4 class="text_service">ระบบบริหารจัดการทรัพยากรบุคคล (HR)</h4>
						  </div>
					</div>';
		$html .= '	<div class="row">';
	foreach($ArrHrMenu as $kHrMenu=>$vHrMenu){
				$param = 'UserName='.$_SESSION['USRLOGIN']['UserName'].'&UserPass='.$_SESSION['USRLOGIN']['UserPass'].'&Menu_link='.url2code($vHrMenu['Menu_link']);
				
				$Url = $vHrMenu['Menu_linkLogIn'].'?paramlink='.url2code($param);
		$html .= '<div class="col-xl-3 col-sm-3 col-6">
					   <div class="shadow-sm p-3 mb-5 bg-white rounded">
							<a  href="'.$Url.'" target="_blank"    title="'.$vHrMenu['Menu_Name'].'">
								  <div class="row">
									  <div class="col-xl-12 text-center">
										   <img src="'.$vHrMenu['Menu_Icon'].'" class="rounded-circle"    alt="'.$vHrMenu['Menu_Name'].'">     
									  </div>
								 </div>
								 <div class="row">
									  <div class="col-xl-12 text-center">
										   <p class="p_link">'.$vHrMenu['Menu_Name'].'</p> 
									  </div>
								 </div>
							</a>
					   </div>
				  </div>';
	}
		$html .= '	</div>';
	$html .= '</div>';

			//// ASSET //////
			$html .= '<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h4 class="text_service">ระบบวางแผนทรัพยากรองค์กร (Enterprise Resource Planning หรือ ERP) ระยะที่ 2 ระบบพัสดุ</h4>
				</div>
			</div>';
		$html .= '	<div class="row">';
		foreach($ArrAssetMenu as $kAsMenu=>$vAssetMenu){
		$param = 'UserName='.$_SESSION['USRLOGIN_WF']['UserName'].'&UserPass='.$_SESSION['USRLOGIN_WF']['UserPass'].'&Menu_link='.url2code($vAssetMenu['Menu_link']);

		$Url = $vAssetMenu['Menu_linkLogIn'].'?paramlink='.url2code($param);
		$html .= '<div class="col-xl-3 col-sm-3 col-6">
			<div class="shadow-sm p-3 mb-5 bg-white rounded">
					<a  href="'.$Url.'" target="_blank"    title="'.$vAssetMenu['Menu_Name'].'">
						<div class="row">
							<div class="col-xl-12 text-center">
								<img src="'.$vAssetMenu['Menu_Icon'].'" class="rounded-circle"    alt="'.$vAssetMenu['Menu_Name'].'">     
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12 text-center">
								<p class="p_link">'.$vAssetMenu['Menu_Name'].'</p> 
							</div>
						</div>
					</a>
			</div>
		</div>';
		}
		$html .= '	</div>';
	$html .= '</div>';

}

echo $html;

function url2code($paramLink){
	return base64_encode($paramLink);;
}
function code2url($paramLink){
	return base64_decode($paramLink,false);
}

?>
