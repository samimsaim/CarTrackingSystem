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
                    <b>گزارش  سالانه آمریت ترانسپورت  سال مالی </b>
                </li>
            </ul>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">گزارش سال </span>
                </div>
               <div class="actions">
                    <a class="btn btn-circle green-meadow" href="<?=base_url()?>index.php/careRepController/carEventRep?id=<?=$_GET['id'];?>" style="font-size: 16px;">
                        <i class="fa fa-share"></i>برگشت</a>
                    </a>
                </div>
            </div>
            
                <div class="portlet-body">
                    <!-- BEGIN PAGE CONTENT-->
            <div class="tiles" style="margin-right: 100px;" >
                <a href="<?=base_url()?>index.php/careRepController/monthRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-blue">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px; ">
                            <b style="font-size: 20px;"> گزارش ماه حمل</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/sawrRep?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">گزارش ماه ثور</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/jawzaRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-yellow">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 75px;">
                            <b style="font-size: 20px;">گزارش ماه جوزا</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/saratanRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-purple">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 55px;">
                            <b style="font-size: 20px;">گزارش ماه سرطان</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/asadRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-green-jungle">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 35px;">
                            <b style="font-size: 20px;">گزارش ماه اسد</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/snblaRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-yellow-gold">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px;">
                            <b style="font-size: 20px;">گزارش ماه سنبله</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/mezanRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-blue-hoki">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px;">
                            <b style="font-size: 20px;">گزارش ماه میزان</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/aqrabRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-blue-chambray">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px;">
                            <b style="font-size: 20px;">گزارش ماه عقرب</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/qawsRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-blue-steel">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px;">
                            <b style="font-size: 20px;">گزارش ماه قوس</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/jadeRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-red">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px;">
                            <b style="font-size: 20px;">گزارش ماه جدی</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/dalwaRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-yellow">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px;">
                            <b style="font-size: 20px;">گزارش ماه دلو</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/hotRep?id=<?=$_GET['id'];?>">
                 <div class="tile double selected bg-yellow">
                    <div class="corner">
                    </div>
                    <div class="check">
                    </div>
                    <div class="tile-body">
                       <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name" style="margin-right: 45px;">
                            <b style="font-size: 20px;">گزارش ماه  حوت</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>







