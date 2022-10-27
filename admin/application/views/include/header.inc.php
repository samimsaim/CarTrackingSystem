<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	 <meta charset="utf-8" />
        <title>سیستم مدیریت معلومات ریاست خدمات</title>
    <link rel="icon" href=""/>
    <?php require_once 'jdf.php'; ?>
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <script src="<?=base_url()?>../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <link href="<?=base_url()?>../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/material/css/mdb.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <link href="<?=base_url();?>../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/global/css/components-md-rtl.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url()?>../assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/layouts/layout2/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>../assets/layouts/layout2/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url()?>../assets/layouts/layout2/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
 </head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md" id="nasrat">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <img src="<?=base_url();?>assets/img/logoe.png" alt="" style="width: 78%; margin-top: 18px; margin-right: -5px;" class="logo-default"/>
                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
              
                <div class="page-actions">
                </div>
              
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" style="width:40px ;" src="<?=base_url()?>assets/img/employee/male.jpg"/>
                                    <span class="username username-hide-on-mobile"><?=ucfirst($_SESSION['username']);?></span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
            
                                    <li>
                                        <a href="<?=base_url()?>index.php/logoutController/index">
                                            <i class="icon-key"></i> خروج </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         </div>
        <div class="clearfix"> </div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <?php if($_SESSION['privilege']=='admin'): ?>
                            <li class="nav-item <?php echo activate_menu('mainPageController');?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">صقحه اصلی</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                              <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/mainPageController/index" class="nav-link nav-toggle">
                                        <span class="title">صقحه اصلی</span>
                                        <span class="arrow"></span>
                                    </a>
                           
                               
                            </ul>
                        </li>
                        <li class="nav-item <?php echo activate_menu('carController');?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-car"></i>
                                <span class="title">آمریت ترانشپورت</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                              <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/carController/carsView" class="nav-link nav-toggle">
                                        <span class="title">لیست  عراده جات فعال</span>
                                        <span class="arrow"></span>
                                    </a>
                             <ul class="sub-menu">
                              <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/carController/index" class="nav-link nav-toggle">
                                        <span class="title">لیست  های سهمیه</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/carController/khedmateCar" class="nav-link nav-toggle">
                                        <span class="title">لیست  های  خدمتی</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/moblailController/index" class="nav-link nav-toggle">
                                        <span class="title">لیست عراده جات غیر فعال</span>
                                        <span class="arrow"></span>
                                    </a>

                                </li>
                                    <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/PurzaJatController/index" class="nav-link nav-toggle">
                                        <span class="title">مصارف پرزه جات</span>
                                        <span class="arrow"></span>
                                    </a>
                                  
                                </li>
                                <li class="nav-item">
                                     <a href="<?=base_url()?>index.php/FuelController/index" class="nav-link nav-toggle">
                                        <span class="title">مصارف   تیل</span>
                                        <span class="arrow"></span>
                                    </a>
                                  
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/moblailController/index" class="nav-link nav-toggle">
                                        <span class="title">مصارف مبلایل</span>
                                        <span class="arrow"></span>
                                    </a>

                                </li>
                               
                            </ul>
                        </li>
                    <?php endif ?>
                    <?php if($_SESSION['privilege']=='admin'): ?>
                          <li class="nav-item <?php echo activate_menu('usersController'); ?>">
                            <a href="<?=base_url()?>index.php/UsersController/index" class="nav-link nav-toggle">
                                <i class="fa fa-bank"></i>
                                <span class="title">مدیریت کلوپ</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                 <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/UsersController/index" class="nav-link nav-toggle">
                                        <span class="title"></span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                              <!-- <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/usersController/kandid" class="nav-link nav-toggle">
                                        <span class="title">کاندیدان</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/usersController/Peopl" class="nav-link nav-toggle">
                                        <span class="title">مردم</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li> -->
                                
                            </ul>

                        </li>
                           <li class="nav-item <?php echo activate_menu('usersController'); ?>">
                            <a href="<?=base_url()?>index.php/borrowController/index" class="nav-link nav-toggle">
                                <i class="fa fa-fax"></i>
                                <span class="title">آمریت حفظ و مراقبت</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                 <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/borrowController/index" class="nav-link nav-toggle">
                                        <span class="title">لیست  قرض داران</span>
                                        <span class="arrow"></span>
                                    </a>
                                   
                                </li>
                           
                            </ul>

                        </li>
                    <?php endif ?>
                    <?php if($_SESSION['privilege']=='admin'): ?>
                        <li class="nav-item <?php echo activate_menu('deviceController'); ?>">
                            <a href="<?=base_url()?>index.php/peopleController/index" class="nav-link nav-toggle">
                                <i class="fa fa-male"></i>
                                <span class="title">محافظت مو مصونیت</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                 <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/GuardController/index" class="nav-link nav-toggle">
                                        <span class="title">محافظین</span>
                                        <span class="arrow"></span>
                                    </a>
                                   
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/schoolController/index" class="nav-link nav-toggle">
                                        <span class="title">مکاتب مصدود و باز گشای شده</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/eventController/security" class="nav-link nav-toggle">
                                        <span class="title">رویداد ها و حوادث</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                    <?php endif ?>
                    <?php if($_SESSION['privilege']=='admin'): ?>
                        <li class="nav-item <?php echo activate_menu('transportRepController'); ?>">
                            <a href="<?=base_url()?>index.php/transportRepController/index" class="nav-link nav-toggle">
                                <i class="fa fa-file-excel-o"></i>
                                <span class="title">گزارشات </span>
                                <span class="arrow"></span>
                            </a>
                             <ul class="sub-menu">
                                 <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/transportRepController/transportReport" class="nav-link nav-toggle">
                                        <span class="title">گزارش ا ت  آمریت ترانسپورت</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/borrowController/index" class="nav-link nav-toggle">
                                        <span class="title">گزارش ترا جفظ و مراقبت</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                           <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/CareRepController/careReport" class="nav-link nav-toggle">
                                        <span class="title">گزارش ترا محافظت و مصونیت</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                          <li class="nav-item <?php echo activate_menu('transportRepController'); ?>">
                            <a href="<?=base_url()?>index.php/transportRepController/index" class="nav-link nav-toggle">
                                <i class="fa fa-file-excel-o"></i>
                                <span class="title">ولایات</span>
                                <span class="arrow"></span>
                            </a>
                             <ul class="sub-menu">
                                 <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/provinceController/index" class="nav-link nav-toggle">
                                        <span class="title">لیت ولایت</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                
                           <li class="nav-item">
                                    <a href="<?=base_url()?>index.php/provinceController/destrict" class="nav-link nav-toggle">
                                        <span class="title">لیست ولسوالی ها</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                    <?php endif ?>
                    <?php if($_SESSION['privilege']=='admin'): ?>
                          <li class="nav-item <?php echo activate_menu('usersController'); ?>">
                            <a href="<?=base_url()?>index.php/UsersController/index" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">استفاده کننده ها</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                    <?php endif ?>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            