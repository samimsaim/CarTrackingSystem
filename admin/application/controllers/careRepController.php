
<?php
class CareRepController extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('CareModel');
        $this->load->model('transportRepModel');
                	
	}
    function careReport()
     {
        $data=$this->transportRepModel->getYear();
        $this->load->view('include/header.inc.php');
        $this->load->view("careRepView",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
     }
    function eventRep()
        {
        $this->load->view('include/header.inc.php');
        $this->load->view("eventRep");
        $this->load->view('include/footer.inc.php');
        }
    function carEventRep()
        {
        $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("carEventRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');    
        }
    function quarterView()
        {
            $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("quarterView",array('id'=>$id));
        $this->load->view('include/footer.inc.php');     
        }
    function careMonthlyRep()
        {
            $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("careMonthlyRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');     
        }
    function shahedDaily()
     {
        $id=$_GET['id'];
         $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedDaily",array('id'=>$id,'data'=>$data));
        $this->load->view('include/footer.inc.php'); 
        // date('Y', strtotime($id));

        }
    function ladarakDaily()
        {
        $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function afatDaily()
     {
        $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function ekhtetafDaily()
        {
        $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function theftDaily()
       {
        $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function destroyDaily()
        {
        $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function afrazDaily()
       {
        $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function thradDaily()
        {
        $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/thradDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function paradDaily()
        {
        $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function preventDaily()
        {
        $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventDaily",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php');       
        }
    function monthRep()
     {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/monthlyRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
     }
    function shahedHamal()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedHamal",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
       }
    function ladarakMonthly()
      {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
      }
    function afatMonthly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafMonthly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftMonthly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyMonthly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazMonthly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadMonthly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradMonthly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventMonthly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventMonthly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
 	/////////////////sawr //////////////////////   
    function sawrRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/sawrRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedSawr()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakSawr()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatSawr()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafSawr()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftSawr()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroySawr()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroySawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazSawr()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadSawr()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradSawr()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventSawr()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventSawr",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }

////////////////jawza//////////

    function jawzaRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/jawzaRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedJawza()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakJawza()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatJawza()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafJawza()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftJawza()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyJawza()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazJawza()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadJawza()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradJawza()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradJawza",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventJawza()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventJawza
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
//////////////////SARATAN//////////
    function saratanRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/saratanRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedSaratan()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakSaratan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatSaratan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafSaratan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftSaratan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroySaratan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroySaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazSaratan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadSaratan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradSaratan()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradSaratan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventSaratan()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventSaratan
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
 ////////////////ASAD/////////////
    function asadRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/asadRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedAsad()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakAsad()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatAsad()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafAsad()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftAsad()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyAsad()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazAsad()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadAsad()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradAsad()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradAsad",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventAsad()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventAsad
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
 ////////////////SNBLA//////////////
    function snblaRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/snblaRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedSnbla()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakSnbla()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatSnbla()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafSnbla()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftSnbla()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroySnbla()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroySnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazSnbla()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadSnbla()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradSnbla()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradSnbla",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventSnbla()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventSnbla
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
//////////////MEZAN///////////////
    function mezanRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/mezanRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedMezan()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakMezan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatMezan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafMezan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftMezan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyMezan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazMezan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadMezan()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradMezan()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradMezan",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventMezan()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventMezan
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
//////////////AQRAB///////////////////
    function aqrabRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/aqrabRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedAqrab()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakAqrab()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatAqrab()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafAqrab()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftAqrab()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyAqrab()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazAqrab()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadAqrab()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradAqrab()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradAqrab",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventAqrab()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventAqrab
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
////////////////////QAWS//////////////
    function qawsRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/qawsRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedQaws()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakQaws()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatQaws()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafQaws()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftQaws()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyQaws()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazQaws()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadQaws()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradQaws()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradQaws",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventQaws()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventQaws
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
/////////////////JADEE////////////////
    function jadeRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/jadeRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedJade()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakJade()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatJade()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafJade()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftJade()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyJade()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazJade()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadJade()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradJade()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradJade",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventJade()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventJade
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
///////////////DALWAA//////////////
    function dalwaRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/dalwaRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedDalwa()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakDalwa()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatDalwa()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafDalwa()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftDalwa()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyDalwa()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazDalwa()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadDalwa()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradDalwa()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradDalwa",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventDalwa()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventDalwa
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
///////////////HOOT/////////////////
    function hotRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/hotRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedHot()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakHot()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatHot()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafHot()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftHot()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyHot()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazHot()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadHot()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradHot()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradHot",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventHot()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventHot
            ",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
///////////QUARTER REP /////////////
    function quarterOne()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/quarterOne",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedQuarter1()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakQuarter1()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatQuarter1()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafQuarter1()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftQuarter1()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyQuarter1()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazQuarter1()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadQuarter1()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradQuarter1()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventQuarter1()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventQuarter1",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }

///////////////QUARTER TWO///////////////
    function quarterTwo()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/quarterTwo",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedQuarter2()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakQuarter2()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatQuarter2()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafQuarter2()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftQuarter2()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyQuarter2()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazQuarter2()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadQuarter2()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradQuarter2()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventQuarter2()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventQuarter2",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
///////////////QUARTER THREE/////////////
    function quarterThree()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/quarterThree",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }
    function shahedQuarter3()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakQuarter3()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatQuarter3()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafQuarter3()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftQuarter3()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyQuarter3()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazQuarter3()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadQuarter3()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradQuarter3()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventQuarter3()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventQuarter3",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }
//////////////QUARTER FOUR///////////////
    function quarterFour()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/quarterFour",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }        
    function shahedQuarter4()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakQuarter4()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatQuarter4()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafQuarter4()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftQuarter4()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyQuarter4()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazQuarter4()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadQuarter4()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradQuarter4()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventQuarter4()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventQuarter4",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }        
///////////////YEARLY REPORT/////////////
    function yearlyRep()
       {
              $id=$_GET['id'];
        $this->load->view('include/header.inc.php');
        $this->load->view("care/yearlyRep",array('id'=>$id));
        $this->load->view('include/footer.inc.php');  
        }        
    function shahedYearly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->GetEvent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/shahedYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ladarakYearly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getLadarak();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ladarakYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afatYearly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfat();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afatYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function ekhtetafYearly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getEkhtetaf();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/ekhtetafYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function theftYearly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getTheft();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/theftYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function destroyYearly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getDestroy();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/destroyYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function afrazYearly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getAfraz();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/afrazYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function threadYearly()
        {
            $id=$_GET['id'];
        $data=$this->CareModel->getThrad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/threadYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function paradYearly()
       {
            $id=$_GET['id'];
        $data=$this->CareModel->getParad();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/paradYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
        }
    function preventYearly()
     {
            $id=$_GET['id'];
        $data=$this->CareModel->getPrevent();
        $this->load->view('include/header.inc.php');
        $this->load->view("care/preventYearly",array('data'=>$data,'id'=>$id));
        $this->load->view('include/footer.inc.php'); 
     }        

}?>





