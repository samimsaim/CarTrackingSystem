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
                    <a href="<?=base_url()?>index.php/UsersController/index">مبلایل</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>معلوما مبلایل</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">معلومات عمومی  مبلایل</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/moblailController/index" style="font-size: 16px;">
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
                                        <th>تاریخ درخواست حواله</th>
                                        <td><?=$row->tarikhDarkhast?></td>
                                          <th>تاریخ حواله</th>
                                        <td><?=$row->tarikhHawala?></td>
                                    </tr>
                                    <tr>
                                        <th>نمبر حواله</th>
                                        <td><?=$row->hawalaNumber?></td>
                                         <th>مقدار حواله</th>
                                        <td><?=$row->meqdarHawala?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>فلتر مبلایل</th>
                                        <td><?=$row->felterMoblail?></td>
                                         <th>فلتر دیزل</th>
                                        <td><?=$row->felterDezal?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th> فلترپطرول</th>
                                        <td><?=$row->felterPetrol?></td>
                                        <th>ویکم</th>
                                        <td><?=$row->waikm?></td>
                                    </tr>
                                   <tr>
                                        <th>هایدرو لیک</th>
                                        <td><?=$row->haidrolek?></td>
                                        <th>گیریس</th>
                                        <td><?=$row->geres?></td>
                                    </tr>
                                    <tr>
                                        <th>سیائیل</th>
                                        <td><?=$row->seail?></td>
                                        <th>آب انتی فریز</th>
                                        <td><?=$row->anteFrezAb?></td>
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







