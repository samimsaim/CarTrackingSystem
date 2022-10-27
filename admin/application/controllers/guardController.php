<?php

class GuardController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('GuardModel');
	}
	function index($message = null, $type = null){
       $data=$this->GuardModel->getGuard();
        $this->load->view('include/header.inc.php');
        $this->load->view("guardView",array('data'=>$data,'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');


 	}
 	function guardDetail(){
        $id=$_GET['id'];
        $data=$this->GuardModel->guardDetail($id);
 		$this->load->view('include/header.inc.php');
        $this->load->view("guardDetail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
 	}
    function editGuard(){
        $id=$_GET['id'];
        $data=$this->GuardModel->editGuard($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("editGuard",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
    }
 	function CheckAddGuard(){
        $error_name = $error_fname = $error_job= $error_location = $error_phone= $error_photo ='';
        $error = false;
        if (isset($_POST['AddGuard'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['name'])) {
                $error_name = 'لطفاً ا کود نمبر موتر را وارد نمبر';
                $error = true;
            }
            if (empty($_POST['fname'])) {
                $error_fname = 'لطفاً  نام دریور را وارد نمایدچ';
                $error = true;
            }
            if (empty($_POST['job'])) {
                $error_job = 'لطفاً  نوعیت موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['location'])) {
                $error_location = 'لطفاً  مودل موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['phone'])) {
                $error_phone = 'لطفاً  نمبر پلیت را وارد نماید!';
                $error = true;
            }
             // ------------------------ Image validation ---------------
            if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["photo"]["type"] != "image/jpeg" && $_FILES["photo"]["type"] != "image/png") {
                    $error_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_photo = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_photo = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
           
        }
        //------------------------------------------------
        if(!$error) {
             $destination = "C:/xampp/htdocs/transport/admin/assets/img/guard/";
            if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
                move_uploaded_file($_FILES['photo']['tmp_name'], $destination . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5));
            $image = "assets/img/guard/" . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5);
            if(empty($_FILES["photo"]["name"])){
                $image = "";
            }
            $data = array(
                "name" => $_POST['name'],
                "fname" => $_POST['fname'],
                "location" => $_POST['location'],
                "phone" => $_POST['phone'],
                "job" => $_POST['job'],
                "photo" => $image,
              
            );
           $result= $this->GuardModel->insertGuard($data);
           
           if($result){
            GuardController::index("ثبت موفقانه انجام شد", 'success');
        }else{
            GuardController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            
            $this->load->view('include/header.inc.php');
            $this->load->view('addGuard', array(
                
                'error_name' => $error_name,
                'error_fname' => $error_fname,
                'error_job' => $error_job,
                'error_location' => $error_location,
                'error_phone' => $error_phone,
               
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
    function CheckEditGuard(){
        $error_name = $error_fname = $error_job= $error_location = $error_phone= $error_photo ='';
        $error = false;
        if (isset($_POST['AddGuard'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['name'])) {
                $error_name = 'لطفاً ا کود نمبر موتر را وارد نمبر';
                $error = true;
            }
            if (empty($_POST['fname'])) {
                $error_fname = 'لطفاً  نام دریور را وارد نمایدچ';
                $error = true;
            }
            if (empty($_POST['job'])) {
                $error_job = 'لطفاً  نوعیت موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['location'])) {
                $error_location = 'لطفاً  مودل موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['phone'])) {
                $error_phone = 'لطفاً  نمبر پلیت را وارد نماید!';
                $error = true;
            }
             // ------------------------ Image validation ---------------
            if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["photo"]["type"] != "image/jpeg" && $_FILES["photo"]["type"] != "image/png") {
                    $error_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_photo = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_photo = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
           
        }
        //------------------------------------------------
        if(!$error) {
             $destination = "C:/xampp/htdocs/transport/admin/assets/img/guard/";
            if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
                move_uploaded_file($_FILES['photo']['tmp_name'], $destination . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5));
            $image = "assets/img/guard/" . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5);
            if(empty($_FILES["photo"]["name"])){
                $image = "";
            }
            $id=$_POST['id'];
            $data = array(
                "name" => $_POST['name'],
                "fname" => $_POST['fname'],
                "location" => $_POST['location'],
                "phone" => $_POST['phone'],
                "job" => $_POST['job'],
                "photo" => $image,
              
            );
           $result= $this->GuardModel->updatGuard($id,$data);
           
           if($result){
            GuardController::index("ثبت موفقانه انجام شد", 'success');
        }else{
            GuardController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            
            $this->load->view('include/header.inc.php');
            $this->load->view('addGuard', array(
                
                'error_name' => $error_name,
                'error_fname' => $error_fname,
                'error_job' => $error_job,
                'error_location' => $error_location,
                'error_phone' => $error_phone,
               
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
    function delete_borrow(){
    	$id=$_GET['id'];
    	$result=$this->BorrowModel->deleteBorrow($id);
    	if($result){
    		redirect('BorrowController/index');
    	}
    }
    function addGuard(){
        
    	$this->load->view('include/header.inc.php');
        $this->load->view("addGuard");
        $this->load->view('include/footer.inc.php');

    }
    function porzaJat(){
    	$this->load->view('include/header.inc.php');
        $this->load->view("porzaJat");
        $this->load->view('include/footer.inc.php');
        
    }
    function porzajatDetail(){
       $this->load->view('include/header.inc.php');
        $this->load->view("porzajatDetail");
        $this->load->view('include/footer.inc.php'); 
    }
    function addPorzajat(){
       $this->load->view('include/header.inc.php');
        $this->load->view("addPorzajat");
        $this->load->view('include/footer.inc.php'); 
    }

}
 ?>

