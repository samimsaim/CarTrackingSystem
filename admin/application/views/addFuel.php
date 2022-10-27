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
                    <a href="<?=base_url()?>index.php/studentController/index">موتر</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه  موتر</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه کردن  موتر</span>
                </div>
               <!--  <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/fuelController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div> -->
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/fuelController/CheckAddFuel">
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
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_fuelAmount)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مقدار تیل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fuelAmount" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="مقدار تیل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_fuelAmount)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_fuelAmount?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_fuelType)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت تیل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fuelType" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="نوعیت تیل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_fuelType)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_fuelType?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_dakhawst)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ درخواست تیل*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="date" class="form-control date" name="darkhawst" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="تاریخ درخواست تیل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_dakhawst)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_dakhawst?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_hawala)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ توزیع*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="date" class="form-control date" name="hawala" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="نوعیت موتر">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_hawala)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_hawala?></span>
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
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/fuelController/index" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="AddFuel" class="btn btn-circle green-meadow" value="ذخیره"/>
                            </div>
                        </div>
                    </div>
                </form>
                <input type="text" placeholder="a text box" id="usage" />
            </div>
        </div>
    </div>
</div>
 <script src="<?=base_url()?>/assets/persianDatepicker.js"></script>
    <script>
        $(function () {
            //usage
            $("#usage").persianDatepicker();

            //themes
            $("#pdpDefault").persianDatepicker({ alwaysShow: true, });
            $("#pdpLatoja").persianDatepicker({ theme: "latoja", alwaysShow: true, });
            $("#pdpLightorang").persianDatepicker({ theme: "lightorang", alwaysShow: true, });
            $("#pdpMelon").persianDatepicker({ theme: "melon", alwaysShow: true, });
            $("#pdpDark").persianDatepicker({ theme: "dark", alwaysShow: true, });
            //startDate is tomarrow
            var p = new persianDate();
            $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


        });
    </script>