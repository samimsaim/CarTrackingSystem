<!-- BEGIN CONTENT -->
<!-- <link rel="stylesheet" href="<?=base_url()?>../assets/datepicker/dari.datepicker.min.css"> -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?=base_url()?>index.php/mainPageController/index">صفحه اصلی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/carController/khedmateCar">گزارش سالانه</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>گزارش سالانه</b>
                </li>
            </ul>
        </div>
                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div align="center" class="portlet-title">
                                        <span class="caption-subject bold uppercase">گزارش توحید شهدا زخمی های واقعات تروریستی ماه حمل</span>
                                    </div>
                                   
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" >
                                        <thead style="background-color: gray; color: white;">
                                            <tr style="text-align: center; height: 60px;">
                                                <th style="text-align: center; padding-bottom: 20px;">شماره</th>
                                                <th style="text-align: center;padding-bottom: 20px;">ولایت</th>
                                                <th style="text-align: center;padding-bottom: 20px;">ولسوالی</th>
                                                <th style="text-align: center;padding-bottom: 20px;">اسم نهاد</th>
                                                <th style="text-align: center;padding-bottom: 20px;">تاریخ  شروع
                                                <th style="text-align: center;padding-bottom: 20px;">تاریخ ختم</th>
                                                <th style="text-align: center;padding-bottom: 20px;">علت</th>
                                                <th style="text-align: center;padding-bottom: 20px;">خواست مظا هره کننده ها</th>
                                                <th style="text-align: center;padding-bottom: 20px;">محرکین</th>
                                                <th style="text-align: center;padding-bottom: 20px;">نوع تظاهرات</th>
                                                <th style="text-align: center;padding-bottom: 20px;">خسارات</th>
                                                <th style="text-align: center;padding-bottom: 20px;">اقدامات نیرو های امنیتی</th>
                                                
                                            </tr>

                                        </thead>
                                        <tbody style="text-align: center;">
                                            <?php foreach($data as $key) {
                                           if(date('m', strtotime($key->startDate))==date('m', strtotime($id))){
                                            ?>
                                        <tr>
                                            <td style="padding-top: 30px;"><b>۱ </b></td>
                                            <?php $this->db->where('id',$key->province);
                                                $this->db->from('province');
                                                $query=$this->db->get()->result();
                                                foreach($query as $pro)
                                                 ?>
                                            <td style="padding-top: 30px;"> 
                                            <?=$pro->name?></td>
                                            <?php $this->db->where('id',$key->destrict);
                                                $this->db->from('destrict');
                                                $query=$this->db->get()->result();
                                                foreach($query as $des)
                                                 ?>
                                            <td style="padding-top: 30px;"><?=$des->name?></td>
                                            <td style="padding-top: 30px;"><?=$key->orgName?></td>
                                             <td style="padding-top: 30px;"><?php 
                                                $curren_gdate=$key->startDate;
                                                $arr_part=explode('-', $curren_gdate);
                                                $gYear=$arr_part[0];
                                                $gMonth=$arr_part[1];
                                                $gDay=$arr_part[2];
                                                $current_jdate=gregorian_to_jalali($gYear, $gMonth, $gDay, '/');
                                                echo $current_jdate;
                                               
                                                ?></td>
                                            <td style="padding-top: 30px;"><?php 
                                                $curren_gdate=$key->endDate;
                                                $arr_part=explode('-', $curren_gdate);
                                                $gYear=$arr_part[0];
                                                $gMonth=$arr_part[1];
                                                $gDay=$arr_part[2];
                                                $current_jdate=gregorian_to_jalali($gYear, $gMonth, $gDay, '/');
                                                echo $current_jdate;
                                               
                                                ?></td>
                                            <td style="padding-top: 30px;"><?=$key->cause?></td>
                                            <td style="padding-top: 30px;"><?=$key->wish?></td>
                                            <td style="padding-top: 30px;"><?=$key->plan?></td>
                                            <td style="padding-top: 30px;"><?=$key->type?></td>
                                            <td style="padding-top: 30px;"><?=$key->destroy?></td>
                                            <td style="padding-top: 30px;"><?=$key->action?></td>
                                            
                                        </tr>
                                        <?php }}?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                  </div>
               </div>
