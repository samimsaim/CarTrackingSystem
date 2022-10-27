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
                    <a href="<?=base_url()?>index.php/UsersController/index">گزارش روزانه تیل</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>گزارش </b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">گزارش روزانه تیل</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/transportRepController/dailyRep" style="font-size: 16px;">
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
                                       
                                       $this->db->where('car_id',$row->id);
                                       $this->db->from('fuel');
                                       $value=$this->db->get()->result();
                                       foreach($value as $key){}
                                        ?>
                                        <th>نام موتر</th>
                                        <td><?=$row->typ_of_car?></td>
                                         <th>نوعیت موتر</th>
                                        <td><?=$row->car_model?></td>
                                    </tr>
                                    <tr>
                                        <th>پلیت</th>
                                        <td><?=$row->palet?></td>
                                         <th>نوعیت توظیف</th>
                                        <td><?php if($row->naweat_tawzef==1) echo "سهمیه"; else echo "خدمتی"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>مرجع استفاده کننده</th>
                                        <td><?=$row->us_refr?></td>
                                        <th>استفاده کننده</th>
                                        <td><?=$row->user?></td>
                                    </tr>
                                    <tr>
                                        <th>تاریخ حواله</th>
                                        <td><?php if($value!=null) echo $key->hawala_date; else echo '0';?></td>
                                          <th>تاریخ درخواست حواله</th>
                                        <td><?php if($value!=null) echo $key->darkhaws_date; else echo '0';?></td>
                                    </tr>
                                    <tr>
                                        <th>نمبر حواله</th>
                                        <td><?php if($value!=null) echo $key->hawala_num; else echo '0';?></td>
                                         <th>نوعیت تیل</th>
                                        <!-- <td><?php if($value!=null) echo $row->typOfFuel; else echo '0';?></td> -->
                                    </tr>
                                    
                                    <tr>
                                        <th>مقدار تیل</th>
                                        <td><?php if($value!=null) echo $key->fuelAmount; else echo '0';?></td>
                                         <th>نام ثبت کننده</th>
                                        <td><?php if($value!=null) echo $key->userName;
                                        else echo '0';?></td>
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







