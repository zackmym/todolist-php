<?php 
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'todo');

	class Database {
		public $db;

		public function __construct() {
			$this->db_conn();
		}

		public function db_conn() {
			$this->db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

			if($this->db->connect_errno) {
				die ("Database connection Failed!!". $this->db->connect_error);
			} 
		}

		public function escape_string($string) {

			$escaped_string = $this->db->real_escape_string($string);
			return $escaped_string;
		}

		public function query($sql) {
			$result = $this->db->query($sql);
			if(!$result) {
				die('query failed!! '.$this->db->error);
			} else {
				return $result;
			}
		}
	}

	$database = new Database();
 ?>