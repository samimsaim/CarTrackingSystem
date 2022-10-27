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
               
            </div>
            
                <div class="portlet-body">
                    <!-- BEGIN PAGE CONTENT-->
            <div class="tiles" style="margin-right: 100px;" >
                <a href="<?=base_url()?>index.php/careRepController/shahedHamal?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">شهدا و مجروحین جنایی و تروریستی</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/ladarakMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">لا درک پرسونل</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/afatMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">واقعات آفات طبیعی</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="<?=base_url()?>index.php/careRepController/carEventRep?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">خود کشی معلمین و متعلمین</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/ekhtetafMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">اختطاف معلمین متعلمین و منسوبین</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/theftMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">سرقت در مکاتب و نهاد های تعلیمی</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/destroyMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">تخریب  انفجار وحریق مکاتب</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/afrazMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">افراز پوسته نیرو های امنیتی</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/threadMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">تهدیدات محالقین دولت در مکاتب</b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/paradMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">تظاهرات در مکاتب و نهاد های تعلیمی </b>
                        </div>
                        
                    </div>
                </div>
            </a>
             <a href="<?=base_url()?>index.php/careRepController/preventMonthly?id=<?=$_GET['id'];?>">
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
                            <b style="font-size: 20px;">جلوگیری از اعمال تروریستی و جنایی</b>
                        </div>
                        
                    </div>
                </div>
            </a>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>







