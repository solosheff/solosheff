<?php
	class blog_model extends CI_Model {
		function getAll() {
			$q = $this->db->get('blog');
			
			if ($q->num_rows() > 0) {
				foreach ($q->result() as $row) {
					$data[] = $row;
				}
			return $data;
			}
		}
	}
?>