<?php 
session_start();
ob_start();
$page_name = "";
$style="dash_page.css";
$script="dash_page.js";
require "init.php";
require './layout/topNav.php';

?>
    
    <div id="layoutSidenav">
           
 <?php 
    require './layout/sidNav.php';

 ?>
            <div id="layoutSidenav_content">

            
                  <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">جامعتي</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">لوحة تحكم جامعتي</li>
                        </ol>

                        <div class="header_cards">
                            <div class="row">

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                            <img style="color:red" src="img/courses_home.svg" alt="courses_home">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                                الكورسات
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                            <img style="color:red" src="img/videos_home.svg" alt="videos_home">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                                الفيديوهات
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                            <img style="color:red" src="img/students_home.svg" alt="students_home">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                            المستخدمين
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                        <img style="color:red" src="img/university_home.svg" alt="university_home">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                                الكليات
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- second_row -->
                            <div class="row mt-3">

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                            <img style="color:red" src="img/admin.svg" alt="admin">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                                المسئولين
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                            <img style="color:red" src="img/messages (2).svg" alt="news">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                                الرسائل
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                            <img style="color:red" src="img/payments.svg" alt="payments">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                                عمليات الدفع
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="items">    
                                        <div class="left col-5">
                                        <img style="color:red" src="img/roles_home.svg" alt="roles_home">
                                        </div>
                                        <div class="right col-7">
                                            <h3 class="number">
                                                10
                                            </h3>
                                            <p class="desc">
                                               الصلاحيات
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                   
                    </div>
                </main>
            </div>
            </div>
                

<?php
require_once "./includes/template/footer.php";
ob_end_flush();
