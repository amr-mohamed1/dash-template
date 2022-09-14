<?php
session_start();
ob_start();
$page_name = " - تعديل بيانات دكتور";
include 'init.php';
require './layout/topNav.php';
  ?>
  <div id="layoutSidenav">     
      <?php 
        require './layout/sidNav.php';
  
      ?> 
      <div id="layoutSidenav_content">
          <div class="container-fluid ">
              <div class="allContent">
              <div class="container mainAddForm">
                  <img class="addMemberMainImg pt-5 mb-4" style="width: 80px;margin: auto;display: block;" src="img/addMember.png">
                  <p class="firstParagraph text-center">اهلا بك في لوحة التحكم الخاصة بالنظام</p>
                  <p class="secondParagraph text-center pb-5">من خلال هذه الصفحه يمكنك تعديل بيانات الدكتور</p>
                  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"  enctype="multipart/form-data">
                        <div style="direction: rtl !important;text-align: right;" class="row m-2 pb-3">
                                 <!--doctor_name-->
                        <div style="margin-bottom: 30px !important;text-align: right !important;direction: rtl;" class="col-md-6 col-xs-12">
                            <label for="doctor_name">اسم الدكتور</label>
                            <input type="text" class="form-control" id="doctor_name" 
                                placeholder="ادخل اسم الدكتور" name="doctor_name" autocomplete="off">
                        </div>

                        <!--doctor_position-->
                        <div style="margin-bottom: 30px !important;text-align: right !important;direction: rtl;" class="col-md-6 col-xs-12">
                            <label for="doctor_position">مؤهل الدكتور</label>
                            <input type="text" class="form-control" id="doctor_position" 
                                placeholder="ادخل مؤهل الدكتور" name="doctor_position" autocomplete="off">
                        </div>


                        <!--doctor_facebook-->
                        <div style="margin-bottom: 30px !important;text-align: right !important;direction: rtl;" class="col-md-6 col-xs-12">
                            <label for="doctor_facebook">لينك الفيسبوك</label>
                            <input type="url" class="form-control" id="doctor_facebook" 
                                placeholder="ادخل لينك الفيسبوك" name="doctor_facebook" autocomplete="off">
                        </div>


                        <!--doctor_linked_in-->
                        <div style="margin-bottom: 30px !important;text-align: right !important;direction: rtl;" class="col-md-6 col-xs-12">
                            <label for="doctor_linked_in">لينك لينكد ان</label>
                            <input type="url" class="form-control " id="doctor_linked_in" 
                                placeholder="ادخل لينك لينكد ان" name="doctor_linked_in" autocomplete="off">
                        </div>


                        <!--doctor_email-->
                        <div style="margin-bottom: 30px !important;text-align: right !important;direction: rtl;" class="col-md-6 col-xs-12">
                            <label for="doctor_email">الايميل</label>
                            <input type="email" class="form-control" id="doctor_email" 
                                placeholder="ادخل الايميل" name="doctor_email" autocomplete="off">
                        </div>

                        <!--img-->
                        <div style="margin-bottom: 30px !important;text-align: right !important;direction: rtl;" class="col-md-6 col-xs-12">
                            <label for="img">صورة الدكتور</label>
                            <input type="file" class="form-control" style="padding-bottom: 32px;" id="img" name="img" >
                        </div>

                            </div>
  
                      <!--btn -> add--->
                      <button class="btn btn-primary d-block m-auto mt-5">تعديل بيانات الدكتور</button>
                  </form>
                  </div>
              </div>
        </div>
      </div>
  </div>
  
<?php
require_once "./includes/template/footer.php";
ob_end_flush();?>