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
                    <a href="<?=base_url()?>index.php/studentController/index">پزره جات</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه نمودن پرزه جات</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه  نمودن پرزه جات</span>
                </div>
               <!--  <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/fuelController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div> -->
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/moblailController/CheckAddMoblail">
                    <div class="form-body">
                    <div class="row">
                    
                   
                    </div>
                    <div class="row">
                            <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_car)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">انتخاب موتر*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="car">
                                    <option <?php if(!empty($Field_data['kandidtyp']) && $Field_data['kandidtyp'] == 0) echo ' selected '?> value="0">انتخاب موتر</option>
                                    <?php foreach($data as $row){ ?>
                                    <option value="<?=$row->id?>"><?=$row->cod_num?>  - <?=$row->typ_of_car?></option>
                                   <?php }?>
                                </select>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_car)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_car?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_tarikhDarHawala)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ درخواست حواله *</label>
                            <div class="col-md-9">
                                <input type="date" style="text-align: right;" class="form-control date" name="tarikhDarHawala" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="تاریخ درخواست حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_tarikhDarHawala)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_tarikhDarHawala?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_tarikhHawala)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ حواله*</label>
                            <div class="col-md-9">
                                <input type="date" style="text-align: right;" class="form-control date" name="tarikhHawala" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="تاریخ حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_tarikhHawala)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_tarikhHawala?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_hawalaNumber)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نمبر حواله*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="hawalaNumber" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="نمبر حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_hawalaNumber)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_hawalaNumber?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_meqdarHawala)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مقدار حواله*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="meqdarHawala" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="مقدار حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_meqdarHawala)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_meqdarHawala?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_felterMoblail)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">فلتر مبلایل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="felterMoblail" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="فلتر مبلایل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_felterMoblail)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_felterMoblail?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_felterDezal)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">فلتر دیزل*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="felterDezal" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="فلتز دیزل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_felterDezal)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_felterDezal?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_felterPetrol)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">فلتر پطرول*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="felterPetrol" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="فلتر پطرول">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_felterPetrol)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_felterPetrol?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_waikm)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">ویکم*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="waikm" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="ویکم">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_waikm)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_waikm?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_haidrolek)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">هایدرو لیک*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="haidrolek" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="هیدرو لیک">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_haidrolek)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_haidrolek?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_geres)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">گیریس*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="geres" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="گیریس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_geres)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_geres?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_seail)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">سیاؤیل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="seail" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="سیائیل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_seail)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_seail?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_abAnteFrez)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">آب انتی فریز*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="abAnteFrez" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="آب آنی فریز">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_abAnteFrez)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_abAnteFrez?></span>
                                <?php }?>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/moblailController/index" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="Add" class="btn btn-circle green-meadow" value="ذخیره"/>
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