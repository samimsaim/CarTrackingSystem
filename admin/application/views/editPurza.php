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
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/PurzaJatController/CheckEditPurza">
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
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_hawalaNumber)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نمبر حواله*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="hawalaNumber" value="<?=$key->hawalaNumber?>" placeholder="نمبر حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_hawalaNumber)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_hawalaNumber?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_jensName)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نام جنس*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="jensName" value="<?=$key->jensName?>" placeholder="نام جنس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_jensName)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_jensName?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_tadadeJens)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تعداد جنس*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tadadeJens" value="<?=$key->taidadJens?>" placeholder="تعداد جنس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_tadadeJens)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_tadadeJens?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_qemateJens)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">قیمت جنس*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="qemateJens" value="<?=$key->qematJens?>" placeholder="قیمت جنس">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_qemateJens)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_qemateJens?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_taidateQalam)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تعداد قلم*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="taidateQalam" value="<?=$key->taidadQalam?>" placeholder="تعداد قلم">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_taidateQalam)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_taidateQalam?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_qemateMajmoe)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">قیمت مجموعی*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="qemateMajmoe" value="<?=$key->qematMajmoe?>" placeholder="قیمت مجموعی">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_qemateMajmoe)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_qemateMajmoe?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_tarikhSodorHawala)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ صدور حواله*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="date" class="form-control" name="tarikhSodorHawala" value="<?=$key->tarikhSodorHawala?>" placeholder="تاریخ صدور حواله">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_tarikhSodorHawala)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_tarikhSodorHawala?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_naweateTawzai)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت توزیع*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="naweateTawzai" value="<?=$key->naweatTawzai?>" placeholder="نوعیت توزیع">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_naweateTawzai)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_naweateTawzai?></span>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                        <input type="hidden" name="id" value="<?=$key->id?>">
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/PurzaJatController/index" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="Add" class="btn btn-circle green-meadow" value="ذخیره"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
