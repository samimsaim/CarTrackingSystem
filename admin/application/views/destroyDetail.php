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
                    <a href="<?=base_url()?>index.php/UsersController/index">رویداد ها</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>تفصیلات رویداد</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">تفصیلات رویداد</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/eventController/destroyView" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="table-scrollable">
                                <?php foreach($value as $row){?>
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <?php $this->db->where('id',$row->province);
                                        $this->db->from('province');
                                        $query=$this->db->get()->result();
                                        foreach($query as $pro){}
                                         ?>
                                        
                                        <th>ولایت</th>
                                        <td><?=ucfirst($pro->name)?></td>
                                    </tr>
                                    <tr>
                                        <?php $this->db->where('id',$row->destrict);
                                        $this->db->from('destrict');
                                        $query=$this->db->get()->result();
                                        foreach($query as $des){}
                                         ?>
                                        
                                        <th>ولسوالی</th>
                                        <td><?=ucfirst($des->name)?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>نام نهاد</th>
                                        <td><?=$row->orgName?></td>
                                    </tr>
                                    <tr>
                                        <th>نوعیت حادثه</th>
                                        <td><?=$row->typeOfEvent?></td>
                                    </tr>
                                    <tr>
                                        <th>نوع خساره</th>
                                        <td><?=$row->typeOf?></td>
                                    </tr>
                                    <tr>
                                        <th>تاریخ</th>
                                        <td><?=ucfirst($row->dateOfOcure)?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <br/>

                        <span class="thumbnail">
                            <?=$row->detail?>
                        </span>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
