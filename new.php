<?php include('comtop.php'); ?>
<?php include('header.php'); ?>


<div class="container">
     <div class="row mt-2">
          <div class="col-xl-12">
               <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="index.php" class="headlines">หน้าหลัก</a></li>
                         <li class="breadcrumb-item active" aria-current="page">ประชาสัมพันธ์</li>
                    </ol>
               </nav>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-6">
               <img src="image/new_cover.webp" class="img-fluid" alt="">
               <div class="row mt-2">
                    <div class="col-xl-12">
                         <div class="owl-carousel owl-theme" id="cover_new">
                              <div class="item">
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
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-xl-6">
               <div class="row">
                    <div class="col-xl-12">
                         <h4>สกสว. จัดประชุมเชิงปฏิบัติการร่วมกับ หน่วยงานนโยบาย และ PMU จัดทำ “เส้นทางสู่ผลกระทบของงานวิจัย” (Impact Pathway) สะท้อนการออกแบบแผนงานให้เป็นไปอย่างมีระบบและมีประสิทธิภาพ มุ่งบรรลุ “เป้าหมายผลสัมฤทธิ์ที่สำคัญ” (Objective Key Results: OKRs) ตามแผนด้าน ววน. ของประเทศ สู่การพัฒนาประเทศอย่างยั่งยืน</h4>
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <p>
                              ระหว่างวันที่ 3 - 4 พฤษภาคม 2566 สำนักงานคณะกรรมการส่งเสริมวิทยาศาสตร์ วิจัยและนวัตกรรม (สกสว.) ร่วมกับ 9 หน่วยบริหารและจัดการทุน 
                              (PMU: Program Management Unit) 9 แห่ง ประกอบด้วย
                         </p>
                         <p>
                              ร้อมด้วยตัวแทนจาก สำนักงานสภานโยบายการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรมแห่งชาติ (สอวช.) เข้าร่วมการประชุมเชิงปฏิบัติการเรื่อง การจัดทำ Impact Pathway ของแผนงานประจำปี 2567 ภายใต้แผนด้านวิทยาศาสตร์ วิจัยและนวัตกรรม (ววน.) พ.ศ. 2566 - 2570 โดยมีที่ปรึกษาคณะกรรมการส่งเสริมวิทยาศาสตร์ วิจัยและนวัตกรรม (กสว.) ผู้ช่วยศาสตรจารย์ ดร.วีรสิทธิ์ สิทธิไตรย์ คุณวนัส แต้ไพสิฐพงษ์ คุณนิสากร จึงเจริญธรรม ที่ปรึกษา สกสว. 
                              คณะผู้บริหาร สกสว. ผู้บริหาร PMU และเจ้าหน้าที่ที่เกี่ยวข้อง เข้าร่วมการประชุมดังกล่าว ณ โรงแรม Pullman Bangkok King Power กรุงเทพฯ
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