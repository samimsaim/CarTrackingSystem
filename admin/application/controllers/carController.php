
<?php
class CarController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('CarModel');
                	
	}
 	function index($message = null, $type = null){
        $data=$this->CarModel->GetSahmeaCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("sahmeaCar",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
 	}
        function sahmeaDetail(){
        $id=$_GET['id'];
        $data=$this->CarModel->sahmeaDetail($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("sahmeaDetail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
        }
        function khedmateCar(){
        $data=$this->CarModel->GetKhedmateCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("KhedmateCar",array('data'=>$data));
        $this->load->view('include/footer.inc.php');    
        }
        function khedmateDetail(){
           $id=$_GET['id'];
        $data=$this->CarModel->sahmeaDetail($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("khedmateDetail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');     
        }
        function carsView($message = null, $type = null){
        $data=$this->CarModel->getCars();
        $this->load->view('include/header.inc.php');
        $this->load->view("carsView",array('data'=>$data, 'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');     
        }
        function editCar(){
        $id=$_GET['id'];
        $data=$this->CarModel->getCarById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("editCar",array('data'=>$data));
        $this->load->view('include/footer.inc.php'); 

        }
        function addCar(){
         $this->load->view('include/header.inc.php');
        $this->load->view("addCar");
        $this->load->view('include/footer.inc.php');       
        }
        function CheckAddCar(){
      $error_cod = $error_type_of_tawzef = $error_type_of_car = $error_type_of_fuel = $error_driver_name = $error_car_model = $error_user_ref = $error_user = $error_palet='';
        $error = false;
        if (isset($_POST['AddCar'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['codNumber'])) {
                $error_cod = 'لطفاً ا کود نمبر موتر را وارد نمبر';
                $error = true;
            }
            if (empty($_POST['driverName'])) {
                $error_driver_name = 'لطفاً  نام دریور را وارد نمایدچ';
                $error = true;
            }
            if (empty($_POST['typeOfCar'])) {
                $error_type_of_car = 'لطفاً  نوعیت موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['carModel'])) {
                $error_car_model = 'لطفاً  مودل موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['palet'])) {
                $error_palet = 'لطفاً  نمبر پلیت را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['naweatTawzef'])) {
                $error_type_of_tawzef = 'لطفاً  نوعیت توظیف را وارد نماید';
                $error = true;
            }
            if (empty($_POST['usingRef'])) {
                $error_user_ref = 'لطفاً  مرجع استفاده کننده را وارد نماید';
                $error = true;
            }
            if (empty($_POST['user'])) {
                $error_user = 'لطفاً  استفاده کننده را وارد نماید';
                $error = true;
            }
            if (empty($_POST['fuel'])) {
                $error_type_of_fuel = 'لطفاً  نوعیت تیل را  انتخاب نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            
            $data = array(
                "cod_num" => $_POST['codNumber'],
                "driver_name" => $_POST['driverName'],
                "typ_of_car" => $_POST['typeOfCar'],
                "car_model" => $_POST['carModel'],
                "palet" => $_POST['palet'],
                "naweat_tawzef" => $_POST['naweatTawzef'],
                "us_refr" => $_POST['usingRef'],
                "user" => $_POST['user'],
                "type_of_fuel" => $_POST['fuel'],
            );
           $result= $this->CarModel->insertCar($data);
           
           if($result){
            CarController::carsView("موتر مورد نظر موفقانه اضافه شد", 'success');
        }else{
            CarController::carsView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addCar', array(
                'error_cod' => $error_cod,
                'error_driver_name' => $error_driver_name,
                'error_type_of_fuel' => $error_type_of_fuel,
                'error_type_of_car' => $error_type_of_car,
                'error_car_model' => $error_car_model,
                'error_palet' => $error_palet,
                'error_type_of_tawzef' => $error_type_of_tawzef,
                'error_user_ref' => $error_user_ref,
                'error_user' => $error_user,
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
         function CheckEditCar(){
      $error_cod = $error_type_of_tawzef = $error_type_of_car = $error_type_of_fuel = $error_driver_name = $error_car_model = $error_user_ref = $error_user = $error_palet='';
        $error = false;
        if (isset($_POST['AddCar'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['codNumber'])) {
                $error_cod = 'لطفاً ا کود نمبر موتر را وارد نمبر';
                $error = true;
            }
            if (empty($_POST['driverName'])) {
                $error_driver_name = 'لطفاً  نام دریور را وارد نمایدچ';
                $error = true;
            }
            if (empty($_POST['typeOfCar'])) {
                $error_type_of_car = 'لطفاً  نوعیت موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['carModel'])) {
                $error_car_model = 'لطفاً  مودل موتر را وارد نماید';
                $error = true;
            }
            if (empty($_POST['palet'])) {
                $error_palet = 'لطفاً  نمبر پلیت را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['naweatTawzef'])) {
                $error_type_of_tawzef = 'لطفاً  نوعیت توظیف را وارد نماید';
                $error = true;
            }
            if (empty($_POST['usingRef'])) {
                $error_user_ref = 'لطفاً  مرجع استفاده کننده را وارد نماید';
                $error = true;
            }
            if (empty($_POST['user'])) {
                $error_user = 'لطفاً  استفاده کننده را وارد نماید';
                $error = true;
            }
            if (empty($_POST['fuel'])) {
                $error_type_of_fuel = 'لطفاً  نوعیت تیل را  انتخاب نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            $id=$_POST['id'];
            $data = array(
                "cod_num" => $_POST['codNumber'],
                "driver_name" => $_POST['driverName'],
                "typ_of_car" => $_POST['typeOfCar'],
                "car_model" => $_POST['carModel'],
                "palet" => $_POST['palet'],
                "naweat_tawzef" => $_POST['naweatTawzef'],
                "us_refr" => $_POST['usingRef'],
                "user" => $_POST['user'],
                "type_of_fuel" => $_POST['fuel'],
            );
           $result= $this->CarModel->EditCar($id,$data);
           
           if($result){
            CarController::carsView("موتر مورد نظر موفقانه اضافه شد", 'success');
        }else{
            CarController::carsView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('editCar', array(
                'error_cod' => $error_cod,
                'error_driver_name' => $error_driver_name,
                'error_type_of_fuel' => $error_type_of_fuel,
                'error_type_of_car' => $error_type_of_car,
                'error_car_model' => $error_car_model,
                'error_palet' => $error_palet,
                'error_type_of_tawzef' => $error_type_of_tawzef,
                'error_user_ref' => $error_user_ref,
                'error_user' => $error_user,
                
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
 	

}?>





