<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ads_model extends CI_Model{

    function getAdsInfo($ad_Id)
    {
        $this->db->select('*');
        $this->db->from('tbl_ads');
        $this->db->where('$ad_Id', $ad_Id);
        $query = $this->db->get();
        
        return $query->result();
    }

    function checkAdsExists($adname, $ad_Id = 0)
    {
        $this->db->select("adname");
        $this->db->from("tbl_ads");
        $this->db->where("adname", $adname);   
        if($ad_Id != 0){
            $this->db->where("ad_Id !=", $ad_Id);
        }
        $query = $this->db->get();

        return $query->result();
    }

	function addAd($data){
		$this->db->trans_start();
		$this->db->insert('tbl_ads', $data);
		
		$insert_id = $this->db->insert_id();
		
		$this->db->trans_complete();
		
		return $insert_id;
	}

	function editAd($data, $ad_id){
		$this->db->where('ad_Id', $ad_Id);
		$this->db->update('tbl_ads', $data);
		
		return TRUE;
	}

	function deleteSubscription($ad_Id, $data)
    {
        $this->db->where('ad_Id', $ad_Id);
        $this->db->update('tbl_ads', $data);
        
        return $this->db->affected_rows();
    }
}