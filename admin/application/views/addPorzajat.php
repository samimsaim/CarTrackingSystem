<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                   
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/studentController/index">پرزه جات</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه  نمودن پرزه جات</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه نمودن پرزه جات</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-default" href="<?=base_url()?>index.php/fuelController/porzajat" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/KandidController/CheckAddCustomer">
                    <div class="form-body">
                    <div class="row">
                    
                   
                    </div>
                    <div class="row">
                            <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_kandid_typ)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">انتخاب موتر*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="tailer">
                                    <option <?php if(!empty($Field_data['kandidtyp']) && $Field_data['kandidtyp'] == 0) echo ' selected '?> value="0">انتخاب موتر</option>
                                    
                                    <option> 002  -کزولا</option>
                                    <option> 003  -هیلکس</option>
                                    <option> 004  -رنجز</option>
                                    <option> 005  -کرولا</option>
                                    <option> 006  -پرادو</option>
                                    <option> 007  -رنحز</option>
                                    <option> 008  -لکسیس</option>
                                    <option> 009  -کاستر</option>
                                </select>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_kandid_typ)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_kandid_typ?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نمبر حواله*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="نمبر حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">اسم جنس*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="lname" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="اسم جنس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تعداد جنس*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="phone" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="تعداد جنس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">قیمت جنس*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="قیمت جنس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تعداد قلم*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="تعداد قلم">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                   <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ صدور حواله*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="date" class="form-control" name="phone" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="تاریخ صدور حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                      <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت توزیع*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="نوعیت توزیع">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_name?></span>
                                <?php }?>
                            </div>
                        </div>
                     
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/fuelController/porzajat" class="btn default">لغو</a>
                                <a href="<?=base_url()?>index.php/fuelController/porzajat" class="btn btn-success">ذخیره</a>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
