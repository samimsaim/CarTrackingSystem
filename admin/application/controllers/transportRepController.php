<?php

class TransportRepController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('transportRepModel');
        $this->load->model('FuelModel');
        $this->load->model('PurzajatModel');
         $this->load->model('CarModel');
	}
   
   function test(){
        
        $this->load->view('include/header.inc.php');
        $this->load->view("test");
        $this->load->view('include/footer.inc.php');
  }
  function yearlyRep(){
        $data=$this->FuelModel->getCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("yearlyRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function transportReport(){
        $data=$this->transportRepModel->getYear();
        $this->load->view('include/header.inc.php');
        $this->load->view("transportReport",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
    }
    function deleteYear(){
      $id=$_GET['id'];
      $data=$this->transportRepModel->deleteYear($id);
      if($data){
        redirect('TransportRepController/transportReport');
      }
    }
	function index($message = null, $type = null){
        $this->load->view('include/header.inc.php');
        $this->load->view("transportRepView");
        $this->load->view('include/footer.inc.php');
 	}
 	function dailyRep(){
        $data=$this->FuelModel->getCar();
 		$this->load->view('include/header.inc.php');
        $this->load->view("dailyRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
 	}
    function dailyReportDetail(){
        $id=$_GET['id'];
        $data=$this->FuelModel->getCar();
        $result=$this->FuelModel->getFuelById($id);
        $this->load->view('include/header.inc.php');
        $this->load->view("editFuel",array('data'=>$data,'result'=>$result));
        $this->load->view('include/footer.inc.php');
    }
    function monthRep(){
        $data=$this->FuelModel->getCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("monthRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
    }
 	
        function monthlyRep(){
          $id=$_GET['id'];
          $data=$this->CarModel->getcarById($id);
          $this->load->view('include/header.inc.php');
          $this->load->view('monthlyPorz',array('data'=>$data));
          $this->load->view('include/footer.inc.php');

    }
    function dailyMoblail(){
          $id=$_GET['id'];
          $data=$this->CarModel->getcarById($id);
          $this->load->view('include/header.inc.php');
          $this->load->view('dailyMoblail',array('data'=>$data));
          $this->load->view('include/footer.inc.php');
    }
    function dailyFuel(){
          $id=$_GET['id'];
          $data=$this->CarModel->getcarById($id);
          $this->load->view('include/header.inc.php');
          $this->load->view('dailyFuel',array('data'=>$data));
          $this->load->view('include/footer.inc.php'); 
    }
    function monthlyMoblailRep(){
    	$id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
    	 $this->load->view('include/header.inc.php');
         $this->load->view('monthlyMoblail',array('data'=>$data));
         $this->load->view('include/footer.inc.php');
    }
    function monthlyFuelRep(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
         $this->load->view('include/header.inc.php');
         $this->load->view('monthlyFuel',array('data'=>$data,'id'=>$id));
         $this->load->view('include/footer.inc.php');
    }
    function purzaDaily(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
    	$this->load->view('include/header.inc.php');
        $this->load->view("porzaDaily",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
    }
   
     function rubRep(){
        $data=$this->FuelModel->getCar();
        $this->load->view('include/header.inc.php');
        $this->load->view("rubRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
    }

   function addYear(){
    $result=$this->transportRepModel->addYear();
    if($result){
      redirect('TransportRepController/transportReport');
    }
   }
  

    function purzaRub(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
         $this->load->view('include/header.inc.php');
         $this->load->view('purzaRub',array('data'=>$data));
         $this->load->view('include/footer.inc.php');
    }
     function yearlyPorza(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
         $this->load->view('include/header.inc.php');
         $this->load->view('yearlyPorza',array('data'=>$data));
         $this->load->view('include/footer.inc.php');
    }
    function fuelRub(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
         $this->load->view('include/header.inc.php');
         $this->load->view('fuelRub',array('data'=>$data));
         $this->load->view('include/footer.inc.php');  
    }
    function moblailRub(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
         $this->load->view('include/header.inc.php');
         $this->load->view('moblailRub',array('data'=>$data));
         $this->load->view('include/footer.inc.php'); 
    }
     function yearlyFuel(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
         $this->load->view('include/header.inc.php');
         $this->load->view('yearlyFuel',array('data'=>$data));
         $this->load->view('include/footer.inc.php'); 
    }
     function yearlyMoblail(){
        $id=$_GET['id'];
        $data=$this->CarModel->getcarById($id);
         $this->load->view('include/header.inc.php');
         $this->load->view('yearlyMoblail',array('data'=>$data));
         $this->load->view('include/footer.inc.php'); 
    }

}
 ?>

