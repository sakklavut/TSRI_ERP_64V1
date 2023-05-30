
<?php 
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',0);

if (!isset($_SESSION['login_true_admin']) or !isset($_SESSION['login_true_user'])) {
     print_r($_SESSION);
}
?>


<div class="container">
     <div class="row">
          <div class="col-xl-12 text-center">
               <h4 class="text_service">ระบบบริหารจัดการทรัพยากรบุคคล</h4>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบวางแผนทรัพยากรองค์กร">
                          <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_9.png" class="rounded-circle"    alt="ระบบวางแผนทรัพยากรองค์กร">     
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ระบบวางแผนทรัพยากรองค์กร</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบอนุมัติ">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_7.png" class="rounded-circle"    alt="ระบบอนุมัติ">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link"> ระบบอนุมัติ</p> 
                              </div>
                         </div>
                   </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบงบประมาณ">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_4.png" class="rounded-circle"    alt="ระบบงบประมาณ">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ระบบงบประมาณ</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบการเงิน">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_6.png" class="rounded-circle"    alt="ระบบการเงิน">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ระบบการเงิน</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบบัญชี">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_3.png" class="rounded-circle"    alt="ระบบบัญชี">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ระบบบัญชี</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="Dashboard">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_10.png" class="rounded-circle"    alt="Dashboard">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">Dashboard</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบกลาง">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_12.png" class="rounded-circle"    alt="ระบบกลาง">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ระบบกลาง</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบบริการตนเอง">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_8.png" class="rounded-circle"    alt="ระบบบริการตนเอง">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ระบบบริการตนเอง</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="คู่มือการใช้งาน">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_2.png" class="rounded-circle"    alt="คู่มือการใช้งาน">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">คู่มือการใช้งาน</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ระบบพัสดุ">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_13.png" class="rounded-circle"    alt="ระบบพัสดุ">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ระบบพัสดุ</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://203.151.166.132/TSRI_ERP/TSRI_HR/index/" target="_blank" title="ดาวน์โหลดกฏระเบียบพัสดุที่เกี่ยวข้อง">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_17.png" class="rounded-circle"    alt="ดาวน์โหลดกฏระเบียบพัสดุที่เกี่ยวข้อง">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ดาวน์โหลดกฏระเบียบพัสดุที่เกี่ยวข้อง</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div> 
     </div>

     <div class="row">
          <div class="col-xl-12 text-center">
               <h4 class="text_service">ระบบคลังพัสดุ</h4>
          </div>
     </div>
     <div class="row">
               <div class="col-xl-3 col-sm-3 col-6">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                         <a href="http://203.151.166.132/TSRI_ERP/TSRI_ASSET/workflow/" target="_blank" title="ระบบทะเบียนทรัพย์สิน">
                              <div class="row">
                                   <div class="col-xl-12 text-center">
                                        <img src="icon/icon_1.png" class="rounded-circle"    alt="ระบบทะเบียนทรัพย์สิน">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-xl-12 text-center">
                                        <p class="p_link">ระบบทะเบียนทรัพย์สิน</p> 
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col-xl-3 col-sm-3 col-6">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                         <a href="http://203.151.166.132/TSRI_ERP/TSRI_ASSET/workflow/" target="_blank" title="ระบบจัดซื้อจัดจ้าง">
                              <div class="row">
                                   <div class="col-xl-12 text-center">
                                        <img src="icon/icon_5.png" class="rounded-circle"    alt="ระบบจัดซื้อจัดจ้าง">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-xl-12 text-center">
                                        <p class="p_link">ระบบจัดซื้อจัดจ้าง</p> 
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>
               <div class="col-xl-3 col-sm-3 col-6">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                         <a href="http://203.151.166.132/TSRI_ERP/TSRI_ASSET/workflow/" target="_blank" title="ระบบคลังพัสดุ">
                              <div class="row">
                                   <div class="col-xl-12 text-center">
                                        <img src="icon/icon_10.png" class="rounded-circle" alt="ระบบคลังพัสดุ">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-xl-12 text-center">
                                        <p class="p_link">ระบบคลังพัสดุ</p> 
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>
          </div>
     </div>
</div>

<div class="container">
     <div class="row">
          <div class="col-xl-12 text-center">
               <h4 class="text_service">เรื่องที่ดำเนินการ</h4>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="#" target="_blank" title="เรื่องที่ต้องตัดสินใจ">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_13.png" class="rounded-circle"    alt="เรื่องที่ต้องตัดสินใจ">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">เรื่องที่ต้องตัดสินใจ</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://" target="_blank" title="แจ้งเตือน">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_14.png" class="rounded-circle"    alt="แจ้งเตือน">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">แจ้งเตือน</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="#" target="_blank" title="ปฏิทินการใช้งานห้องประชุม">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_15.png" class="rounded-circle"    alt="ปฏิทินการใช้งานห้องประชุม">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ปฏิทินการใช้งานห้องประชุม</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-xl-3 col-sm-3 col-6">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <a href="http://" target="_blank" title="ปฏิทินการจองยานพาหนะ">
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <img src="icon/icon_16.png" class="rounded-circle"    alt="ปฏิทินการจองยานพาหนะ">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <p class="p_link">ปฏิทินการจองยานพาหนะ</p> 
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     </div>  
</div>