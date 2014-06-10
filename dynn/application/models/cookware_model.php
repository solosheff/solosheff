<?php
	class cookware_model extends CI_Model {
		function getAll($sort = null) {
			$this->db->select("*");
			$this->db->from("cookware");
			if($sort){
			$this->db->order_by($sort, "asc");
			}
			$query = $this->db->get();
			return $query->result();
		}
	}
?>