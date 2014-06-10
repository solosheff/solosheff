<?php
	class bakeware_model extends CI_Model {
		function getAll($sort = null) {
			/*$q = $this->db->get('bakeware');
			
			if ($q->num_rows() > 0) {
				foreach ($q->result() as $row) {
					$data[] = $row;
				}
			return $data;
			}*/
			$this->db->select("*");
			$this->db->from("bakeware");
			if($sort){
			$this->db->order_by($sort, "asc");
			}
			$query = $this->db->get();
			return $query->result();
			//"SELECT * FROM bakeware ORDER BY 'price'"
		}
	}
?>