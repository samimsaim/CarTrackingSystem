<?php

class FuelController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('FuelModel');
	}
	function index($message = null, $type = null){
       $data=$this->FuelModel->getFuel();
        $this->load->view('include/header.inc.php');
        $this->load->view("fuel",array('data'=>$data,'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');


 	}
 	function fuelDetail(){
        $id=$_GET['id'];
        $data=$this->FuelModel->getFuelId($id);
 		$this->load->view('include/header.inc.php');
        $this->load->view("fuelDetail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
 	}
    function editFuel(){
        $id=$_GET['id'];
        $data=$this->FuelModel->getCar();
        $result=$this->FuelModel->getFuelById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("editFuel",array('data'=>$data,'result'=>$result));
        $this->load->view('include/footer.inc.php');
    }
 	function CheckAddFuel(){
        $error_car = $error_fuelAmount = $error_fuelType = $error_dakhawst = $error_hawala = $error_hawalaNumber='';
        $error = false;
        if (isset($_POST['AddFuel'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['car'])) {
                $error_car = 'لطفاً ا کود نمبر موتر را وارد نمبر';
                $error = true;
            }
            if (empty($_POST['fuelAmount'])) {
                $error_fuelAmount = 'لطفاً  نام دریور را وارد نمایدچ';
                $error = true;
            }
            if (empty($_POST['fuelType'])) {
                $error_fuelType = 'لطفاً  نوعیت موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['darkhawst'])) {
                $error_dakhawst = 'لطفاً  مودل موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['hawala'])) {
                $error_hawala = 'لطفاً  نمبر پلیت را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['hawalaNumber'])) {
                $error_hawalaNumber = 'لطفاً  نوعیت توظیف را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
            
            $data = array(
                "car_id" => $_POST['car'],
                "fuelAmount" => $_POST['fuelAmount'],
                "typOfFuel" => $_POST['fuelType'],
                "darkhaws_date  " => $_POST['darkhawst'],
                "hawala_date" => $_POST['hawala'],
                "hawala_num" => $_POST['hawalaNumber'],
              
            );
           $result= $this->FuelModel->insertFuel($data);
           
           if($result){
            FuelController::index("ثبت موفقانه انجام شد", 'success');
        }else{
            CarController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $data=$this->FuelModel->getFuel();
            $this->load->view('include/header.inc.php');
            $this->load->view('addFuel', array(
                'data'=>$data,
                'error_car' => $error_car,
                'error_fuelType' => $error_fuelType,
                'error_fuelAmount' => $error_fuelAmount,
                'error_dakhawst' => $error_dakhawst,
                'error_hawala' => $error_hawala,
                'error_hawalaNumber' => $error_hawalaNumber,
               
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
    //     function DeletCar(){
    //             $id=$_GET['id'];
    //       $result=$this->CarModel->deleteCar($id);
    //       if($result){
    //         CarController::carsView("موتر مورد نظر حذف شد", 'success');
    //      }else{
    //         CarController::CarsView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
    //     }
    // }
    function CheckEditFuel(){
        $error_car = $error_fuelAmount = $error_fuelType = $error_dakhawst = $error_hawala = $error_hawalaNumber='';
        $error = false;
        if (isset($_POST['AddFuel'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['car'])) {
                $error_car = 'لطفاً ا کود نمبر موتر را وارد نمبر';
                $error = true;
            }
            if (empty($_POST['fuelAmount'])) {
                $error_fuelAmount = 'لطفاً  نام دریور را وارد نمایدچ';
                $error = true;
            }
            if (empty($_POST['fuelType'])) {
                $error_fuelType = 'لطفاً  نوعیت موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['darkhawst'])) {
                $error_dakhawst = 'لطفاً  مودل موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['hawala'])) {
                $error_hawala = 'لطفاً  نمبر پلیت را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['hawalaNumber'])) {
                $error_hawalaNumber = 'لطفاً  نوعیت توظیف را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
            $id=$_POST['id'];
            $data = array(
                "car_id" => $_POST['car'],
                "fuelAmount" => $_POST['fuelAmount'],
                "typOfFuel" => $_POST['fuelType'],
                "darkhaws_date  " => $_POST['darkhawst'],
                "hawala_date" => $_POST['hawala'],
                "hawala_num" => $_POST['hawalaNumber'],
              
            );
           $result= $this->FuelModel->EditFuel($id,$data);
           
           if($result){
            FuelController::index("ثبت موفقانه انجام شد", 'success');
        }else{
            CarController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $data=$this->FuelModel->getFuel();
            $this->load->view('include/header.inc.php');
            $this->load->view('addFuel', array(
                'data'=>$data,
                'error_car' => $error_car,
                'error_fuelType' => $error_fuelType,
                'error_fuelAmount' => $error_fuelAmount,
                'error_dakhawst' => $error_dakhawst,
                'error_hawala' => $error_hawala,
                'error_hawalaNumber' => $error_hawalaNumber,
               
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
        function DeletCar(){
                $id=$_GET['id'];
          $result=$this->CarModel->deleteCar($id);
          if($result){
            CarController::carsView("موتر مورد نظر حذف شد", 'success');
         }else{
            CarController::CarsView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }
    function delete_borrow(){
    	$id=$_GET['id'];
    	$result=$this->BorrowModel->deleteBorrow($id);
    	if($result){
    		redirect('BorrowController/index');
    	}
    }
    function addFuel(){
        $data=$this->FuelModel->getCar();
    	$this->load->view('include/header.inc.php');
        $this->load->view("addFuel",array('data'=>$data));
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

