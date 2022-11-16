<?php
namespace application\lib;

use application\lib\Config;
use Exception;
use PDO;

class Database {

	protected $database;
	
	public function __construct() {
		try{
			$this->database = new PDO('mysql:host=' . Config::$dbConfig["host"] . ';dbname='.  Config::$dbConfig["database"]. ';charset=utf8mb4', Config::$dbConfig["username"], Config::$dbConfig["pass"]);
		} 
		catch (Exception $ex) {
			echo "[Ошибка подключения к  bd". $ex->getMessage()."]";
		}
	}

	public function query($sql, $params = []) {
		$stmt = $this->database->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				if (is_int($val)) {
					$type = PDO::PARAM_INT;
				} else {
					$type = PDO::PARAM_STR;
				}
				$stmt->bindValue(':'.$key, $val, $type);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function row($sql, $params = []) {
		$stmt = $this->query($sql, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []) {
		$stmt = $this->query($sql, $params);
		return $stmt->fetchColumn();
	}

	public function lastInsertId() {
		return $this->database->lastInsertId();
	}

}