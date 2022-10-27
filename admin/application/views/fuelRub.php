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
                    <a href="<?=base_url()?>index.php/transportRepController/rubRep">گزارشات  ربع وار تیل</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>گزارشات</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">گزارش ربع وار تیل</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/transportRepController/rubRep?dat=<?=$_GET['dat']?>" style="font-size: 16px;">
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
                                       $this->db->from('moblail');
                                       $value=$this->db->get()->result();
                                       foreach($value as $key){}
                                        ?>
                                        <th>کد نمبر</th>
                                        <td><?=$row->cod_num?></td>
                                    </tr>
                                    <tr>
                                        <th>نام موتر وان</th>
                                        <td><?=$row->driver_name?></td>
                                    </tr>
                                    <tr>
                                        <th>نام موتر</th>
                                        <td><?=$row->typ_of_car?></td>
                                    </tr>
                                     <tr>
                                         <th>نوعیت موتر</th>
                                        <td><?=$row->car_model?></td>
                                    </tr>
                                    <tr>
                                        <th>پلیت</th>
                                        <td><?=$row->palet?></td>
                                    </tr>
                                     <tr>
                                         <th>نوعیت توظیف</th>
                                        <td><?php if($row->naweat_tawzef==1) echo "سهمیه"; else echo "خدمتی"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>مرجع استفاده کننده</th>
                                        <td><?=$row->us_refr?></td>
                                    </tr>
                                     <tr>
                                        <th>استفاده کننده</th>
                                        <td><?=$row->user?></td>
                                    </tr>
                                   
                                  <!--   <tr>
                                        <th>نمبر حواله</th>
                                        <td><?php if($value!=null) echo $key->hawalaNumber; else echo '0';?></td>
                                         <th>نوعیت تیل</th>
                                        <td><?php if($value!=null) echo $row->meqdarHawala; else echo '0';?></td>
                                    </tr> -->
                                   
                                    <tr style="background-color: yellow;">
                                           <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','01');
                                        $result= $this->db->select_sum('fuelAmount');
                                        $result=$this->db->get('fuel')->row();
                                        $query= $result->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','02');
                                        $result1= $this->db->select_sum('fuelAmount');
                                        $result1=$this->db->get('fuel')->row();
                                        $query1= $result1->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','03');
                                        $result2= $this->db->select_sum('fuelAmount');
                                        $result2=$this->db->get('fuel')->row();
                                        $query2= $result2->fuelAmount;
                                         ?>
                                        <th><b>مصارف ربع اول </b></th>
                                        <td><?php if($query!=null) echo $query+$query1+$query2; else echo '0';?></td>
                                        
                                    </tr>
                                     <tr style="background-color: yellow;">
                                           <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','04');
                                        $result= $this->db->select_sum('fuelAmount');
                                        $result=$this->db->get('fuel')->row();
                                        $query= $result->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','05');
                                        $result1= $this->db->select_sum('fuelAmount');
                                        $result1=$this->db->get('fuel')->row();
                                        $query1= $result1->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','06');
                                        $result2= $this->db->select_sum('fuelAmount');
                                        $result2=$this->db->get('fuel')->row();
                                        $query2= $result2->fuelAmount;
                                         ?>
                                        <th><b>مصارف ربع دوم</b></th>
                                        <td><?php if($query!=null) echo $query+$query1+$query2; else echo '0';?></td>
                                        
                                    </tr>
                                   <tr style="background-color: yellow;">
                                           <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','07');
                                        $result= $this->db->select_sum('fuelAmount');
                                        $result=$this->db->get('fuel')->row();
                                        $query= $result->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','08');
                                        $result1= $this->db->select_sum('fuelAmount');
                                        $result1=$this->db->get('fuel')->row();
                                        $query1= $result1->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','09');
                                        $result2= $this->db->select_sum('fuelAmount');
                                        $result2=$this->db->get('fuel')->row();
                                        $query2= $result2->fuelAmount;
                                         ?>
                                        <th><b>مصارف ربع  سوم</b></th>
                                        <td><?php if($query!=null) echo $query+$query1+$query2; else echo '0';?></td>
                                        
                                    </tr>
                                   <tr style="background-color: yellow;">
                                           <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','10');
                                        $result= $this->db->select_sum('fuelAmount');
                                        $result=$this->db->get('fuel')->row();
                                        $query= $result->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','11');
                                        $result1= $this->db->select_sum('fuelAmount');
                                        $result1=$this->db->get('fuel')->row();
                                        $query1= $result1->fuelAmount;
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(hawala_date,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->where('DATE_FORMAT(hawala_date,"%m")','12');
                                        $result2= $this->db->select_sum('fuelAmount');
                                        $result2=$this->db->get('fuel')->row();
                                        $query2= $result2->fuelAmount;
                                         ?>
                                        <th><b>مصارف ربع چهارم</b></th>
                                        <td><?php if($query!=null) echo $query+$query1+$query2; else echo '0';?></td>
                                        
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







