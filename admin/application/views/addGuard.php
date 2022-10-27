<!-- BEGIN CONTENT -->
 <!-- <link rel="stylesheet" href="<?=base_url()?>../assets/datepicker/dari.datepicker.min.css"> -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                  
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/studentController/index">ضفحه اصلی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه نمودن محافظ</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه کردن  محافظ</span>
                </div>
               <!--  <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/fuelController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div> -->
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/guardController/CheckAddGuard" enctype="multipart/form-data">
                    <div class="form-body">
                    <div class="row">
                    
                   
                    </div>
                    <div class="row">
                          
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">اسم*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="اسم">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_fname)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">اسم*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fname" value="<?php if (!empty($Field_data['fname'])) echo $Field_data['fname']; ?>" placeholder="اسم">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_fname)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_fname?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_job)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">وظیفه*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control date" name="job" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="وظیفه">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_job)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_job?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_location)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">موقعیت*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control date" name="location" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="موقعیت">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_location)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_location?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_phone)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">شماره تماس*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="شماره تماس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_phone)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_phone?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_photo)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">عکس*</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="photo" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="شماره تماس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_photo)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_photo?></span>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/guardController/index" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="AddGuard" class="btn btn-circle green-meadow" value="ذخیره"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <script src="j<?=base_url()?>../assets/datepicker/query.min.js"></script>
    <script src="<?=base_url()?>../assets/datepicker/dari.date.min.js"></script>
    <script src="<?=base_url()?>../assets/datepicker/dari.datepicker.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        var calendar = $(".date").pDatepicker({
            format: 'YYYY-MM-DD',
            autoClose: true,
        });
      })
    </script> -->