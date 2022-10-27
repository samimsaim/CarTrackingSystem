
<?php
class SchoolController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('SchoolModel');
                	
	}
 	function index($message = null, $type = null){
        $data=$this->SchoolModel->GetSchool();
        $this->load->view('include/header.inc.php');
        $this->load->view("schoolView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
 	}
        function sahmeaDetail(){
        $id=$_GET['id'];
        $data=$this->CarModel->sahmeaDetail($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("sahmeaDetail",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
        }
      
      
        function carsView($message = null, $type = null){
        $data=$this->CarModel->getCars();
        $this->load->view('include/header.inc.php');
        $this->load->view("carsView",array('data'=>$data, 'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');     
        }
        function editSchool(){
        $id=$_GET['id'];
        $data=$this->SchoolModel->getSchoolById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("editSchool",array('data'=>$data));
        $this->load->view('include/footer.inc.php'); 

        }
        function addSchool(){
         $this->load->view('include/header.inc.php');
        $this->load->view("addSchool");
        $this->load->view('include/footer.inc.php');       
        }
     function CheckAddSchool(){
      $error_province = $error_destrict = $error_schoolName = $error_number = $error_lockDate = $error_openDate = $error_lockTime = '';
        $error = false;
        if (isset($_POST['Add'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا نام ولایت را وارد نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  نام ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['schoolName'])) {
                $error_schoolName = 'لطفاً  مکتب را وارد نماید';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['lockDate'])) {
                $error_lockDate = 'لطفاً  ناریخ  مسدود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['openDate'])) {
                $error_openDate = 'لطفاً  تاریخ بازگشای را وارد نماید';
                $error = true;
            }
            if (empty($_POST['lockTime'])) {
                $error_lockTime = 'لطفاً  مدت مسدود را وارد نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "shoolname" => $_POST['schoolName'],
                "number" => $_POST['number'],
                "lockDate" => $_POST['lockDate'],
                "openDate" => $_POST['openDate'],
                "locktime" => $_POST['lockTime'],
                
            );
           $result= $this->SchoolModel->inserSchool($data);
           
           if($result){
            SchoolController::index("موتر مورد نظر موفقانه اضافه شد", 'success');
        }else{
            SchoolController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addSchool', array(
                'error_province' => $error_province,
                'error_destrict' => $error_destrict,
                'error_schoolName' => $error_schoolName,
                'error_number' => $error_number,
                'error_lockDate' => $error_lockDate,
                'error_openDate' => $error_openDate,
                'error_lockTime' => $error_lockTime,
                
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
     function CheckEditSchool(){
      $error_province = $error_destrict = $error_schoolName = $error_number = $error_lockDate = $error_openDate = $error_lockTime = '';
        $error = false;
        if (isset($_POST['Add'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا نام ولایت را وارد نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  نام ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['schoolName'])) {
                $error_schoolName = 'لطفاً  مکتب را وارد نماید';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['lockDate'])) {
                $error_lockDate = 'لطفاً  ناریخ  مسدود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['openDate'])) {
                $error_openDate = 'لطفاً  تاریخ بازگشای را وارد نماید';
                $error = true;
            }
            if (empty($_POST['lockTime'])) {
                $error_lockTime = 'لطفاً  مدت مسدود را وارد نماید';
                $error = true;
            }
        }
        //------------------------------------------------
        if(!$error) {
            
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "shoolname" => $_POST['schoolName'],
                "number" => $_POST['number'],
                "lockDate" => $_POST['lockDate'],
                "openDate" => $_POST['openDate'],
                "locktime" => $_POST['lockTime'],
                
            );
           $result= $this->SchoolModel->inserSchool($data);
           
           if($result){
            SchoolController::index("موتر مورد نظر موفقانه اضافه شد", 'success');
        }else{
            SchoolController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
           } 
             else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addSchool', array(
                'error_province' => $error_province,
                'error_destrict' => $error_destrict,
                'error_schoolName' => $error_schoolName,
                'error_number' => $error_number,
                'error_lockDate' => $error_lockDate,
                'error_openDate' => $error_openDate,
                'error_lockTime' => $error_lockTime,
                
                
            ));
            $this->load->view('include/footer.inc.php');
        }
        }
        function DeletSchool(){
          $id=$_GET['id'];
          $result=$this->SchoolModel->DeletSchool($id);
          if($result){
            SchoolController::index("موتر مورد نظر حذف شد", 'success');
         }else{
            SchoolController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
 	

}?>





