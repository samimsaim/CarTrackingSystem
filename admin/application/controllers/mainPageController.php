<?php

class MainPageController extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		// $this->load->model('mainPageModel');
	}

	function index($message = null, $type = null,$result="صفحه اصلی"){
       
		$this->load->view('include/header.inc.php',array('result'=>$result));
		$this->load->view('mainPage');
		// $this->load->view('include/footer.inc.php');
	}
	function test(){
		$this->load->model('borrowModel');
		$jarema='2021-04-04';
		$result= $this->borrowModel->getDay($jarema);
		foreach ($result as $key) {
			$dat=$key->check_out;
			echo date('d', strtotime(date($jarema)));
			
		}
	}
    
	}
?>