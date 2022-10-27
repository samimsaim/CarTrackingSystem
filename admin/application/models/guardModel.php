<?php
class GuardModel extends CI_Model{


	function getGuard()
  {
    
		$this->db->from('guard');
    return $this->db->get()->result();
	}
  function getCar()
  {
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function updatGuard($id,$data)
  {
    $this->db->where('id',$id);
    return $this->db->update('guard',$data);
  }
  function getFuelById($id)
  {
    $this->db->where('id',$id);
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function GetKhedmateCar()
  {
    $this->db->where('naweat_tawzef',0);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function editGuard($id)
  {
    $this->db->where('id',$id);
    $this->db->from('guard');
    return $this->db->get()->result();
  }
  function guardDetail($id)
  {
    $this->db->where('id',$id);
    $this->db->from('guard');
    return $this->db->get()->result();
  }
  function getFuel()
  {
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function insertGuard($data)
  {
    return $this->db->insert('guard',$data);
  }
  function DeleteGuard($id)
  {
    $this->db->where('id',$id);
    return  $this->db->delete('guard');
  }
 
} 
?>
