
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
                    <a href="<?=base_url()?>index.php/mainPageController/index">مکاتب</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <b>مکاتب مسدود و باز گشای شده</b>
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
                                        <span class="caption-subject bold uppercase">لیست  مکاتب مسدود و بازگشای شده</span>
                                    </div>
                                    <div class="actions">
                                   
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                  <a href="<?=base_url()?>index.php/schoolController/addSchool"><button id="sample_editable_1_new" class="btn btn-circle green-meadow sbold green"> اضافه نمودن
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
                                                <th style="text-align: center;"> ولسوالی</th>
                                                <th style="text-align: center;">اسم مکتب</th>
                                                <th style="text-align: center;">  تعداد                                        </th>
                                                <th style="text-align: center;">تاریخ مسدود</th>
                                                <th style="text-align: center;">تاریخ ازگشای</th>
                                                <th style="text-align: center;">مدت مسدود</th>
                                                 <th style="text-align: center;">تنظیمات</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                          <?php foreach($data as $row){
                                           ?>
                                             <tr class="odd gradeX">
                                              <td style="text-align: center;"><?=$row->province?></td>
                                              <td style="text-align: center;"><?=$row->destrict?></td>
                                              <td style="text-align: center;"><?=$row->shoolname?></td>
                                             
                                              <td style="text-align: center;"><?=$row->number?></td>
                                               <td style="text-align: center;"><?=$row->lockDate?></td>
                                               <td style="text-align: center;"><?=$row->openDate?></td>
                                               <td style="text-align: center;"><?=$row->locktime?></td>
                                              <td style="text-align: center;">
                                                <a href="<?=base_url()?>index.php/schoolController/editSchool?id=<?=$row->id?>" title="ویرایش" class="btn btn-icon-only btn-circle btn-success">ویرایش</a>
                                              <a class="btn  btn-icon-only btn-circle btn-danger" href="javascript:void(0);" onclick="delete_record(<?=$row->id?>);" data-toggle="tooltip" data-placement="top" title="حذف">حذف</a>
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
            window.location=url+"index.php/schoolController/DeletSchool?id="+id;
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
                    <a href="<?php echo base_url()?>index.php/schoolController/index" class="btn btn-primary">بستن</a>
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