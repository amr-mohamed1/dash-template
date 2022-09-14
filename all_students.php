<?php    
ob_start();
session_start();   
$page_name = " - جميع الدكاتره";
include "init.php";
require './layout/topNav.php';
?>
    <style>
        .columns {
            float: unset !important;
            display: block;
            margin:20px auto !important;

        }
    </style>
<div id="layoutSidenav">     
    <?php 
      require './layout/sidNav.php';
    ?>
        <div id="layoutSidenav_content">
      <div class="container-fluid ">
        <div class="allContent">

              
                    <div class="container-fluid">
                        <h1 class="mt-4">موقع</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">لوحة التحكم</li>
                            <li class="breadcrumb-item active">جميع الدكاتره</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    جميع الدكاتره

                                    
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="toolbar" class="select">
                                        <select style="display: none;" class="form-control">
                                        </select>
                                    </div>
                                    <table class="table table-bordered text-center" data-show-export="true"
                                    data-toolbar="#toolbar" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>رقم الدكتور</th>
                                            <th>اسم الدكتور</th>             
                                            <th>المؤهل</th>             
                                            <th>فيسبوك</th>             
                                            <th>لينكد ان</th>             
                                            <th>الايميل</th>             
                                            <th>الصورة الشخصيه</th>             
                                            <th>اضيف في </th>   
                                            <th>عدل في </th>                    
                                            <th>تعديل الدكتور</th>             
                                            <th>حذف الدكتور</th>                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>رقم الدكتور</th>
                                            <th>اسم الدكتور</th>             
                                            <th>المؤهل</th>             
                                            <th>فيسبوك</th>             
                                            <th>لينكد ان</th>             
                                            <th>الايميل</th>             
                                            <th>الصورة الشخصيه</th>             
                                            <th>اضيف في </th>    
                                            <th>عدل في </th>                    
                                            <th>تعديل الدكتور</th>             
                                            <th>حذف الدكتور</th>   
                                        </tr>            
                                    </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                <a href='update_doctor.php?id=2' class='btn editbtn btn-primary m-2'>تعديل<i class='bx bxs-edit m-1 '></i></a></td>
                                                <td>
                                                <a doctor-id='1' href='' class='btn deletebtn btn-danger belete_btn m-2'>حذف<i class='bx bxs-user-minus m-1'></i></a></td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>

          </div>
        </div>
      </div>
    </div>
    <script>

// $(document).on("click",".deletebtn",function(e){
//     e.preventDefault();
//     var doctor_id = $(this).attr('doctor-id');

// $.ajax({
// type: "POST",
// url: 'delete_ajax.php',
// dataType:'JSON',
// data: {
//     "id":doctor_id,
//     "from":"doctors"
// },
// success: function(data){
//     console.log(data);
//     if(data.status == true){
//         $('.doctor'+data.doctor_id).remove();
//         toastr.success('تم بنجاح :- تم حذف الدكتور بنجاح');
//     }
// }
// });
// })
// </script>

</div>

<?php
require_once "./includes/template/footer.php";
ob_end_flush();