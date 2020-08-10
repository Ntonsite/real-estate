<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Subscription extends CI_Model{

    function getSubscriptionInfo($subId)
    {
        $this->db->select('*');
        $this->db->from('tbl_subscription');
        $this->db->where('$subId', $subId);
        $query = $this->db->get();
        
        return $query->result();
    }

    function checkSubscriptionExists($subname, $subId = 0)
    {
        $this->db->select("subname");
        $this->db->from("tbl_subscription");
        $this->db->where("subname", $subname);   
        if($subId != 0){
            $this->db->where("subId !=", $subId);
        }
        $query = $this->db->get();

        return $query->result();
    }

	function addSubscription($data){
		$this->db->trans_start();
		$this->db->insert('tbl_subscription', $data);
		
		$insert_id = $this->db->insert_id();
		
		$this->db->trans_complete();
		
		return $insert_id;
	}

	function editSubscription($data, $sub_id){
		$this->db->where('subId', $subId);
		$this->db->update('tbl_subscription', $data);
		
		return TRUE;
	}

	function deleteSubscription($subId, $data)
    {
        $this->db->where('subId', $subId);
        $this->db->update('tbl_subscription', $data);
        
        return $this->db->affected_rows();
    }
}