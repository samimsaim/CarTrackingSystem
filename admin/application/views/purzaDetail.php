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
                    <a href="<?=base_url()?>index.php/UsersController/index">پرزه جات</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>معلوما پرزه جات</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">معلومات عمومی  پرزه جات</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/PurzaJatController/index" style="font-size: 16px;">
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
                                         <th>نوعیت موتر</th>
                                        <td><?=$key->car_model?></td>
                                    </tr>
                                    <tr>
                                        <th>پلیت</th>
                                        <td><?=$key->palet?></td>
                                         <th>نوعیت توظیف</th>
                                        <td><?php if($key->naweat_tawzef==1) echo "سهمیه"; else echo "خدمتی"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>مرجع استفاده کننده</th>
                                        <td><?=$key->us_refr?></td>
                                        <th>استفاده کننده</th>
                                        <td><?=$key->user?></td>
                                    </tr>
                                    <tr>
                                        <th>نمبر حواله</th>
                                        <td><?=$row->hawalaNumber?></td>
                                          <th>نام جنس</th>
                                        <td><?=$row->jensName?></td>
                                    </tr>
                                    <tr>
                                        <th>تعداد جنس</th>
                                        <td><?=$row->taidadJens?></td>
                                         <th>قیمت جنس</th>
                                        <td><?=$row->qematJens?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>تعداد قلم</th>
                                        <td><?=$row->taidadQalam?></td>
                                         <th>قیمت مجموعی</th>
                                        <td><?=$row->qematMajmoe?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>تاریخ صدور حواله</th>
                                        <td><?=$row->tarikhSodorHawala?></td>
                                        <th>نوعیت توزیع</th>
                                        <td><?=$row->naweatTawzai?></td>
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







