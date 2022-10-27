<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?=base_url()?>index.php/mainPageController/index">صفحه اصلی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/carController/index">موتر های سهمیه</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>معلومات عمومی موتر</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">علومات عمومی موتر</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/carController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="table-scrollable">
                                
                                <table class="table table-hover">
                                    <tbody>
                                        <?php foreach($data as $row){} ?>
                                         <tr>
                                        <th>کود نمبر</th>
                                        <td><?=$row->cod_num?></td>
                                    </tr>
                                    <tr>
                                        <th>نام دریور</th>
                                        <td><?=$row->driver_name?></td>
                                    </tr>
                                    <tr>
                                        <th>نوعیت موتر</th>
                                        <td><?=$row->typ_of_car?></td>
                                    </tr>
                                  <tr>
                                        <th>مودل موتر</th>
                                        <td><?=$row->car_model?></td>
                                    </tr>
                                    <tr>
                                        
                                        <th>پلیت</th>
                                        <td><?=$row->palet?></td>
                                    </tr>
                                    <tr>
                                        <th>نوعیت توظیف</th>
                                        <td><?php if($row->naweat_tawzef==1) echo 'سهمیه'; else echo 'خدمتی';?></td>
                                    </tr>
                                    <tr>
                                        <th>مرجع استفاده کننده</th>
                                        <td><?=$row->us_refr?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>استفاده کننده</th>
                                        <td><?=$row->user?></td>
                                    </tr>
                                   
                                    <tr>
                                        <th>نوعیت تیل</th>
                                        <td><?=$row->type_of_fuel?></td>
                                    </tr>
                                   
                                  
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    
                </div>
            
        </div>
    </div>
</div>







