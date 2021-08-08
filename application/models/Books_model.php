<?php 

	class Books_model extends CI_Model{
		
		public function getBooks($start,$length){
			return $this->db->offset($start)->limit($length)->get('books');
		}

		public function getTotalBooks(){
			$query = $this->db->select('COUNT(*) as total_books')->get('books');
			$result = $query->row();
			if($result){
				return $result->total_books;
			}
			return 0;

		}
	}
