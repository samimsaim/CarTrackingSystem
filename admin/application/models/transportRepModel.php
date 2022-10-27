<?php
class transportRepModel extends CI_Model{


	function getMoblail(){
		$this->db->from('moblail');
    return $this->db->get()->result();
	}
  function GetKhedmateCar(){
    $this->db->where('naweat_tawzef',0);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function getYear(){
    $this->db->from('year');
    return $this->db->get()->result();

  }
  function deleteYear($id){
    $this->db->where('year',$id);
    return $this->db->delete('year');
  }
    function addYear(){
        $type=$this->input->post('action');
        $data=array(
            'year'=>$this->input->post('date'),
            );
        return $this->db->insert('year',$data);
    }
  function sahmeaDetail($id){
    $this->db->where('id',$id);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function updateMoblail($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('moblail',$data);
  }
  function getMoblailById($id){
    $this->db->where('id',$id);
    $this->db->from('moblail');
    return $this->db->get()->result();
  }
  function getCars(){
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function insertMoblail($data){
    return $this->db->insert('moblail',$data);
  }
  function DeleteMoblil($id){
    $this->db->where('id',$id);
    return  $this->db->delete('moblail');
  }
 
} 
?>
