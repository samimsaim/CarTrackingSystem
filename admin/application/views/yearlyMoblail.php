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
                    <a href="<?=base_url()?>index.php/UsersController/index">گزارش سالانه مبلایل موتر</a>
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
                    <span class="caption-subject font-green bold uppercase">گزارش  سالانه مبلایل موتر</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/transportRepController/yearlyRep?dat=<?=$_GET['dat']?>" style="font-size: 16px;">
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
                                       $this->db->from('purzajat');
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
                                       
                                       
                                    </tr>
                                    
                                   
                                   <tr>
                                         <th>مرجع استفاده کننده</th>
                                        <td><?=$row->us_refr?></td>
                                        <th>استفاده کننده</th>
                                        <td><?=$row->user?></td>
                                    </tr>
                                    <tr style="background-color: yellow;">
                                        <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('felterMoblail');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->felterMoblail;

                                         ?>
                                        <th>مصرف فلتر مبلایل در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                         <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('felterDezal');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->felterDezal;

                                         ?>
                                        <th>مصرف فلتر  دیزل در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                        
                                    </tr>
                                    <tr style="background-color: yellow;">
                                        <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('felterPetrol');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->felterPetrol;

                                         ?>
                                        <th>مصرف فلتر مبلایل در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                         <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('waikm');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->waikm;

                                         ?>
                                        <th>مصرف ویکم در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                        
                                    </tr>
                                    <tr style="background-color: yellow;">
                                        <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('haidrolek');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->haidrolek;

                                         ?>
                                        <th>مصرف هایدرو لیک در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                         <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('geres');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->geres;

                                         ?>
                                        <th>مصرف گریس در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                        
                                    </tr>
                                    <tr style="background-color: yellow;">
                                        <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('seail');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->seail;

                                         ?>
                                        <th>مصرف سیایل در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                         <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('anteFrezAb');
                                        $result=$this->db->get('moblail')->row();
                                        $query= $result->anteFrezAb;

                                         ?>
                                        <th>مصرف  آب انتی فریز در سال</th>
                                        <td><?php if($value!=null) echo $query; else echo '0';?></td>
                                        
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







