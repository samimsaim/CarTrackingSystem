<?php

class ProvinceController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('ProvinceModel');
	}
	function index($message = null, $type = null){
       $data=$this->ProvinceModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("provinceView",array('data'=>$data,'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');


 	}
 	 function addProvince(){
        $result=$this->ProvinceModel->addProvince();
        if($result){
            ProvinceController::index("ولایت مورد نظر موفقانه اضافه شد", 'success');
        }else{
            ProvinceController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }

   function updateProvince(){
        $id=$_POST['id'];
        $data=array(
            'name'=>$_POST['name'],
            'updateDate'=>date('Y-m-d'),

        );
        $result=$this->ProvinceModel->updateProvince($id,$data);
         if($result){
            ProvinceController::index("ولایت مورد نظر موفقانه  ویرایش شد", 'success');
        }else{
            ProvinceController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }
 
   function deleteProvince(){
          $id=$_GET['id'];
          $result=$this->ProvinceModel->deleteProvince($id);
          if($result){
            ProvinceController::index("ولایت مورد نظر موفقانه حذف شد", 'success');
         }else{
            ProvinceController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }
    function destrict($message = null, $type = null){
       $data=$this->ProvinceModel->getDestrict();
       $key=$this->ProvinceModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("destrictView",array('data'=>$data,'key'=>$key,'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');


    }
     function addDestrict(){
        $result=$this->ProvinceModel->addDestrict();
        if($result){
            ProvinceController::destrict("ولایت مورد نظر موفقانه اضافه شد", 'success');
        }else{
            ProvinceController::destrict("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }
      function updateDestrict(){
        $id=$_POST['id'];
        $data=array(
            'name'=>$_POST['name'],
            'pro_id'=>$_POST['province'],
            'updateDate'=>date('Y-m-d'),

        );
        $result=$this->ProvinceModel->updateDestrict($id,$data);
         if($result){
            ProvinceController::destrict("ولایت مورد نظر موفقانه  ویرایش شد", 'success');
        }else{
            ProvinceController::destrict("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }
  function deleteDestrict(){
          $id=$_GET['id'];
          $result=$this->ProvinceModel->deleteDestrict($id);
          if($result){
            ProvinceController::destrict("ولایت مورد نظر موفقانه حذف شد", 'success');
         }else{
            ProvinceController::destrict("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }

}
 ?>

