<!-- BEGIN CONTENT -->
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
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/fuelController/CheckEditFuel">
                    <div class="form-body">
                    <div class="row">
                    
                   <?php foreach($result as $key){} ?>
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
                                <input type="text" class="form-control" name="fuelAmount" value="<?=$key->fuelAmount?>" placeholder="مقدار تیل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_fuelAmount)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_fuelAmount?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_fuelType)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت تیل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fuelType" value="<?=$key->typOfFuel?>" placeholder="نوعیت تیل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_fuelType)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_fuelType?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_dakhawst)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ درخواست تیل*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="date" class="form-control" name="darkhawst" value="<?=$key->darkhaws_date?>" placeholder="تاریخ درخواست تیل">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_dakhawst)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_dakhawst?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_hawala)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ توزیع*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="date" class="form-control" name="hawala" value="<?=$key->hawala_date?>"placeholder="نوعیت موتر">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_hawala)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_hawala?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_hawalaNumber)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نمبر حواله*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="hawalaNumber" value="<?=$key->hawala_num?>" placeholder="نمبر حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_hawalaNumber)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_hawalaNumber?></span>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                        <input type="hidden" name="id" value="<?=$key->id?>">
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
            </div>
        </div>
    </div>
</div>
