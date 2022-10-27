<?php
class EventModel extends CI_Model{


	function GetEvent(){
		$this->db->from('events');
    return $this->db->get()->result();
	}
  function insertEvent($data){
    return $this->db->insert('events',$data);
  }
  
  function getProvince(){
    $this->db->from('province');
    return $this->db->get()->result();
  }
  function getDestOfPro($id){
    $this->db->where('pro_id',$id);
    $this->db->from('destrict');
    return $this->db->get()->result();
  }
  function updatEvent($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('events',$data);
  }
  function getDate($id){
    $this->db->where('id',$id);
    $this->db->from('events');
    return $this->db->get()->result();
  }
  function GetLadarak(){
    $this->db->from('tawqef');
    return $this->db->get()->result();
  }
  
  function DeletEvent($id){
    $this->db->where('id',$id);
    return  $this->db->delete('events');
  }
   function insertLadarak($data){
    return $this->db->insert('tawqef',$data);
  }
  function getLadarakById($id){
    $this->db->where('id',$id);
    $this->db->from('tawqef');
    return $this->db->get()->result();
  }
  function updateLadarak($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('tawqef',$data);
  }
  function DeletLadarak($id){
    $this->db->where('id',$id);
    return  $this->db->delete('tawqef');
  }

  function GetVictime(){
     $this->db->from('victime');
    return $this->db->get()->result();
  }

   function insertVictime($data){
    return $this->db->insert('victime',$data);
  } 

  function deleteVictime($id){
    $this->db->where('id',$id);
    return  $this->db->delete('victime');
  }
  function getVictimeById($id){
    $this->db->where('id',$id);
    $this->db->from('victime');
    return $this->db->get()->result();

  }
  function updateVictime($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('victime',$data);
  }
  function GetEkhtetaf(){
    $this->db->from('ekhtetaf');
    return $this->db->get()->result();
  }

  function insertEkhtetaf($data){
    return $this->db->insert('ekhtetaf',$data);
  }
  function deleteEkhtetaf($id){
    $this->db->where('id',$id);
    return $this->db->delete('ekhtetaf');
  }
  function getEkhtetafById($id){
    $this->db->where('id',$id);
    $this->db->from('ekhtetaf');
    return $this->db->get()->result();
  }

  function updateEkhtetaf($id,$data){
     $this->db->where('id',$id);
    return $this->db->update('ekhtetaf',$data);
  }
  function GetTheft(){
    $this->db->from('theft');
    return $this->db->get()->result();
  }
  function insertTheft($data){
    return $this->db->insert('theft',$data);
  }
  function getTheftById($id){
    $this->db->where('id',$id);
    $this->db->from('theft');
    return $this->db->get()->result();
  }
  function deleteTheft($id){
    $this->db->where('id',$id);
    return $this->db->delete('theft');
  }
  function updateTheft($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('theft',$data);
  }

  function GetDestroy(){
    $this->db->from('destroy');
    return $this->db->get()->result();
  }
  function insertDestroy($data){
    return $this->db->insert('destroy',$data);
  }
  function getDestroyById($id){
    $this->db->where('id',$id);
    $this->db->from('destroy');
    return $this->db->get()->result();
  }
  function deleteDestroy($id){
    $this->db->where('id',$id);
    return $this->db->delete('destroy');
  }
  function editDestroy($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('destroy',$data);
  }

 function GetAfraz(){
    $this->db->from('afraz');
    return $this->db->get()->result();
  }
  function insertAfraz($data){
    return $this->db->insert('afraz',$data);
  }
  function getAfrazById($id){
    $this->db->where('id',$id);
    $this->db->from('afraz');
    return $this->db->get()->result();
  }
  function deleteAfraz($id){
    $this->db->where('id',$id);
    return $this->db->delete('afraz');
  }
  function editAfraz($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('afraz',$data);
  }

  function GetThread(){
    $this->db->from('thread');
    return $this->db->get()->result();
  }
  function insertThread($data){
    return $this->db->insert('thread',$data);
  }
  function getThreadById($id){
    $this->db->where('id',$id);
    $this->db->from('thread');
    return $this->db->get()->result();
  }
  function deleteThread($id){
    $this->db->where('id',$id);
    return $this->db->delete('thread');
  }
  function editThread($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('thread',$data);
  }

 function GetParad(){
    $this->db->from('parad');
    return $this->db->get()->result();
  }
  function insertParad($data){
    return $this->db->insert('parad',$data);
  }
  function getParadById($id){
    $this->db->where('id',$id);
    $this->db->from('parad');
    return $this->db->get()->result();
  }
  function deleteParad($id){
    $this->db->where('id',$id);
    return $this->db->delete('parad');
  }
  function editParad($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('parad',$data);
  }
  function GetPrevent(){
    $this->db->from('prevent');
    return $this->db->get()->result();
  }
  function insertPrevent($data){
    return $this->db->insert('prevent',$data);
  }
  function getPreventById($id){
    $this->db->where('id',$id);
    $this->db->from('prevent');
    return $this->db->get()->result();
  }
  function deletePrevent($id){
    $this->db->where('id',$id);
    return $this->db->delete('prevent');
  }
  function editPrevent($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('prevent',$data);
  }
} 
?>
