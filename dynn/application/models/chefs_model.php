<?php
	class chefs_model extends CI_Model {
		function getAll() {
			$q = $this->db->get('chefs');
			
			if ($q->num_rows() > 0) {
				foreach ($q->result() as $row) {
					$data[] = $row;
				}
			return $data;
			}
		}
		function getChef($chef){
			$this->db->select("*");
			$this->db->from("chefs");
			$this->db->where("name",$chef);
			$query = $this->db->get();
			return $query->result();
		}
		function getAllChefsArray(){
			$this->db->select("*");
			$this->db->from("chefs");
			$query = $this->db->get();
			return $query->result_array();
		}
	}
?>