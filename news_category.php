<?php
require 'api_banner.php';
require 'function/api_SUPPLY_PLAN_ANNOUNCE.php';

?>
<div class="container">
     <div class="row">
          <div class="col-xl-12 text-center">
               <h4 class="text_service">หมวดหมู่ข่าวประชาสัมพันธ์</h4>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-12">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                   <!-- <div class="row">
                         <div class="col-xl-4 col-md-4">
                              <img src="image/f20230309110957_2ujhnxbrHn.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="col-xl-8 col-md-8">
                             <div class="row">
                                   <div class="col-xl-12">
                                        <h5>ข่าวประกาศ</h5>
                                   </div>
                             </div>
                             <div class="row">
                                   <div class="col-xl-12">
                                       <ol>
                                             <li>
                                                  <a href="new.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li>
                                             <li>
                                                  <a href="new.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li>
                                             <li>
                                                       <a href="new.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                   <hr>
                                             </li>
                                             <li>     
                                                       <a href="new.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li>
                                             <li>     
                                                       <a href="new.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p>  
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li>
                                       </ol>
                                   </div>
                             </div>
                         </div>
                   </div> -->
               </div>
          </div>
     </div>  
     <div class="row">
          <div class="col-xl-12">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                   <div class="row">
                         <div class="col-xl-4 col-md-4">
                              <img src="image/cover_1.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="col-xl-4 col-md-4">
                             <div class="row">
                                   <div class="col-xl-12">
                                        <h5>ข่าวรับสมัครงานภายใน</h5>
                                   </div>
                             </div>
                             <div class="row">
                                   <div class="col-xl-12">
                                       <ol>

                                       <?php
                                        $view = 'Y';
                                        $html_news = '';
                                        foreach($arr_test['BANNER_DATA'] as $key => $v){
                                            
                                             $html_news .=  '<li>';
                                             $html_news .=   '<a id="ROUND_'.$key.'" href="img_showall.php?view='.$view.'&id='.$key.'" class="headlines" target="_blank" >'.$v['NEWS_HEAD'].'</a><p></p>';
                                             $html_news .=        '<div class="d-flex font_size_all">';
                                             $html_news .=        '<div class="me-2">';
                                             $html_news .=             '<i class="fas fa-calendar"></i>';
                                             $html_news .=        '</div>';
                                             $html_news .=        '<div class="me-2">';
                                             $html_news .=           $v['S_DATE'].' - '.$v['E_DATE'];
                                             $html_news .=        '</div>';
                                             $html_news .=        '</div>';
                                             $html_news .=      '<hr>';
                                             $html_news .=   '</li>';

                                       }
                                        echo $html_news;
                                        
                                       ?>
                                             <!-- <li>
                                                   <a href="application_form.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li> -->

                                             <!-- <li>
                                                   <a href="application_form.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li>
                                             <li>
                                                       <a href="application_form.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                   <hr>
                                             </li>
                                             <li>     
                                                  <a href="application_form.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                          <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li>
                                             <li>     
                                             <a href="application_form.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li> -->
                                       </ol>
                                   </div>
                             </div>
                         </div>
                         <div class="col-xl-4 col-md-4">
                             <div class="row">
                                   <div class="col-xl-12">
                                   <h5>ข่าวกิจกรรม/การอบรม</h5>
                                   </div>
                             </div>
                             <div class="row">
                                   <div class="col-xl-12">
                                       <ol>
                                        <?php
                                        
                                        
                                        
                                        ?>
                                             <li>
                                                   <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li>
                                             <li>
                                                   <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li>
                                             <li>
                                                       <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                   <hr>
                                             </li>
                                             <li>     
                                                  <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                          <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li>
                                             <li>     
                                             <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li>
                                       </ol>
                                   </div>
                             </div>
                         </div>
                   </div>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-12">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                   <div class="row">
                         <div class="col-xl-4 col-md-4">
                               <img src="image/cover_2.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="col-xl-8 col-md-8">
                             <div class="row">
                                   <div class="col-xl-12">
                                
                                        <h5>ประกาศแผนการจัดซื้อจัดจ้าง</h5>
                                   </div>
                             </div>
                             <div class="row">
                                   <div class="col-xl-12">
                                       <ol>
                                             <li>
                                                   <a href="new.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li>
                                             <li>
                                             <a href="new.php" class="headlines" target="_blank">ประกาศ XXXX </a><p></p> 
                                                   <div class="d-flex font_size_all">
                                                       <div class="me-2">
                                                             <i class="fas fa-calendar"></i>
                                                       </div>
                                                       <div class="me-2">
                                                              09/03/2566
                                                       </div>
                                                       <div class="me-2">
                                                            <i class="fas fa-eye"></i>
                                                       </div>
                                                       <div class="me-2">
                                                            28 ยอดเข้าชม
                                                       </div>
                                                   </div>
                                                   <hr>
                                             </li>
                                             <li>
                                                   ประกาศ XXXX 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                   <hr>
                                             </li>
                                             <li>     
                                                       ประกาศ XXXX 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li>
                                             <li>     
                                                   ประกาศ XXXX 
                                                       <div class="d-flex font_size_all">
                                                            <div class="me-2">
                                                                 <i class="fas fa-calendar"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 09/03/2566
                                                            </div>
                                                            <div class="me-2">
                                                                 <i class="fas fa-eye"></i>
                                                            </div>
                                                            <div class="me-2">
                                                                 28 ยอดเข้าชม
                                                            </div>
                                                       </div>
                                                       <hr>
                                             </li>
                                       </ol>
                                   </div>
                             </div>
                         </div>
                   </div>
               </div>
          </div>
     </div>   
</div>
<script>
// $( document ).ready(function() {
// document.querySelectorAll('a[id^=ROUND_]').forEach(function(element) {
//      var id = element.id;
//      $("#".id).click(function() {
//      var i = 1
//      const  numbers = [];
//      const result = numbers.reduce((sum, current) => sum + current, 0);

//      });
// });
// });
</script>

