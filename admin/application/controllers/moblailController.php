
<?php
class MoblailController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('MoblailModel');
        $this->load->model('FuelModel');
                	
	}
 	function index($message = null, $type = null){
        $data=$this->MoblailModel->getMoblail();
        $this->load->view('include/header.inc.php');
        $this->load->view("moblail",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
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
        function moblailDetail(){
         $id=$_GET['id'];
        $data=$this->MoblailModel->getMoblailById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("moblailDetail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');     
        }
        function carsView($message = null, $type = null){
        $data=$this->CarModel->getCars();
        $this->load->view('include/header.inc.php');
        $this->load->view("carsView",array('data'=>$data, 'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');     
        }
        function editMoblail(){
        $id=$_GET['id'];
        $result=$this->MoblailModel->getMoblailById($id);
        $data=$this->FuelModel->getCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("editMoblile",array('data'=>$data,'result'=>$result));
        $this->load->view('include/footer.inc.php'); 

        }
        function addMoblail(){
        $data=$this->FuelModel->getCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("addMoblail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');       
        }
        function CheckAddMoblail(){
      $error_car = $error_tarikhDarHawala = $error_tarikhHawala = $error_hawalaNumber = $error_meqdarHawala = $error_felterMoblail = $error_felterDezal = $error_felterPetrol = $error_waikm= $error_haidrolek= $error_geres= $error_seail=$error_abAnteFrez='';
        $error = false;
        if (isset($_POST['Add'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['car'])) {
                $error_car = 'لطفاً ا موتز را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['tarikhDarHawala'])) {
                $error_tarikhDarHawala = 'لطفاً  نمبر حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['tarikhHawala'])) {
                $error_tarikhHawala = 'لطفاً  نام جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['hawalaNumber'])) {
                $error_hawalaNumber = 'لطفاً  تعداد جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['meqdarHawala'])) {
                $error_meqdarHawala = 'لطفاً  قیمت جنس را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['felterMoblail'])) {
                $error_felterMoblail = 'لطفاً  تعداد قلم را وارد نماید';
                $error = true;
            }
            if (empty($_POST['felterDezal'])) {
                $error_felterDezal = 'لطفاً  قیمت مجموعی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['felterPetrol'])) {
                $error_felterPetrol = 'لطفاً  تارخ صدور حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['waikm'])) {
                $error_waikm = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['haidrolek'])) {
                $error_haidrolek = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['geres'])) {
                $error_geres = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['seail'])) {
                $error_seail = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['abAnteFrez'])) {
                $error_abAnteFrez = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            
            $data = array(
                "tarikhDarkhast" => $_POST['tarikhDarHawala'],
                "tarikhHawala" => $_POST['tarikhHawala'],
                "hawalaNumber" => $_POST['hawalaNumber'],
                "meqdarHawala" => $_POST['meqdarHawala'],
                "felterMoblail" => $_POST['felterMoblail'],
                "felterDezal" => $_POST['felterDezal'],
                "felterPetrol" => $_POST['felterPetrol'],
                "waikm" => $_POST['waikm'],
                "haidrolek" => $_POST['haidrolek'],
                "geres" => $_POST['geres'],
                "seail" => $_POST['seail'],
                "anteFrezAb" => $_POST['abAnteFrez'],
                "car_id" => $_POST['car'],
            );
           $result= $this->MoblailModel->insertMoblail($data);
           
           if($result){
            MoblailController::index("مبلایل  موفقانه اضافه شد", 'success');
        }else{
            MoblailController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addMoblail', array(
                'error_tarikhDarHawala' => $error_tarikhDarHawala,
                'error_tarikhHawala' => $error_tarikhHawala,
                'error_hawalaNumber' => $error_hawalaNumber,
                'error_meqdarHawala' => $error_meqdarHawala,
                'error_felterMoblail' => $error_felterMoblail,
                'error_felterDezal' => $error_felterDezal,
                'error_felterPetrol' => $error_felterPetrol,
                'error_waikm' => $error_waikm,
                'error_haidrolek' => $error_haidrolek,
                'error_geres' => $error_geres,
                'error_seail' => $error_seail,
                'error_abAnteFrez' => $error_abAnteFrez,
                'error_car' => $error_car,
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
          function CheckEditMoblail(){
      $error_car = $error_tarikhDarHawala = $error_tarikhHawala = $error_hawalaNumber = $error_meqdarHawala = $error_felterMoblail = $error_felterDezal = $error_felterPetrol = $error_waikm= $error_haidrolek= $error_geres= $error_seail=$error_abAnteFrez='';
        $error = false;
        if (isset($_POST['Add'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['car'])) {
                $error_car = 'لطفاً ا موتز را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['tarikhDarHawala'])) {
                $error_tarikhDarHawala = 'لطفاً  نمبر حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['tarikhHawala'])) {
                $error_tarikhHawala = 'لطفاً  نام جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['hawalaNumber'])) {
                $error_hawalaNumber = 'لطفاً  تعداد جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['meqdarHawala'])) {
                $error_meqdarHawala = 'لطفاً  قیمت جنس را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['felterMoblail'])) {
                $error_felterMoblail = 'لطفاً  تعداد قلم را وارد نماید';
                $error = true;
            }
            if (empty($_POST['felterDezal'])) {
                $error_felterDezal = 'لطفاً  قیمت مجموعی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['felterPetrol'])) {
                $error_felterPetrol = 'لطفاً  تارخ صدور حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['waikm'])) {
                $error_waikm = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['haidrolek'])) {
                $error_haidrolek = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['geres'])) {
                $error_geres = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['seail'])) {
                $error_seail = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['abAnteFrez'])) {
                $error_abAnteFrez = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            $id=$_POST['id'];
            $data = array(
                "tarikhDarkhast" => $_POST['tarikhDarHawala'],
                "tarikhHawala" => $_POST['tarikhHawala'],
                "hawalaNumber" => $_POST['hawalaNumber'],
                "meqdarHawala" => $_POST['meqdarHawala'],
                "felterMoblail" => $_POST['felterMoblail'],
                "felterDezal" => $_POST['felterDezal'],
                "felterPetrol" => $_POST['felterPetrol'],
                "waikm" => $_POST['waikm'],
                "haidrolek" => $_POST['haidrolek'],
                "geres" => $_POST['geres'],
                "seail" => $_POST['seail'],
                "anteFrezAb" => $_POST['abAnteFrez'],
                "car_id" => $_POST['car'],
            );
           $result= $this->MoblailModel->updateMoblail($id,$data);
           
           if($result){
            MoblailController::index("مبلایل  موفقانه اضافه شد", 'success');
        }else{
            MoblailController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('editMoblail', array(
                'error_tarikhDarHawala' => $error_tarikhDarHawala,
                'error_tarikhHawala' => $error_tarikhHawala,
                'error_hawalaNumber' => $error_hawalaNumber,
                'error_meqdarHawala' => $error_meqdarHawala,
                'error_felterMoblail' => $error_felterMoblail,
                'error_felterDezal' => $error_felterDezal,
                'error_felterPetrol' => $error_felterPetrol,
                'error_waikm' => $error_waikm,
                'error_haidrolek' => $error_haidrolek,
                'error_geres' => $error_geres,
                'error_seail' => $error_seail,
                'error_abAnteFrez' => $error_abAnteFrez,
                'error_car' => $error_car,
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
        function DeleteMoblil(){
          $id=$_GET['id'];
          $result=$this->MoblailModel->DeleteMoblil($id);
          if($result){
            MoblailController::index("موفقانه حذف شد", 'success');
         }else{
            MoblailController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
 	

}?>





