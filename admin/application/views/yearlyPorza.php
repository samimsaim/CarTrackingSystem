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
                    <a href="<?=base_url()?>index.php/UsersController/index">گزارش  سالانه پرزه جات موتر</a>
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
                    <span class="caption-subject font-green bold uppercase">گزارش   سالانه پرزه جات موتر </span>
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
                                    <tr style="background-color: yellow;">
                                        <?php
                                        $this->db->where('car_id',$row->id);
                                         $this->db->where('DATE_FORMAT(tarikhSodorHawala,"%Y")',date('Y', strtotime(date($_GET['dat']))));
                                         $this->db->select_sum('qematMajmoe');
                                        $result=$this->db->get('purzajat')->row();
                                        $query= $result->qematMajmoe;

                                         ?>
                                        <th>مصارف مجموعی پرزه جات موتر در سال</th>
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







