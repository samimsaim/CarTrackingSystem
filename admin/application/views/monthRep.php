<!-- BEGIN CONTENT -->

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
                    <a href="<?=base_url()?>index.php/mainPageController/index">گزارشات ماه وار عراده جات</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>گزارشات</b>
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
                                        <span class="caption-subject bold uppercase">گزارش ماه وار عراده جات</span>
                                    </div>
                                    <div class="actions">
                                   
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                               <!--  <div class="btn-group">
                                                  <a href="<?=base_url()?>index.php/carController/addCar"><button id="sample_editable_1_new" class="btn btn-circle green-meadow"> اضافه نمودن
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>  
                                                </div> -->
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th style="text-align: center;">کود نمبر</th>
                                                <th style="text-align: center;">نام دریور</th>
                                                <th style="text-align: center;">نوعیت موتر</th>
                                                <th style="text-align: center;">مودل</th>
                                               
                                                <th style="text-align: center;"> استقاده کننده</th> <th style="text-align: center;">نوعیت توظیف</th>
                                                
                                                
                                                <th style="text-align: center;">پرزه جات</th>
                                                <th style="text-align: center;">تیل</th>
                                                <th style="text-align: center;">مبلایل</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                          <?php foreach($data as $row){ ?>
                                             <tr class="odd gradeX">
                                              <td style="text-align: center;"><?=$row->cod_num?></td>
                                              <td style="text-align: center;"><?=$row->driver_name?></td>
                                              <td style="text-align: center;"><?=$row->typ_of_car?></td>
                                              <td style="text-align: center;"><?=$row->car_model?></td>
                                              <td style="text-align: center;"><?=$row->user?></td>
                                               <td style="text-align: center;"><?php if($row->naweat_tawzef==1) echo 'سهمیه'; else echo 'خدمتی';?></td>
                                              <td style="text-align: center;"><a href="<?=base_url()?>index.php/TransportRepController/monthlyRep?id=<?=$row->id.'&dat='.$_GET['dat']?>" class="btn  btn-icon-only btn-circle green-meadow"title="جزئیات">جزئیات</a>
                                              </td>
                                              <td style="text-align: center;"><a href="<?=base_url()?>index.php/TransportRepController/monthlyFuelRep?id=<?=$row->id.'&dat='.$_GET['dat']?>" class="btn  btn-icon-only btn-circle green-meadow"title="جزئیات">جزئیات</a>
                                              </td>
                                              <td style="text-align: center;"><a href="<?=base_url()?>index.php/TransportRepController/monthlyMoblailRep?id=<?=$row->id.'&dat='.$_GET['dat']?>" class="btn  btn-icon-only btn-circle green-meadow"title="جزئیات">جزئیات</a>
                                              </td> 
                                            </tr>
                                           <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                  </div>
               </div>
<script type="text/javascript">
    var url="<?php echo base_url(); ?>";
    function delete_record(id){
        var r=confirm("آیا میخواهد که این ریکارد را حذف کنید؟")
        if(r==true)
            window.location=url+"index.php/carController/DeletCar?id="+id;
        else
            return false;
    }
</script>

<?php
if (isset($Message) && isset($Type)) {
    ?>
    <div id="success" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismis="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:<?php if(isset($Type) && $Type == 'success')echo 'green';else echo 'red';?>;font-weight: bold"><?php if(isset($Type) && $Type == 'success') echo 'موفقانه!';elseif(isset($Type) && $Type =='failed') echo 'متاسفانه!'?></h4>
                </div>
                <div class="modal-body">
                    <p style="color:<?php if(isset($Type) && $Type == 'success')echo 'green';else echo 'red';?>;font-size: 20px"><?=$Message?></p>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url()?>index.php/carController/carsView" class="btn btn-primary">بستن</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(window).load(function () {
            // this code prevent closing when the user clicking to out of modal area
            $('#success').modal({backdrop: 'static', keyboard: false});
            $('#success').modal('show');
        });
    </script>
<?php } ?>