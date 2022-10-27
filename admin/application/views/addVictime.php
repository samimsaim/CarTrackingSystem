<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                   
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/studentController/index">واقعات آفات طبیعی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>اضافه  نمودن  واقعات آفات طبیعی</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">اضافه نمودن  واقعات آفات طبیعی</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/eventController/victimeView" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            <div class="portlet-body form" style="margin-right: 20px;">
                <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/eventController/CheckAddVictime">
                    <div class="form-body">
                    <div class="row">
                    </div>
                    <div class="row">
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_province)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">ولایت*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="province" onchange="getDepartment()" id="fac">
                                    <option <?php if(!empty($Field_data['faculty']) && $Field_data['faculty'] == 0) echo ' selected '?> value="0">انتخاب ولایت</option>
                                    <?php foreach ($pro as $row) { ?>
                                    <option <?php if(!empty($Field_data['faculty']) && $Field_data['faculty'] == $row->id) echo ' selected '?> value="<?=$row->id?>"><?=$row->name?></option>
                                    <?php }?>
                                </select>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_province)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_province?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_destrict)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">ولسوالی</label>
                            <div class="col-md-9">
                                <select class="form-control" name="destrict" id="dep">
                                    <option <?php if(!empty($Field_data['dis']) && $Field_data['dis'] == 0) echo ' selected '?> value="0">انتخاب  ولسوالی</option>
                                </select>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_destrict)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_destrict?></span>
                                <?php }?>
                            </div>
                        </div>
                            </div>
                    <div class="row">
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_orgName)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نام نهاد*</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="orgName" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="نام نهاد">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_orgName)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_orgName?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_date)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تاریخ *</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="date" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="date">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_date)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_date?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_typeOfJob)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت وظیفه*</label>
                           <div class="col-md-9">
                                <input type="text" class="form-control" name="typeOfJob" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="نوعیت وظیفه">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_typeOfJob)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_typeOfJob?></span>
                                <?php }?>
                            </div>
                        </div>

                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_gender)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">جنسیت*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="gender">
                                   <option value="0">انتخاب جنسیت</option>
                                    <option value="مزکر">مذکز </option>
                                    <option value="مونث">مونث</option>
                                </select>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_gender)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_gender?></span>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_talafat)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">نوعیت تلفات*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="talafat">
                                   <option value="0">انتخاب  نوعیت تلفات</option>
                                    <option value="زخمی">زخمی</option>
                                    <option value="شهید">شهید </option>
                                    <option value="فوت">فوت</option>
                                </select>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_talafat)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_talafat?></span>
                                <?php }?>
                            </div>
                        </div>
                          <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_number)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">تعداد*</label>
                            <div class="col-md-9">
                                <input style="text-align: right;" type="text" class="form-control" name="number" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>" placeholder="تعداد">
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_number)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_number?></span>
                                <?php }?>
                            </div>
                        </div>
                         <div class="form-group form-md-line-input col-md-6 <?php if (!empty($error_detail)) echo 'has-error' ?>">
                            <label class="col-md-3 control-label" style="font-weight: bold">جزیات*</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control" name="detail" value="<?php if (!empty($Field_data['name'])) echo $Field_data['name']; ?>"></textarea>
                                <div class="form-control-focus"> </div>
                                <?php if(!empty($error_detail)){?>
                                    <span class="help-block-error" style="color:red;"><?=$error_detail?></span>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <a href="<?=base_url()?>index.php/eventController/victimeView" class="btn btn-circle yellow-gold">لغو</a>
                                <input type="submit" name="addVictime" class="btn btn-circle green-meadow" value="ذخیره"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function getDepartment(){
        var facId = $("#fac").val();
        var department = document.getElementById("dep");
        $(department).empty();
        $(department).append('<option selected value='+0+'></option>');
        $.ajax({
            type: "POST",
            url: "<?=base_url();?>index.php/eventController/getDest",
            data: {facId:facId},
            dataType: "JSON",
            success: function(data) {
                for(var i = 0; i < data.length; i++){
                    $(department).append('<option value='+data[i]['id']+'>'+data[i]['name']+'</option>');
                }
            },
            error: function(err) {
            }
        });
    }
</script>
