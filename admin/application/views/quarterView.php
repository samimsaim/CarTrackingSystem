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
                    <a href="<?=base_url()?>index.php/carController/index">گزارش سالانه</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>گزارش  سالانه آمریت ترانسپورت  سال مالی ()</b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">زارش سال ()</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/careRepController/carEventRep?id=<?=$_GET['id']?>" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            
                <div class="portlet-body">
                    <!-- BEGIN PAGE CONTENT-->
            <div class="tiles" style="margin-right: 100px;" >
                <a href="<?=base_url()?>index.php/careRepController/quarterOne?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-blue">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش   ربع اول</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/quartertwo?id=<?=$_GET['id'];?>">
                <div class="tile double selected bg-green-turquoise">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش   ربع دوم</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/quarterThree?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-yellow">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش ر ربع سوم</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/quarterFour?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-purple">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 85px;">
                            <b style="font-size: 20px;">گزارش  ربع چهارم</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>







