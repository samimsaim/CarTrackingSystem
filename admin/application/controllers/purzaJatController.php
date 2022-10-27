
<?php
class PurzaJatController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('PurzajatModel');
        $this->load->model('FuelModel');
                	
	}
 	function index($message = null, $type = null){
        $data=$this->PurzajatModel->getPurzajat();
        $this->load->view('include/header.inc.php');
        $this->load->view("purzajat",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
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
        function purzaDetail(){
           $id=$_GET['id'];
        $data=$this->PurzajatModel->getPurzaById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("purzaDetail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');     
        }
        function carsView($message = null, $type = null){
        $data=$this->CarModel->getCars();
        $this->load->view('include/header.inc.php');
        $this->load->view("carsView",array('data'=>$data, 'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');     
        }
        function editPurza(){
        $id=$_GET['id'];
        $result=$this->PurzajatModel->getPurzaById($id);
        $data=$this->FuelModel->getCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("editPurza",array('data'=>$data,'result'=>$result));
        $this->load->view('include/footer.inc.php'); 

        }
        function addPurza(){
        $data=$this->FuelModel->getCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("addPurza",array('data'=>$data));
        $this->load->view('include/footer.inc.php');       
        }
        function CheckAddPurza(){
      $error_car = $error_hawalaNumber = $error_jensName = $error_tadadeJens = $error_qemateJens = $error_taidateQalam = $error_qemateMajmoe = $error_tarikhSodorHawala = $error_naweateTawzai='';
        $error = false;
        if (isset($_POST['Add'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['car'])) {
                $error_car = 'لطفاً ا موتز را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['hawalaNumber'])) {
                $error_hawalaNumber = 'لطفاً  نمبر حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['jensName'])) {
                $error_jensName = 'لطفاً  نام جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['tadadeJens'])) {
                $error_tadadeJens = 'لطفاً  تعداد جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['qemateJens'])) {
                $error_qemateJens = 'لطفاً  قیمت جنس را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['taidateQalam'])) {
                $error_taidateQalam = 'لطفاً  تعداد قلم را وارد نماید';
                $error = true;
            }
            if (empty($_POST['qemateMajmoe'])) {
                $error_qemateMajmoe = 'لطفاً  قیمت مجموعی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['tarikhSodorHawala'])) {
                $error_tarikhSodorHawala = 'لطفاً  تارخ صدور حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['naweateTawzai'])) {
                $error_naweateTawzai = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            
            $data = array(
                "hawalaNumber" => $_POST['hawalaNumber'],
                "jensName" => $_POST['jensName'],
                "taidadJens" => $_POST['tadadeJens'],
                "qematJens" => $_POST['qemateJens'],
                "taidadQalam" => $_POST['taidateQalam'],
                "qematMajmoe" => $_POST['qemateMajmoe'],
                "tarikhSodorHawala" => $_POST['tarikhSodorHawala'],
                "naweatTawzai" => $_POST['naweateTawzai'],
                "car_id" => $_POST['car'],
            );
           $result= $this->PurzajatModel->insertPurza($data);
           
           if($result){
            PurzaJatController::index("پرزه مورد نظر موفقانه اظافه شد", 'success');
        }else{
            PurzaJatController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addPurza', array(
                'error_car' => $error_car,
                'error_hawalaNumber' => $error_hawalaNumber,
                'error_jensName' => $error_jensName,
                'error_tadadeJens' => $error_tadadeJens,
                'error_qemateJens' => $error_qemateJens,
                'error_taidateQalam' => $error_taidateQalam,
                'error_qemateMajmoe' => $error_qemateMajmoe,
                'error_tarikhSodorHawala' => $error_tarikhSodorHawala,
                'error_naweateTawzai' => $error_naweateTawzai,
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
          function CheckEditPurza(){
      $error_car = $error_hawalaNumber = $error_jensName = $error_tadadeJens = $error_qemateJens = $error_taidateQalam = $error_qemateMajmoe = $error_tarikhSodorHawala = $error_naweateTawzai='';
        $error = false;
        if (isset($_POST['Add'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['car'])) {
                $error_car = 'لطفاً ا موتز را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['hawalaNumber'])) {
                $error_hawalaNumber = 'لطفاً  نمبر حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['jensName'])) {
                $error_jensName = 'لطفاً  نام جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['tadadeJens'])) {
                $error_tadadeJens = 'لطفاً  تعداد جنس را وارد نماید';
                $error = true;
            }
            if (empty($_POST['qemateJens'])) {
                $error_qemateJens = 'لطفاً  قیمت جنس را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['taidateQalam'])) {
                $error_taidateQalam = 'لطفاً  تعداد قلم را وارد نماید';
                $error = true;
            }
            if (empty($_POST['qemateMajmoe'])) {
                $error_qemateMajmoe = 'لطفاً  قیمت مجموعی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['tarikhSodorHawala'])) {
                $error_tarikhSodorHawala = 'لطفاً  تارخ صدور حواله را وارد نماید';
                $error = true;
            }
            if (empty($_POST['naweateTawzai'])) {
                $error_naweateTawzai = 'لطفاً  نوعیت توزیع را وارد نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            $id=$_POST['id'];
            $data = array(
                "hawalaNumber" => $_POST['hawalaNumber'],
                "jensName" => $_POST['jensName'],
                "taidadJens" => $_POST['tadadeJens'],
                "qematJens" => $_POST['qemateJens'],
                "taidadQalam" => $_POST['taidateQalam'],
                "qematMajmoe" => $_POST['qemateMajmoe'],
                "tarikhSodorHawala" => $_POST['tarikhSodorHawala'],
                "naweatTawzai" => $_POST['naweateTawzai'],
                "car_id" => $_POST['car'],
            );
           $result= $this->PurzajatModel->updatePurza($id,$data);
           
           if($result){
            PurzaJatController::index("پرزه مورد نظر موفقانه اظافه شد", 'success');
        }else{
            PurzaJatController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addPurza', array(
                'error_car' => $error_car,
                'error_hawalaNumber' => $error_hawalaNumber,
                'error_jensName' => $error_jensName,
                'error_tadadeJens' => $error_tadadeJens,
                'error_qemateJens' => $error_qemateJens,
                'error_taidateQalam' => $error_taidateQalam,
                'error_qemateMajmoe' => $error_qemateMajmoe,
                'error_tarikhSodorHawala' => $error_tarikhSodorHawala,
                'error_naweateTawzai' => $error_naweateTawzai,
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
        function DeletePurza(){
          $id=$_GET['id'];
          $result=$this->PurzajatModel->DeletePurza($id);
          if($result){
            PurzaJatController::index("موفقانه حذف شد", 'success');
         }else{
            PurzaJatController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
 	

}?>





