<div class="bg_header">
     <div class="container">
         <div class="row">
               <div class="col-xl-12 text-center">
                    <p class="text_footer">
                              สำนักงานคณะกรรมการส่งเสริมวิทยาศาวตร์ วิจัยและนวัตกรรม (สกสว.)
                    </p>
               </div>
         </div>
         <?php   if(!empty($_SESSION['USRLOGIN'])){?>
               <div class="wf-right footer_s" style="margin-left: 1739px; margin-top: -129px;">
                    <span ></span>
                    <img src="image/qrcode/group_help.jpg" class="img-1" width="120px" >
                    <div class="col-md-12">
                         <label style="display: inline;">Scan qrcode</label>
                    </div>
               </div>
               <?php } ?>
     </div>
</div>
<style>
.floating-div {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #f1f1f100;
        padding: 20px;
        text-align: center;
        box-sizing: border-box;
        border-radius: 14px;
    }
    .content {
        margin-top: 100px; /* เพื่อป้องกันการบังคับภาพด้านบน */
        margin-bottom: 100px; /* เพื่อป้องกันการบังคับภาพด้านล่าง */
    }
    .footer_s {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 50px;
        background-color: #f1f1f100;
        padding: 8px;
        text-align: center;
        box-sizing: border-box;
        
    }
    .img-1{
     border-radius: 9px;
     border: 3px !important;
    }

</style>
