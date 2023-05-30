<?php include('comtop.php'); ?>
<?php //include('header.php'); ?>
<?php 
require 'api_banner.php';
$view = $_GET['view'];
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// echo $id_img; 
$u_img = 'http://203.151.166.132/TSRI_ERP/TSRI_HR/attach/w1849/';
?>
<style>
td {
  text-align: center;
}
th {
  text-align: center;
}

</style>
<div class="container">
     <div class="row mt-2">
          <div class="col-xl-12">
               <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="index.php" class="headlines">หน้าหลัก</a></li>
                         <li class="breadcrumb-item active" aria-current="page">ข่าวรับสมัครงานภายใน</li>
                    </ol>
               </nav>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-6">
            <?php
               $id_img = $_GET['id'];
                    $html_immg_h = '';
                        $html_immg_h .= '<div class="item">';
                        $html_immg_h .=     '<img src="'.$u_img.$arr_test['BANNER_DATA'][$id_img]['FILE_SAVE_NAME'].'" class="img-fluid" alt="">';
                        $html_immg_h .= '</div>';
                        echo $html_immg_h; 
                 ?>
               <div class="row mt-2">
                    <div class="col-xl-12">
                         <div class="owl-carousel owl-theme" id="cover_new">
                        <?php
                                $html_img = '';

                                if($view =='Y'){
                                   $html_img .= '';
                                 
                                }else{
                                   foreach( $arr_test as $key => $value){
                                        foreach($value as $k  => $v ){
                                            $html_img .= '<div class="item">';
                                            $html_img .=     '<img src="'.$u_img.$v['FILE_SAVE_NAME'].'" class="img-fluid" alt="">';
                                            $html_img .= '</div>';
                                        }
                                    }

                                }
                                echo $html_img;
                            ?>
                              <!-- <div class="item">
                                   <img src="image/TSRI-PMU_Impact_Pathway_20230503_05.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="item">
                                   <img src="image/TSRI-PMU_Impact_Pathway_20230503_01.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="item">
                                   <img src="image/TSRI-PMU_Impact_Pathway_20230503_03.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="item">
                                   <img src="image/TSRI-PMU_Impact_Pathway_20230503_05.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="item">
                                   <img src="image/TSRI-PMU_Impact_Pathway_20230503_06.jpg" class="img-fluid" alt="">
                              </div> -->
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-xl-6">
               <div class="row">
                    <div class="col-xl-12">
                         <h4><?php echo $arr_test['BANNER_DATA'][$id_img]['NEWS_HEAD'];?></h4>
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <p>
                            <?php
                            
                              $html_detail = $arr_test['BANNER_DATA'][$id_img]['DETAIL'];
                              $pdf_file = 'http://203.151.166.132/TSRI_ERP/TSRI_HR/attach/w672/'.$arr_test['BANNER_DATA'][$id_img]['DATA_FILE_PDF']['PDF_FILE_SAVE_NAME'];
                              $titel_name = $arr_test['BANNER_DATA'][$id_img]['DATA_FILE_PDF']['PDF_FILE_NAME'];
                              $html_detail_round .= '<div>';
                              $html_detail_round .=       '<label >เลขคำสั่ง : &nbsp</label>'; 
                              $html_detail_round .=       '<label >'  .$arr_test['BANNER_DATA'][$id_img]['DATA_FILE_PDF']['COMMAND_NO'].'</label>';      
                              $html_detail_round .= '</div>';
                              $html_detail_round .= '<div>';
                              $html_detail_round .=       '<label >ไฟล์คำสั่ง : &nbsp</label>';
                              $html_detail_round .=       '<i class="fas fa-file-pdf" style="color:red;"></i>';
                              $html_detail_round .=       ' &nbsp;<a href="'.$pdf_file.'" target="_blank">'.$titel_name.'</a>';      
                              $html_detail_round .= '</div>';
                              $html_detail_round .= '<div>';
                              $html_detail_round .=       '<label >วันที่ประกาศ : &nbsp</label>';
                              $html_detail_round .=       '<label >'.$arr_test['BANNER_DATA'][$id_img]['S_DATE'].'</label>';      
                              $html_detail_round .=       '<label >'.' &nbspถึง&nbsp '.'</label>';      
                              $html_detail_round .=       '<label >'.$arr_test['BANNER_DATA'][$id_img]['E_DATE'].'</label>';      
                              $html_detail_round .= '</div>';
                              echo $html_detail;
                              if($view =='Y'){
                              echo $html_detail_round;
                              // echo '<pre>';
                              //  print_r($arr_test['BANNER_DATA']['ARRAY_DETAIL']);
                              // echo '</pre>';
                              $html_sh = '';
                                   $html_sh .=  '<div>';
                                   $html_sh .= '<table cellspacing="0" id="tech-companies-1" class="table table-bordered sorted_table" style="font-size: 10pt">';
                                   $html_sh .= '<thead class="bg-primary">';
                                   $html_sh .=    '<tr class="bg-primary">';
                                   $html_sh .=         '<th width="8%">ลำดับ</th>';
                                   $html_sh .=         '<th width="20%">ตำแหน่งที่เปิดรับ</th>';
                                   $html_sh .=         '<th width="20%">ระดับการศึกษา</th>';
                                   $html_sh .=         '<th width="20%">วุฒิการศึกษา</th>';
                                   $html_sh .=         '<th width="8%">จำนวนที่เปิดรับ</th>';
                                   $html_sh .=    '</tr>';
                                   $html_sh .= '</thead>';
                                   $html_sh .=         '<thead>';
                                   $i = 1;
                                                  foreach($arr_test['BANNER_DATA'][$id_img]['ARRAY_DETAIL'] as $key => $value ){
                                                            $html_sh .=   '<tr>';
                                                            $html_sh .=        '<td>'.$i.'</td>';
                                                            $html_sh .=        '<td>'.$value['POSNAME'].'</td>';
                                                            $html_sh .=        '<td>'.$value['LEVEL_EL'].'</td>';
                                                            $html_sh .=        '<td>'.$value['LEVEL_EDU'].'</td>';
                                                            $html_sh .=        '<td>'.$value['POSITION_REATE'].'</td>';
                                                            $html_sh .=   '</tr>';
                                                            $i ++;
                                                  }
                                   $html_sh .=         '</thead>';
                                   $html_sh .=   '</table>';
                                   $html_sh .=  '</div>';
                                   echo $html_sh;
                                }
                            ?>
                              <!-- ระหว่างวันที่ 3 - 4 พฤษภาคม 2566 สำนักงานคณะกรรมการส่งเสริมวิทยาศาสตร์ วิจัยและนวัตกรรม (สกสว.) ร่วมกับ 9 หน่วยบริหารและจัดการทุน 
                              (PMU: Program Management Unit) 9 แห่ง ประกอบด้วย -->

                         </p>
                         <p>
                              <!-- ร้อมด้วยตัวแทนจาก สำนักงานสภานโยบายการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรมแห่งชาติ (สอวช.) เข้าร่วมการประชุมเชิงปฏิบัติการเรื่อง การจัดทำ Impact Pathway ของแผนงานประจำปี 2567 ภายใต้แผนด้านวิทยาศาสตร์ วิจัยและนวัตกรรม (ววน.) พ.ศ. 2566 - 2570 โดยมีที่ปรึกษาคณะกรรมการส่งเสริมวิทยาศาสตร์ วิจัยและนวัตกรรม (กสว.) ผู้ช่วยศาสตรจารย์ ดร.วีรสิทธิ์ สิทธิไตรย์ คุณวนัส แต้ไพสิฐพงษ์ คุณนิสากร จึงเจริญธรรม ที่ปรึกษา สกสว. 
                              คณะผู้บริหาร สกสว. ผู้บริหาร PMU และเจ้าหน้าที่ที่เกี่ยวข้อง เข้าร่วมการประชุมดังกล่าว ณ โรงแรม Pullman Bangkok King Power กรุงเทพฯ -->
                         </p>
                    </div>
               </div>
          </div>
     </div>
</div>







<script>
  $('#cover_new').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
//     nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
// $('.play').on('click',function(){
//     owl.trigger('play.owl.autoplay',[1000])
// })
// $('.stop').on('click',function(){
//     owl.trigger('stop.owl.autoplay')
// })
</script>

























<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>