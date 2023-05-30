<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',0);
require 'api_banner.php';
// if (!isset($_SESSION['visit_count'])) {
//  $_SESSION['visit_count'] = 0;
// }
// $d = date("H:i");
// // /*1684774740 = 24hr*/
// if(strtotime($d) > 1684774740){
//   $_SESSION['visit_count'] = 0 ;
// }
// $_SESSION['visit_count']++;
$indate = date('Y-m-d');

$url_img = 'http://203.151.166.132/TSRI_ERP/TSRI_HR/attach/w1849/';

?>

<div id="carouselExampleFade" class="carousel slide carousel-fade">
<div class="carousel-inner">
<?php 
  //$active = 'active';
  $text ='active';
  foreach($arr_test  as $key => $val){
    foreach($val  as $k => $v){
      // echo '<pre>';
      // print_r($k );
      // echo '</pre>';
    $html .= '<div class="carousel-item '.$text.'">';
    $html .=    '<img src='.$url_img.$v['FILE_SAVE_NAME'].' class="d-block w-100" alt="..." onclick="showImg('.$k.')">';
    $html .= '</div>';
    $text = '';
    }
  }
  echo $html;
?>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <i class="fas fa-chevron-left icon_left"></i>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <i class="fas fa-chevron-right icon_right"></i>
  </button>
  <!-- <label for="" style="fo"><?php echo '<i class="fas fa-eye "></i>'. $_SESSION['visit_count'] .' ยอดเข้าชมเว็บไซต์';?></label> -->
</div>
<script>
function showImg(id){
  location.href = '/demo/TSRI_ERP_64_v1'+'/img_showall.php?id='+id;

}


</script>