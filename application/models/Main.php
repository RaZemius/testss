<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    // public function getNews() {
	// 	$result = $this->db->row('SELECT title, description FROM news');
	// 	return $result;
	// }
	public function getNews(){
		return $this->db->row('SELECT * from posts');
	}
    
}