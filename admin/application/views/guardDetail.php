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
                    <a href="<?=base_url()?>index.php/UsersController/index">معلومات محافظ</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>محافظ</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">معلومات  محافظ</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/guardController/index" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="table-scrollable">
                                <?php foreach($data as $row){?>
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>اسم</th>
                                        <td><?=ucfirst($row->name)?></td>
                                    </tr>
                                    <tr>
                                        <th>ولد</th>
                                        <td><?=ucfirst($row->fname)?></td>
                                    </tr>
                                    <!-- <tr>
                                        <th>جنسیت</th>
                                        <td><?php if($row->gender=='m') echo 'مرد'; else echo 'زن';?></td>
                                    </tr> -->
                                    <tr>
                                        <th>وظیفه</th>
                                        <td><?=$row->job?></td>
                                    </tr>
                                    <tr>
                                        <th>موقعیت</th>
                                        <td><?=$row->location?></td>
                                    </tr>
                                    <tr>
                                        <th>شماده تماس</th>
                                        <td><?=ucfirst($row->phone)?></td>
                                    </tr>
                                    

                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <br/>

                        <span class="thumbnail">
                            <img src="<?php if(!empty($row->photo)){ echo base_url().$row->photo;} else{ if($row->photo==null){ echo base_url()."assets/img/users/male.jpg";} elseif($row->gender!=null){ echo base_url()."assets/img/users/female.jpg";}}?>" alt="<?=$row->name." photo"?>">
                        </span>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
