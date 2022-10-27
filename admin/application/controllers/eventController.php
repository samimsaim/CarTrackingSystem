
<?php
class EventController extends MY_Controller{

	function __construct()
    {
		parent::__construct();
		$this->load->model('EventModel');
                	
	}
 	function index($message = null, $type = null)
    {
        $data=$this->EventModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("eventView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
 	}
    function security()
    {
      $this->load->view('include/header.inc.php');
      $this->load->view("security");
      $this->load->view('include/footer.inc.php');  
    }
    function getDest()
    {
        $facId = $_POST["facId"];
        $deps = $this->EventModel->getDestOfPro($facId);
        echo json_encode($deps);
    }
        function addEvent(){
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addEvent",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
        }
    function CheckAddEvent()
    {
        $error_province = $error_destrict = $error_orgName = $error_date = $error_typeOfJob = $error_gender = $error_number = $error_detail = '';
        $error = false;
        if (isset($_POST['addEvent'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "typOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "numberOf" => $_POST['number'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertEvent($data);
            if($result){
             EventController::index("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addEvent', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_number' => $error_number,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function CheckEditEvent()
    {
        $error_province = $error_destrict = $error_orgName = $error_date = $error_typeOfJob = $error_gender = $error_number = $error_detail = '';
        $error = false;
        if (isset($_POST['editEvent'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "typOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "numberOf" => $_POST['number'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->updatEvent($id,$data);
            if($result){
             EventController::index("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editEvent', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_number' => $error_number,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function editEvent()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getDate($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editEvent",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function eventDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getDate($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("eventDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function DeletEvent()
    {
        $id=$_GET['id'];
        $result=$this->EventModel->DeletEvent($id);
        if($result){
            EventController::index("واقعه مورد نظر موفقانه حذف شما", 'success');
        }else{
            EventController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }
    function ladarakView($message = null, $type = null)
    {
        $data=$this->EventModel->GetLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("ladarakView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addLadarak()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addLadarak",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
     }
        
    function CheckAddLadarak()
    {
        $error_province = $error_destrict = $error_orgName =  $error_typeOfJob = $error_gender = $error_detail =$error_twqefOrg =$error_dateOfOcur =$error_dateOfBack =$error_typeOfEvent = '';
        $error = false;
        if (isset($_POST['addLadarak'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['dateOfOcur'])) {
                $error_dateOfOcur = 'لطفاً  تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['dateOfBack'])) {
                $error_dateOfBack = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
               if (empty($_POST['typeOfEvent'])) {
                $error_typeOfEvent = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
             if (empty($_POST['twqefOrg'])) {
                $error_twqefOrg = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }                  
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "dateOfOcure" => $_POST['dateOfOcur'],
                "orgName" => $_POST['orgName'],
                "typeOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "dateOfBack" => $_POST['dateOfBack'],
                "tawqefOrg" => $_POST['twqefOrg'],
                "typeOfEvent" => $_POST['typeOfEvent'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertLadarak($data);
            if($result){
             EventController::ladarakView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::ladarakView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addLadarak', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_dateOfBack' => $error_dateOfBack,
                'error_dateOfOcur' => $error_dateOfOcur,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_twqefOrg' => $error_twqefOrg,
                'error_typeOfEvent' => $error_typeOfEvent,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function editLadarak()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getLadarakById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editLadarak",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function CheckEditLadarak()
    {
        $error_province = $error_destrict = $error_orgName =  $error_typeOfJob = $error_gender = $error_detail =$error_twqefOrg =$error_dateOfOcur =$error_dateOfBack =$error_typeOfEvent = '';
        $error = false;
        if (isset($_POST['addLadarak'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['dateOfOcur'])) {
                $error_dateOfOcur = 'لطفاً  تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['dateOfBack'])) {
                $error_dateOfBack = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
               if (empty($_POST['typeOfEvent'])) {
                $error_typeOfEvent = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
             if (empty($_POST['twqefOrg'])) {
                $error_twqefOrg = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }                  
        }
        //------------------------------------------------
        if(!$error) {
            $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "dateOfOcure" => $_POST['dateOfOcur'],
                "orgName" => $_POST['orgName'],
                "typeOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "dateOfBack" => $_POST['dateOfBack'],
                "tawqefOrg" => $_POST['twqefOrg'],
                "typeOfEvent" => $_POST['typeOfEvent'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->updateLadarak($id,$data);
            if($result){
             EventController::ladarakView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::ladarakView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editLadarak', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_dateOfBack' => $error_dateOfBack,
                'error_dateOfOcur' => $error_dateOfOcur,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_twqefOrg' => $error_twqefOrg,
                'error_typeOfEvent' => $error_typeOfEvent,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function ladarakDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getLadarakById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("ladarkDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function DeletLadarak()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->DeletLadarak($id);
          if($result){
            EventController::ladarakView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::ladarakView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    /////////////////////////// victime begining///////////////////
    function victimeView($message = null, $type = null)
    {
        $data=$this->EventModel->GetVictime();
        $this->load->view('include/header.inc.php');
        $this->load->view("victimeView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addVictime()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addVictime",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddVictime()
    {
        $error_province = $error_destrict = $error_orgName =  $error_typeOfJob = $error_gender = $error_detail =$error_talafat =$error_date =$error_number = '';
        $error = false;
        if (isset($_POST['addVictime'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
               if (empty($_POST['talafat'])) {
                $error_talafat = 'لطفاً  نوعیت تلفات را انتخاب نماید';
                $error = true;
            }
                              
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "typOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "numberOf" => $_POST['number'],
                "talafat" => $_POST['talafat'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertVictime($data);
            if($result){
             EventController::victimeView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::victimeView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addVictime', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_number' => $error_number,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_talafat' => $error_talafat,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
       }
    
     function editVictime(){
        $id=$_GET['id'];
        $value=$this->EventModel->getVictimeById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editVictime",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
         function CheckEditVictime(){
        $error_province = $error_destrict = $error_orgName =  $error_typeOfJob = $error_gender = $error_detail =$error_talafat =$error_date =$error_number = '';
        $error = false;
        if (isset($_POST['addVictime'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
               if (empty($_POST['talafat'])) {
                $error_talafat = 'لطفاً  نوعیت تلفات را انتخاب نماید';
                $error = true;
            }
                              
        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "typOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "numberOf" => $_POST['number'],
                "talafat" => $_POST['talafat'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->updateVictime($id,$data);
            if($result){
             EventController::victimeView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::victimeView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editVictime', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_number' => $error_number,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_talafat' => $error_talafat,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function victimeDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getVictimeById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("victimeDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function deleteVictime()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deleteVictime($id);
          if($result){
            EventController::victimeView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::victimeView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }

    ////////////////////////////ekhtetaf///////////////////

    function ekhtetafView($message = null, $type = null)
    {
        $data=$this->EventModel->GetEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("ekhtetafView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addEkhtetaf()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addEkhtetaf",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddEkhtetaf()
    {
        $error_province = $error_destrict = $error_orgName = $error_date = $error_date1 = $error_typeOfJob = $error_gender = $error_number = $error_detail = '';
        $error = false;
        if (isset($_POST['addEkhtetaf'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ  حادثه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date1 = 'لطفاً  تاریخ  رهاییرا وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "dateOfOcure" => $_POST['date'],
                "dateOfBack" => $_POST['date1'],
                "orgName" => $_POST['orgName'],
                "typOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "numberOf" => $_POST['number'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertEkhtetaf($data);
            if($result){
             EventController::ekhtetafView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::ekhtetafView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addEkhtetaf', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_date1' => $error_date,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_number' => $error_number,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function editEkhtetaf()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getEkhtetafById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editEkhtetaf",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function CheckEitEkhtetaf()
    {
        $error_province = $error_destrict = $error_orgName = $error_date = $error_date1 = $error_typeOfJob = $error_gender = $error_number = $error_detail = '';
        $error = false;
        if (isset($_POST['addEkhtetaf'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ  حادثه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date1 = 'لطفاً  تاریخ  رهاییرا وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfJob'])) {
                $error_typeOfJob = 'لطفاً   نوعیت وظیفه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['gender'])) {
                $error_gender = 'لطفاً   جنسیت را انتخاب نماید!';
                $error = true;
            }
            if (empty($_POST['number'])) {
                $error_number = 'لطفاً  تعداد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "dateOfOcure" => $_POST['date'],
                "dateOfBack" => $_POST['date1'],
                "orgName" => $_POST['orgName'],
                "typOfJob" => $_POST['typeOfJob'],
                "gender" => $_POST['gender'],
                "numberOf" => $_POST['number'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->updateEkhtetaf($id,$data);
            if($result){
             EventController::ekhtetafView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::ekhtetafView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editEkhtetaf', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_date1' => $error_date,
                'error_typeOfJob' => $error_typeOfJob,
                'error_gender' => $error_gender,
                'error_number' => $error_number,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
     function ekhtetafDetail(){
        $id=$_GET['id'];
        $value=$this->EventModel->getEkhtetafById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("ekhtetafDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
    function deleteEkhtetaf()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deleteEkhtetaf($id);
          if($result){
            EventController::ekhtetafView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::ekhtetafView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    /////////////////// END//////////////////////////////
    //////////////////THEFT/////////////////////////////
    function theftView($message = null, $type = null)
    {
        $data=$this->EventModel->GetTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("theftView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addTheft()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addTheft",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddTheft()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date = $error_bref = $error_detail = '';
        $error = false;
        if (isset($_POST['addTheft'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ  حادثه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['bref'])) {
                $error_bref = 'لطفاً  تاریخ  رهاییرا وارد نماید';
                $error = true;
            }
            
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "bref" => $_POST['bref'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertTheft($data);
            if($result){
             EventController::theftView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::theftView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addTheft', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_bref' => $error_bref,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function theftDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getTheftById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("theftDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
    function deleteTheft()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deleteTheft($id);
          if($result){
            EventController::theftView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::theftView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    function editTheft()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getTheftById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editTheft",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function CheckEditTheft()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date = $error_bref = $error_detail = '';
        $error = false;
        if (isset($_POST['addTheft'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ  حادثه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['bref'])) {
                $error_bref = 'لطفاً  تاریخ  رهاییرا وارد نماید';
                $error = true;
            }
            
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "bref" => $_POST['bref'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->updateTheft($id,$data);
            if($result){
             EventController::theftView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::theftView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addTheft', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_bref' => $error_bref,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    //////////////////////destroy///////////////
     function destroyView($message = null, $type = null)
    {
        $data=$this->EventModel->GetDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("destroyView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addDestroy()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addDestroy",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddDestroy()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date = $error_typeOfEvent = $error_detail= $error_typeOf = '';
        $error = false;
        if (isset($_POST['addDestroy'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ  حادثه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfEvent'])) {
                $error_typeOfEvent = 'لطفاً  نوعیت حادثه را وارد نماید';
                $error = true;
            }
             if (empty($_POST['typeOf'])) {
                $error_typeOf = 'لطفاً  نوعیت حساره را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "dateOfOcure" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "typeOfEvent" => $_POST['typeOfEvent'],
                "typeOf" => $_POST['typeOf'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertDestroy($data);
            if($result){
             EventController::destroyView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::destroyView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addDestroy', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_typeOfEvent' => $error_typeOfEvent,
                'error_typeOf' => $error_typeOf,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function destroyDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getDestroyById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("destroyDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
    function deleteDestroy()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deleteDestroy($id);
          if($result){
            EventController::destroyView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::destroyView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    function editDestroy()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getDestroyById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editDestroy",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function CheckEditDestroy()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date = $error_typeOfEvent = $error_detail= $error_typeOf = '';
        $error = false;
        if (isset($_POST['addDestroy'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ  حادثه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfEvent'])) {
                $error_typeOfEvent = 'لطفاً  نوعیت حادثه را وارد نماید';
                $error = true;
            }
             if (empty($_POST['typeOf'])) {
                $error_typeOf = 'لطفاً  نوعیت حساره را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "dateOfOcure" => $_POST['date'],
                "orgName" => $_POST['orgName'],
                "typeOfEvent" => $_POST['typeOfEvent'],
                "typeOf" => $_POST['typeOf'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->editDestroy($id,$data);
            if($result){
             EventController::destroyView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::destroyView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editDestroy', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_typeOfEvent' => $error_typeOfEvent,
                'error_typeOf' => $error_typeOf,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    ////////////////////////////// AFRAZ ///////////

      function afrazView($message = null, $type = null)
    {
        $data=$this->EventModel->GetAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("afrazView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addAfraz()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addAfraz",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddAfraz()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_date1 = $error_type = $error_detail = '';
        $error = false;
        if (isset($_POST['addAfraz'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   افراز را وارد نماید';
                $error = true;
            }
             if (empty($_POST['date1'])) {
                $error_date1 = 'لطفاً  تاریخ  خروج را وارد نماید';
                $error = true;
            }
            if (empty($_POST['type'])) {
                $error_type = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "insertDate" => $_POST['date'],
                "outDate" => $_POST['date1'],
                "orgName" => $_POST['orgName'],
                "type" => $_POST['type'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertAfraz($data);
            if($result){
             EventController::afrazView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::afrazView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addAfraz', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_date1' => $error_date1,
                'error_type' => $error_type,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function afrazDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getAfrazById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("afrazDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
    function deleteAfraz()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deleteAfraz($id);
          if($result){
            EventController::afrazView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::afrazView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    function editAfraz()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getAfrazById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editAfraz",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function CheckeditAfraz()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_date1 = $error_type = $error_detail = '';
        $error = false;
        if (isset($_POST['addAfraz'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   افراز را وارد نماید';
                $error = true;
            }
             if (empty($_POST['date1'])) {
                $error_date1 = 'لطفاً  تاریخ  خروج را وارد نماید';
                $error = true;
            }
            if (empty($_POST['type'])) {
                $error_type = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "insertDate" => $_POST['date'],
                "outDate" => $_POST['date1'],
                "orgName" => $_POST['orgName'],
                "type" => $_POST['type'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->editAfraz($id,$data);
            if($result){
             EventController::afrazView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::afrazView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editAfraz', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_date1' => $error_date1,
                'error_type' => $error_type,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    ////////////////// thread ///////////////////
      function threadView($message = null, $type = null)
    {
        $data=$this->EventModel->GetThread();
        $this->load->view('include/header.inc.php');
        $this->load->view("threadView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addThread()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addThread",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddThread()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_typeOfThread = $error_tadaber = $error_detail= $error_mushajera = '';
        $error = false;
        if (isset($_POST['addThread'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   افراز را وارد نماید';
                $error = true;
            }
             if (empty($_POST['tadaber'])) {
                $error_tadaber = 'لطفاً  تاریخ  خروج را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfThread'])) {
                $error_typeOfThread = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['mushajera'])) {
                $error_mushajera = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "typeOfThread" => $_POST['typeOfThread'],
                "orgName" => $_POST['orgName'],
                "etekhazTadaber" => $_POST['tadaber'],
                "mushajera" => $_POST['mushajera'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->insertThread($data);
            if($result){
             EventController::threadView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::threadView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addThread', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_typeOfThread' => $error_typeOfThread,
                'error_tadaber' => $error_tadaber,
                'error_mushajera' => $error_mushajera,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function threadDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getThreadById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("threadDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
    function deleteThread()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deleteThread($id);
          if($result){
            EventController::threadView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::threadView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    function editThread()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getThreadById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editThread",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
    function CheckEditThread()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_typeOfThread = $error_tadaber = $error_detail= $error_mushajera = '';
        $error = false;
        if (isset($_POST['addThread'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   افراز را وارد نماید';
                $error = true;
            }
             if (empty($_POST['tadaber'])) {
                $error_tadaber = 'لطفاً  تاریخ  خروج را وارد نماید';
                $error = true;
            }
            if (empty($_POST['typeOfThread'])) {
                $error_typeOfThread = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['mushajera'])) {
                $error_mushajera = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "date" => $_POST['date'],
                "typeOfThread" => $_POST['typeOfThread'],
                "orgName" => $_POST['orgName'],
                "etekhazTadaber" => $_POST['tadaber'],
                "mushajera" => $_POST['mushajera'],
                "detail" => $_POST['detail'],
                
            );

            $result=$this->EventModel->editThread($id,$data);
            if($result){
             EventController::threadView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::threadView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editThread', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_typeOfThread' => $error_typeOfThread,
                'error_tadaber' => $error_tadaber,
                'error_mushajera' => $error_mushajera,
                'error_detail' => $error_detail,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    ////////////////// parad ////////////////
      function paradView($message = null, $type = null)
    {
        $data=$this->EventModel->GetParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("paradView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addParad()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addParad",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddParad()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_date1=  $error_caus = $error_wish = $error_plan= $error_type= $error_destroy= $error_action = '';
        $error = false;
        if (isset($_POST['addParad'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   شزوع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date1'])) {
                $error_date1 = 'لطفاً  تاریخ   ختم را وارد نماید';
                $error = true;
            }
             if (empty($_POST['caus'])) {
                $error_caus = 'لطفاً  تاریخ  خروج را وارد نماید';
                $error = true;
            }
            if (empty($_POST['wish'])) {
                $error_wish = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['plan'])) {
                $error_plan = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['type'])) {
                $error_type = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
            if (empty($_POST['destroy'])) {
                $error_destroy = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
             if (empty($_POST['action'])) {
                $error_action = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
           

        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "startDate" => $_POST['date'],
                "endDate" => $_POST['date1'],
                "cause" => $_POST['caus'],
                "orgName" => $_POST['orgName'],
                "wish" => $_POST['wish'],
                "plan" => $_POST['plan'],
                "type" => $_POST['type'],
                "destroy" => $_POST['destroy'],
                "action" => $_POST['action'],
                
            );

            $result=$this->EventModel->insertParad($data);
            if($result){
             EventController::paradView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::paradView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addParad', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_date1' => $error_date1,
                'error_wish' => $error_wish,
                'error_caus' => $error_caus,
                'error_plan' => $error_plan,
                'error_type' => $error_type,
                'error_destroy' => $error_destroy,
                'error_action' => $error_action,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function paradDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getParadById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("paradDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
    function deleteParad()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deleteParad($id);
          if($result){
            EventController::paradView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::paradView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    function editParad()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getParadById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editParad",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
    }
     function CheckEditParad()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_date1=  $error_caus = $error_wish = $error_plan= $error_type= $error_destroy= $error_action = '';
        $error = false;
        if (isset($_POST['addParad'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   شزوع را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date1'])) {
                $error_date1 = 'لطفاً  تاریخ   ختم را وارد نماید';
                $error = true;
            }
             if (empty($_POST['caus'])) {
                $error_caus = 'لطفاً  تاریخ  خروج را وارد نماید';
                $error = true;
            }
            if (empty($_POST['wish'])) {
                $error_wish = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['plan'])) {
                $error_plan = 'لطفاً  نوعیت  را وارد نماید';
                $error = true;
            }
            if (empty($_POST['type'])) {
                $error_type = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
            if (empty($_POST['destroy'])) {
                $error_destroy = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
             if (empty($_POST['action'])) {
                $error_action = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
           
           

        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "startDate" => $_POST['date'],
                "endDate" => $_POST['date1'],
                "cause" => $_POST['caus'],
                "orgName" => $_POST['orgName'],
                "wish" => $_POST['wish'],
                "plan" => $_POST['plan'],
                "type" => $_POST['type'],
                "destroy" => $_POST['destroy'],
                "action" => $_POST['action'],
                
            );

            $result=$this->EventModel->editParad($id,$data);
            if($result){
             EventController::paradView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::paradView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editParad', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_date1' => $error_date1,
                'error_wish' => $error_wish,
                'error_caus' => $error_caus,
                'error_plan' => $error_plan,
                'error_type' => $error_type,
                'error_destroy' => $error_destroy,
                'error_action' => $error_action,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    //////////////// prevent /////////////////////
       function preventView($message = null, $type = null)
    {
        $data=$this->EventModel->GetPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("preventView",array('data'=>$data,'Message' => $message, 'Type' => $type, ));
        $this->load->view('include/footer.inc.php');
    }
    function addPrevent()
    {
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("addPrevent",array('pro'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function CheckAddPrevent()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_datail=  $error_numberOfEvent= '';
        $error = false;
        if (isset($_POST['addPrevent'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
             if (empty($_POST['numberOfEvent'])) {
                $error_numberOfEvent = 'لطفاً  تعداد واقعات جلوگیری شده را واردنماید';
                $error = true;
            }
           
           

        }
        //------------------------------------------------
        if(!$error) {
          
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "detail" => $_POST['detail'],
                "date" => $_POST['date'],
                "numberOfEvent" => $_POST['numberOfEvent'],
                "orgName" => $_POST['orgName'],
               
                
            );

            $result=$this->EventModel->insertPrevent($data);
            if($result){
             EventController::preventView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::preventView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('addPrevent', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_detail' => $error_detail,
                'error_numberOfEvent' => $error_numberOfEvent,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function preventDetail()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getPreventById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("preventDetail",array('value'=>$value));
        $this->load->view('include/footer.inc.php');
        }
    function deletePrevent()
    {
          $id=$_GET['id'];
          $result=$this->EventModel->deletePrevent($id);
          if($result){
            EventController::preventView("واقعه مورد نظر موفقانه حذف شما", 'success');
         }else{
            EventController::preventView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
         }
    }
    function editPrevent()
    {
        $id=$_GET['id'];
        $value=$this->EventModel->getpreventById($id);
        $data=$this->EventModel->getProvince();
        $this->load->view('include/header.inc.php');
        $this->load->view("editPrevent",array('pro'=>$data,'value'=>$value));
        $this->load->view('include/footer.inc.php');
        
    }
     function CheckEditPrevent()
    {
        $error_province = $error_destrict = $error_orgName =  $error_date=  $error_datail=  $error_numberOfEvent= '';
        $error = false;
        if (isset($_POST['addPrevent'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['province'])) {
                $error_province = 'لطفاً ا ولایت را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['destrict'])) {
                $error_destrict = 'لطفاً  ولسوالی را وارد نماید';
                $error = true;
            }
            if (empty($_POST['orgName'])) {
                $error_orgName = 'لطفاً  آ نام نهاد را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ   تاریخ را وارد نماید';
                $error = true;
            }
            if (empty($_POST['detail'])) {
                $error_detail = 'لطفاً  جزیات را وارد نماید';
                $error = true;
            }
             if (empty($_POST['numberOfEvent'])) {
                $error_numberOfEvent = 'لطفاً  تعداد واقعات جلوگیری شده را واردنماید';
                $error = true;
            }
           
           

        }
        //------------------------------------------------
        if(!$error) {
          $id=$_POST['id'];
            $data = array(
                "province" => $_POST['province'],
                "destrict" => $_POST['destrict'],
                "detail" => $_POST['detail'],
                "date" => $_POST['date'],
                "numberOfEvent" => $_POST['numberOfEvent'],
                "orgName" => $_POST['orgName'], 
            );
            $result=$this->EventModel->editPrevent($id,$data);
            if($result){
             EventController::preventView("واقعیه جدید موفقانه اضافه شد", 'success');
            }else{
            EventController::preventView("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
        }
             else {
            $data=$this->EventModel->getProvince();
            $this->load->view('include/header.inc.php');
            $this->load->view('editPrevent', array(
                'pro' => $data,
                // 'dep' => $dep,
                'error_province'=>$error_province,
                'error_destrict' => $error_destrict,
                'error_orgName' => $error_orgName,
                'error_date' => $error_date,
                'error_detail' => $error_detail,
                'error_numberOfEvent' => $error_numberOfEvent,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
}?>





