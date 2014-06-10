<?php
	class food_model extends CI_Model {
		function getAll() {
			$q = $this->db->get('food');
			
			if ($q->num_rows() > 0) {
				foreach ($q->result() as $row) {
					$data[] = $row;
				}
			return $data;
			}
		}
		function getRecipe($recipe_var){
			$this->db->select("*");
			$this->db->from("food");
			$this->db->where("recipes",$recipe_var);
			$query = $this->db->get();
			return $query->result();
		}
	}
?>