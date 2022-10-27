<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                   
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/studentController/index">پزره جات</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه نمودن مکاتب مسدود و بازگشای شده</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه  نمودن مکاتب مسدود </span>
                </div>
              
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/schoolController/CheckAddSchool">
                    <div class="form-body">
                    <div class="row">
                    
                   
                    </div>
                    <?php foreach($data as $row){} ?>
                    <div class="row">
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_province)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">ولایت*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="province" value="<?=$row->province?>" placeholder="ولایت">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_province)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_province?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_destrict)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">ولسوالی*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="destrict" value="<?=$row->destrict?>" placeholder="ولسوالی">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_destrict)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_destrict?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_schoolName)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نام مکتب*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="schoolName" value="<?=$row->shoolname?>" placeholder="نام مکتب">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_schoolName)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_schoolName?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_number)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تعداد*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="number" value="<?=$row->number?>" placeholder="تعداد مکتب">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_number)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_number?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_lockDate)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ مسدود*</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="lockDate" value="<?=$row->lockDate?>" placeholder="تعداد قلم">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_lockDate)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_lockDate?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_openDate)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ بازگشای*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="date" class="form-control" name="openDate" value="<?=$row->openDate?>" placeholder="قیمت مجموعی">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_openDate)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_openDate?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_lockTime)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مدت مسدود*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="lockTime" value="<?=$row->locktime?>" placeholder="مدت مسدود">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_lockTime)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_lockTime?></span>
                                <?php }?>
                            </div>
                            <input type="hidden" name="id" value="<?=$row->id?>">
                        </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/schoolController/index" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="Add" class="btn btn-circle green-meadow" value="ذخیره"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
