<?php
	class cutlery_model extends CI_Model {
		function getAll($sort = null) {
			$this->db->select("*");
			$this->db->from("cutlery");
			if($sort){
			$this->db->order_by($sort, "asc");
			}
			$query = $this->db->get();
			return $query->result();
		}
	}
?>