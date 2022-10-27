<?php
class SchoolModel extends CI_Model{


	function GetSchl(){
    $this->db->where('naweat_tawzef',1);
		$this->db->from('car');
    return $this->db->get()->result();
	}
  function GetSchool(){
    $this->db->from('school');
    return $this->db->get()->result();
  }
  function EditFuel($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('fuel',$data);
  }
  function getFuelById($id){
    $this->db->where('id',$id);
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function GetKhedmateCar(){
    $this->db->where('naweat_tawzef',0);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function getFuelId($id){
    $this->db->where('id',$id);
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function getSchoolById($id){
    $this->db->where('id',$id);
    $this->db->from('school');
    return $this->db->get()->result();
  }
  function getFuel(){
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function inserSchool($data){
    return $this->db->insert('school',$data);
  }
  function DeletSchool($id){
    $this->db->where('id',$id);
    return  $this->db->delete('school');
  }
 
} 
?>
