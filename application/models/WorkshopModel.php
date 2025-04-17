<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class WorkshopModel extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session'); 
        //$this->load->helper('url');
    }

    public function insertLiveWorkshop($data){
    	
		$this->db->insert('workshop_reg', $data);
		$workshopid=$this->db->insert_id();
		return $workshopid;
	}

}
?>