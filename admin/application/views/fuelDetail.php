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
                    <a href="<?=base_url()?>index.php/UsersController/index">تیل</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>معلوما ت تیل</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">معلومات عمومی  تیل</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/fuelController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="table-scrollable">
                                <?php foreach ($data as $row) { } ?>
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                       <?php
                                       $this->db->where('id',$row->car_id);
                                       $this->db->from('car');
                                       $value=$this->db->get()->result();
                                       foreach($value as $key){}
                                        ?>
                                        <th>نام موتر</th>
                                        <td><?=$key->typ_of_car?></td>
                                    </tr>
                                    <tr>
                                        <th>نام دریور</th>
                                        <td><?=$key->driver_name?></td>
                                    </tr>
                                    <tr>
                                        <th>نوعیت موتر</th>
                                        <td><?=$key->car_model?></td>
                                    </tr>
                                  
                                    <tr>
                                        
                                        <th>پلیت</th>
                                        <td><?=$key->palet?></td>
                                    </tr>
                                    <tr>
                                        <th>نوعیت توظیف</th>
                                        <td><?php if($key->naweat_tawzef==1) echo "سهمیه"; else echo "خدمتی"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>مرجع استفاده کننده</th>
                                        <td><?=$key->us_refr?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>استفاده کننده</th>
                                        <td><?=$key->user?></td>
                                    </tr>
                                   
                                    <tr>
                                        <th>مقدار تیل</th>
                                        <td><?=$row->fuelAmount?></td>
                                    </tr>
                                    <tr>
                                        <th>نمبر حواله</th>
                                        <td><?=$row->hawala_num?></td>
                                    </tr>
                                    <tr>
                                        <th>تاریخ دروخواست  حواله</th>
                                        <td><?=$row->darkhaws_date?></td>
                                    </tr>
                                    <tr>
                                        <th>تاریخ  توزیع</th>
                                        <td><?=$row->hawala_date?></td>
                                    </tr>
                                    <tr>
                                        <th>شخص ثبت کننده</th>
                                        <td><?=$row->userName?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <br/>

                        <span class="thumbnail">
                            <img style="height: 300px;" src="<?=base_url()?>../assets/img/c.jpg" >
                        </span>
                    </div>
                </div>
            
        </div>
    </div>
</div>







