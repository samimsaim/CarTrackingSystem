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
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/carController/carsView" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/carControlle/checkEditCar">
                    <div class="form-body">
                    <div class="row">
                    
                   
                    </div>
                    <div class="row">
                          <?php foreach($data as $row){} ?>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_cod)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">کود نمبر*</label>
                            <div class="col-md-9">
                                <input type="Number" class="form-control" name="codNumber" value="<?=$row->cod_num?>" placeholder="Cod Number">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_cod)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_cod?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_type_of_car)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت موتر*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="typeOfCar" value="<?=$row->typ_of_car?>" ceholder="Car Type">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_type_of_car)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_type_of_car?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_car_model)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مودل موتر*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="carModel" value="<?=$row->car_model?>" placeholder="Car Model">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_car_model)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_car_model?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_palet)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">پلیت*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="palet" value="<?=$row->palet?>" placeholder="palet">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_palet)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_palet?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($driver_name)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نام دریور*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="driverName" value="<?=$row->driver_name?>" placeholder="Driver Name">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($driver_name)){?>
                                    <span class="help-block-error" style="color:red;"><?=$driver_name?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_user_ref)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">مرجه استفاده کننده*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="usingRef" value="<?=$row->us_refr?>" placeholder="User Reference">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_user_ref)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_user_ref?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_user)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">استفاده کننده*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="user" value="<?=$row->user?>" placeholder="User">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_user)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_user?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_type_of_tawzef)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت توظیف*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="naweatTawzef">
                                   <option><?php if($row->naweat_tawzef==1) echo 'سهمیه'; else echo 'خدمتی'; ?></option>
                                    <option value="0">خدمتی </option>
                                    <option value="1">سهمیه</option>
                                </select>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_type_of_tawzef)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_type_of_tawzef?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_type_of_fuel)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت تیل*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fuel" value="<?=$row->type_of_fuel?>" placeholder="Type Of fuel">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_type_of_fuel)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_type_of_fuel?></span>
                                <?php }?>
                            </div>
                        </div>
                       <input type="hidden" name="id" value="<?=$row->id?>">
                  
                     
                     
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/carController/carsView" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="AddCar" class="btn btn-circle green-meadow" value="ذخیره"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
