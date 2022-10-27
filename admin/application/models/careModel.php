<?php
class CareModel extends CI_Model{


	function GetEvent(){
		$this->db->from('events');
    return $this->db->get()->result();
	}
  function getLadarak(){
    $this->db->from('tawqef');
    return $this->db->get()->result();
  }
  function getAfat(){
    $this->db->from('victime');
    return $this->db->get()->result();
  }
  function getEkhtetaf(){
   $this->db->from('ekhtetaf');
   return $this->db->get()->result();
  }
  function getTheft(){
    $this->db->from('theft');
    return $this->db->get()->result();
  }
  function getDestroy(){
    $this->db->from('destroy');
    return $this->db->get()->result();
  }
  function getAfraz(){
    $this->db->from('afraz');
    return $this->db->get()->result();
  }
  function getThrad(){
    $this->db->from('thread');
    return $this->db->get()->result();
  }
  function getParad(){
    $this->db->from('parad');
    return $this->db->get()->result();
  }
  function getPrevent(){
    $this->db->from('prevent');
    return $this->db->get()->result();
  }
 
} 
?>
