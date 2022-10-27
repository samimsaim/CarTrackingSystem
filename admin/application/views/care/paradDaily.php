
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?=base_url()?>index.php/mainPageController/chartView">صفحه اصلی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/mainPageController/index">قوع تظاهرات در مکاتب و نهاد های تعلیمی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>قوع تظاهرات در مکاتب و نهاد های تعلیمی</b>
                </li>
            </ul>
        </div>
                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">وقوع تظاهرات در مکاتب و نهاد های تعلیمی</span>
                                    </div>
                                    <div class="actions">
                                   
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                  <a href="<?=base_url()?>index.php/eventController/addParad"><button id="sample_editable_1_new" class="btn btn-circle green-meadow sbold green"> اضافه نمودن
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>  
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th style="text-align: center;">ولایت</th>
                                                <th style="text-align: center;">ولسوالی</th>
                                                <th style="text-align: center;">نهاد</th>
                                                 <th style="text-align: center;">علت تظاهرات</th>
                                                <th style="text-align: center;">خواست مظاهره کننده ها</th>
                                                <th style="text-align: center;">محرکین</th>
                                                 <th style="text-align: center;">تاریخ شروع</th>
                                                 <th style="text-align: center;">تاریخ ختم</th>
                                                <th style="text-align: center;">تنظیمات</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                          <?php foreach($data as $key) {
                                             if(date('Y', strtotime($key->startDate))==date('Y', strtotime($id))){
                                            ?>
                                             <tr class="odd gradeX">
                                                <?php $this->db->where('id',$key->province);
                                                $this->db->from('province');
                                                $query=$this->db->get()->result();
                                                foreach($query as $pro)
                                                 ?>
                                                
                                              <td style="text-align: center;"><?=$pro->name?></td>
                                              <?php $this->db->where('id',$key->destrict);
                                                $this->db->from('destrict');
                                                $query=$this->db->get()->result();
                                                foreach($query as $des)
                                                 ?>
                                              <td style="text-align: center;"><?=$des->name?></td>
                                              
                                              <td style="text-align: center;"><?=$key->orgName?></td>
                                              <td style="text-align: center;"><?=$key->cause?></td>
                                               <td style="text-align: center;"><?=$key->wish?></td>
                                               <td style="text-align: center;"><?=$key->plan?></td>
                                               <td style="text-align: center;">
                                                    <?php 
                                                $curren_gdate=$key->startDate;
                                                $arr_part=explode('-', $curren_gdate);
                                                $gYear=$arr_part[0];
                                                $gMonth=$arr_part[1];
                                                $gDay=$arr_part[2];
                                                $current_jdate=gregorian_to_jalali($gYear, $gMonth, $gDay, '/');
                                                echo $current_jdate;
                                               
                                                ?>
                                               </td>
                                               <td style="text-align: center;">
                                                    <?php 
                                                $curren_gdate=$key->endDate;
                                                $arr_part=explode('-', $curren_gdate);
                                                $gYear=$arr_part[0];
                                                $gMonth=$arr_part[1];
                                                $gDay=$arr_part[2];
                                                $current_jdate=gregorian_to_jalali($gYear, $gMonth, $gDay, '/');
                                                echo $current_jdate;
                                               
                                                ?>
                                               </td>
                                              <td style="text-align: center;"><a href="<?=base_url()?>index.php/eventController/paradDetail?id=<?=$key->id?>" class="btn  btn-icon-only btn-circle green-meadow"title="جزئیات">جزئیات</a>
                                              </td> 
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
