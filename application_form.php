<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<div class="bg_form">
     <div class="container">
          <div class="row">
               <div class="col-12 p-5">
                    <h2>แบบฟอร์มการสมัครงาน</h2>
               </div>
          </div>
     </div>
</div>
<div class="container">
     <div class="row mt-5">
          <div class="col-xl-12">
               <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="index.php" class="headlines">หน้าหลัก</a></li>
                         <li class="breadcrumb-item active" aria-current="page">ประกาศรับสมัครงาน</li>
                    </ol>
               </nav>
          </div>
     </div>
     <hr>
     <div class="row">
          <div class="col-12 mb-5">
              <h3>กรอกเลขบัตรประจำตัวประชาชนของท่าน</h3>
          </div>
     </div>
     <div class="row mb-5"> 
               <div class="col-12 col-md-8">
                    <form action="">    
                          <input type="text" class="form-control  mb-2" id="PER_IDCARD" maxlength="13" placeholder="xxx-xx-xx-xxx-xxxx" aria-describedby="PER_IDCARD">
                    </form> 
               </div>
               <div class="col-12 col-md-4">
                    <button type="button"  class="btn detail_button  text-center col-12 mb-2" data-toggle="modal" data-target="#correct_information">สมัครงาน</button>  
               </div>
     </div>
</div>


<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>

















