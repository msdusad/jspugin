<?php
session_start(); 
	class Database {
		private $folder_name;
		private $hostname;
		private $username;
		private $password;
		private $database; 
		private $conn;
		private $result;
		public function __construct() {
			if($_SERVER["HTTP_HOST"]=="192.168.1.194:8081") {
				$this->folder_name='/masterclass/';
				$this->hostname='localhost';
				$this->username='root';
				$this->password='';
				$this->database='masterclass'; 
			} else {
				$this->folder_name='/';
				$this->hostname='localhost';
				$this->username='yehjob_portal';
				$this->password='Sxkl9u~35=4Z';
				$this->database='yehjob_portal';
			} 	
			$this->conn= mysql_connect($this->hostname,$this->username,$this->password) or die("Couldn't connect to the database".mysql_error());
			mysql_select_db($this->database,$this->conn);
		}
			  
		public function execute($query) {
			$this->result = mysql_query($query, $this->conn);
		}
		public function getResult() {
			return mysql_fetch_assoc($this->result);
		}

		public function getResults() {
			$return =array();
			while($row=mysql_fetch_assoc($this->result)) {
				$return[] = $row;
			}
			return $return;
		}
			  
		public function rowcount() {
			return mysql_num_rows($this->result);
		}
			  
		public function LastId() {
			return mysql_insert_id();
		}

		public function affectedRow(){
			return mysql_affected_rows();
		}

	}

	if($_SERVER["HTTP_HOST"]=="192.168.1.194:8081"){
		
		$folder_name='/masterclass/';
	}
	else{
		
		$folder_name='/';
	
	}
	$root='http://'.$_SERVER["HTTP_HOST"].$folder_name;
	$doc_root=$_SERVER["DOCUMENT_ROOT"].$folder_name;
	$css_root=$root.'css/';
	$lib_root=$root.'lib/';
	$include_root=$root.'include/';
	$images_root=$root.'images/';
	$script_root=$root.'js/';
	
	date_default_timezone_set('Asia/Calcutta');
	$date=date('Y-m-d H:i:s');
	$modified_date=date('d-M-Y, D');
	
	$site_title="Master class";
	
	
	define("WEB_ROOT",$root);
	define("DOC_ROOT",$doc_root);
	define("CURR_DATE",$date);
	define("MODIFIED_DATE",$modified_date);
	define("CSS_ROOT",$css_root);
	define("LIB_ROOT",$lib_root);
	define("INCLUDE_ROOT",$include_root);
	define("SCRIPT_ROOT",$script_root);
	define("IMAGES_ROOT",$images_root);
	define("SITE_TITLE",$site_title);

?>